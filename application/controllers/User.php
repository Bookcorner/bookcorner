<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class User extends CI_Controller {
    
    public function __construct() {        
        parent::__construct ();
        $this->load->model ( 'users_model' );
        
    }
    
    public function showUserInfo() {        
        $userId;
        $session = 'id';
        
        if (check_session_exist($session)){
            $userId = $this->session->userdata ( $session );
        } else {
            $this->session->set_flashdata ( 'signInError', 'Inicie sesión para continuar' );
            redirect ( base_url (), 'refresh' );
        }
        
        $data ['title'] = 'Información de Usuario';
        $data ['userInfo'] = $this->users_model->getUserInfo ( $userId );

        $views =  [
                'cabeceras' => [
                        'templates/cabeceras/cabecera_base',
                        'templates/cabeceras/cabecera_usuario'
                ], 
                'contenidos' => [
                        'user/user_info'
                ],
                'footer' => 'templates/footers/base_footer'
        ];
        
        loadCustomViews($views, $data);
    }
    
    public function showUserConfig() {        
        $data ['title'] = 'Información de Usuario';
        
        $viewURI = 'user/user_config';
        loadBasicViews ( $viewURI, $data );
    }
    
    public function signup() {
        
        $this->setSignUpFormRules();
        $isFormValidationOk = $this->form_validation->run();
        
        if ($isFormValidationOk) {
    
            $username = set_value ( 'user' );
            $email = set_value ( 'email' );
    
            $user = $this->users_model->check_exist_user ( $username, $email );
            
            $isUserOk = ($user == 0);
            $isNicknameUsed = ($user == 1);
            $isMailUsed = ($user == 2);
            
            $isCaptchaOk = $this->checkCaptchaMatch('signup');
            
            if (!$isCaptchaOk) {
                $this->session->set_flashdata ( 'signUpFail', captchaErrorMsg() );
            } else if ($isNicknameUsed) {
                $this->session->set_flashdata ( 'signUpFail', 'El nombre de usuario está en uso' );
            } else if ($isMailUsed) {
                $this->session->set_flashdata ( 'signUpFail', 'El correo electrónico está en uso' );
            } else if ($isUserOk) {
                $newUser = $this->dispenseNewUser();
                $nameReceiver = $newUser->user_name;
                $validation = $newUser->user_validation;
                
                /*
                 * El protocolo sera http o https
                 */
                $url = $_SERVER ['REQUEST_SCHEME'] . '://' . $_SERVER ['SERVER_NAME'] ;
                
                /*
                 * Si esta en local en apache, habra que añadir /bookcorner/
                 */
                if ($_SERVER ['SERVER_NAME'] == 'localhost' || $_SERVER ['SERVER_NAME'] == '127.0.0.1') {
                    $url .= '/bookcorner';
                }
    
                $message = getMailActivationMsg($nameReceiver, $url, $validation);
                $sendMail = $this->sendMail($email, $message, 'Correo de Activación');
                // enviamos el correo de registro
                if ($sendMail) {
                    $this->session->set_flashdata ( 'ok', 'Se ha registrado satisfactoriamente, le enviaremos un correo de activación.' );
                    $this->users_model->saveUser($newUser);
                } else {
                    $this->session->set_flashdata ( 'signUpError', 'No se le ha podido enviar el correo, vuelva a intentarlo' );
                }
            } 
        } else {
            $this->session->set_flashdata ( 'signUpFail', 'Formulario incorrecto' );
        }
    
        redirect ( base_url (), 'refresh' );
    }
    private function setSignUpFormRules(){
        $this->form_validation->set_rules ( 'name', 'Nombre', 'required' );
        $this->form_validation->set_rules ( 'surname', 'Apellido', 'required' );
        $this->form_validation->set_rules ( 'user', 'Usuario', 'required' );
        $this->form_validation->set_rules ( 'genre', 'Género', 'required' );
        $this->form_validation->set_rules ( 'captchaControl', 'Captcha', 'required' );
        $this->form_validation->set_rules ( 'pass', 'Contraseña', 'required' );
        $this->form_validation->set_rules ( 'repass', 'Confirmar Contraseña', 'required' );
        $this->form_validation->set_rules ( 'email', 'Email', 'required|valid_email' );
        $this->form_validation->set_rules ( 'reemail', 'Email', 'required' );
    }
    private function checkCaptchaMatch($idCaptcha){
        $captcha = $this->session->flashdata("captcha-$idCaptcha");
        $captcha = strtolower($captcha);
        $captchaUser = set_value( 'captchaControl' );
        $captchaUser = strtolower($captchaUser);
        return ($captcha == $captchaUser);
    }
    private function dispenseNewUser(){
        $validation = $this->users_model->getRandomString();
        
        $newUser = R::Dispense ( 'user' );
        $newUser->user_name = set_value ( 'name' );
        $newUser->user_surname = set_value ( 'surname' );
        $newUser->user_nickname = set_value ( 'user' );
        $newUser->user_pwd = encrypt( set_value ( 'pass' ) );
        $newUser->user_validation = $validation;
        $newUser->user_email = set_value ( 'email' );
        $newUser->user_avatar = 'basic.jpg'; // imagen basica
        $newUser->user_genre = 'M';
        $newUser->userrole_id = 1; // registrado, no es moderador ni admin
        $newUser->userstatus_id = 2; // inactivo, enviar correo de activacion
        return $newUser;
    }
    
    public function sendContact() {
        $this->form_validation->set_rules ( 'name', 'Nombre', 'required' );
        $this->form_validation->set_rules ( 'email', 'Email', 'required|valid_email' );
        $this->form_validation->set_rules ( 'message', 'Mensaje', 'required' );
        $this->form_validation->set_rules ( 'captchaControl', 'Captcha', 'required' );
        
        $isFormValidationOk = $this->form_validation->run();
    
        if ($isFormValidationOk) {
            
            $isCaptchaOk = $this->checkCaptchaMatch('feedback');
    
            $email = set_value( 'email' );
            $message = set_value( 'message' );
    
            if (!$isCaptchaOk) {
                $this->session->set_flashdata ( 'sendmailerror', captchaErrorMsg() );
                
            } else {
    
                $messageEmail = "Email de $email : <br /><br /> $message";
    
                $sendMail = $this->sendMail('thecornerbook@gmail.com', $messageEmail, 'Correo de Contacto');
                // enviamos el correo de contactar
    
                if ($sendMail) {
                    $this->session->set_flashdata ( 'ok', 'Se ha enviado el correo satisfactoriamente' );
                } else {
                    $this->session->set_flashdata ( 'sendmailerror', 'No se ha podido enviar el correo' );
                }
    
            }
        } else {
            $this->session->set_flashdata ( 'sendmailerror', 'Formulario incorrecto' );
        }
        redirect ( base_url ('contacto'), 'refresh' );
    
    }
    
    //private function sendMailSignup($emailReceiver, $nameReceiver, $nicknameReceiver, $validation) {
    private function sendMail($emailReceiver, $message, $subject) {
        $bookcornerEmail = 'thecornerbook@gmail.com';
        $bookcornerPass = 'alumnoadmin';
    
        $this->load->library('email');
    
        $configGmail = null;
    
        if ($_SERVER ['SERVER_NAME'] == 'localhost' || $_SERVER ['SERVER_NAME'] == '127.0.0.1') {
    
            $configGmail = array(
                    'protocol' => 'smtp',
                    'smtp_host' => 'ssl://smtp.gmail.com',
                    'smtp_port' => 465,
                    'smtp_user' => $bookcornerEmail, // correo desde el cual se envia
                    'smtp_pass' => $bookcornerPass, // contraseña del correo
                    'mailtype' => 'html',
                    'charset' => 'utf-8',
                    'newline' => "\r\n"
            );
    
        } else {
    
            $configGmail = array(
                    //'protocol' => 'smtp',
                    'smtp_host' => 'ssl://smtp.gmail.com',//'ssl://smtp.googlemail.com'//ssl://smtp.gmail.com
                    'smtp_port' => 587,//465//25
                    'smtp_user' => $bookcornerEmail, // change it to yours
                    'smtp_pass' => $bookcornerPass, // change it to yours
                    'mailtype' => 'html',
                    'charset' => 'utf-8',
                    'newline' => "\r\n",
                    'validation' => TRUE,
                    'smtp_crypto' => 'tls', // tls or ssl
                    'wordwrap' => TRUE
            );
    
        }
    
        $this->email->initialize($configGmail);
    
        $this->email->from($bookcornerEmail, 'Mr Book Corner');
        $this->email->to($emailReceiver);
    
        $this->email->subject($subject);
    
        $this->email->message($message);
    
        if ($this->email->send()) {
            return true;
        } else {
            return false;
        }
    
    }
    
    public function activate() {
    
        $string = $this->uri->segment(2);
        /*
         * El primer segmento es el controlador, el segundo la accion, y los siguientes son los parametros
         *
         * al routear, los parametros empiezan en el 2, no en el 3
        */
    
        $validation = $this->users_model->activateUser($string);
        
        if ($validation == 0) {
            $this->session->set_flashdata ( 'signUpError', 'No corresponde la clave de validación' );
        } else if ($validation == 2) {
            $this->session->set_flashdata ( 'ok', 'Usuario activado correctamente' );
        } else if ($validation == 1) {
            $this->session->set_flashdata ( 'signUpError', 'El usuario ya estaba activado' );
        } else if ($validation == 3) {
            $this->session->set_flashdata ( 'signUpError', 'El usuario está baneado, no puede activarlo' );
        }
        
        redirect( base_url(), 'refresh' );
    
    }
    
    public function cancel() {
    
        $string = $this->uri->segment(2);
        /*
         * El primer segmento es el controlador, el segundo la accion, y los siguientes son los parametros
         *
         * al routear, los parametros empiezan en el 2, no en el 3
        */
        
        $validation = $this->users_model->cancelUser($string);
        
        if ($validation == 0) {
            $this->session->set_flashdata ( 'signUpError', 'No corresponde la clave de validación' );
        } else if ($validation == 2) {
            $this->session->set_flashdata ( 'ok', 'Registro cancelado correctamente' );
        } else if ($validation == 1) {
            $this->session->set_flashdata ( 'signUpError', 'El usuario ya estaba activado' );
        } else if ($validation == 3) {
            $this->session->set_flashdata ( 'signUpError', 'El usuario está baneado, no puede borrarlo' );
        }
        
        redirect( base_url(), 'refresh' );
    
    }    
    
}
