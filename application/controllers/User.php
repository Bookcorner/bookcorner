<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class User extends CI_Controller {
    public function showUserInfo() {        
        $userId;
        $session = 'id';
        
        if (check_session_exist($session)){
            $userId = $this->session->userdata ( $session );
        } else {
            $this->session->set_flashdata ( 'signUpError', 'No tiene permiso para acceder' );
            redirect ( base_url (), 'refresh' );
        }
        
        $this->load->model ( 'users_model' );
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
        $this->form_validation->set_rules ( 'name', 'Nombre', 'required' );
        $this->form_validation->set_rules ( 'surname', 'Apellido', 'required' );
        $this->form_validation->set_rules ( 'user', 'Usuario', 'required' );
        $this->form_validation->set_rules ( 'genre', 'Género', 'required' );
        $this->form_validation->set_rules ( 'pass', 'Contraseña', 'required' );
        $this->form_validation->set_rules ( 'repass', 'Confirmar Contraseña', 'required' );
        $this->form_validation->set_rules ( 'email', 'Email', 'required' );
        $this->form_validation->set_rules ( 'reemail', 'Email', 'required' );
    
        if ($this->form_validation->run () == true) {
            $this->load->model ( 'users_model' );
    
            $username = set_value ( 'user' );
            $email = set_value ( 'email' );
    
            $exist_user = $this->users_model->check_exist_user ( $username, $email );
            /*
             * 0 -> ok
             * 1 -> nickname in use
             * 2 -> email in use
            */
    
            if ($exist_user == 0) {
                $validation = $this->users_model->getRandomString();
    
                $newUser = R::Dispense ( 'user' );
                $newUser->user_name = set_value ( 'name' );
                $newUser->user_surname = set_value ( 'surname' );
                $newUser->user_nickname = $username;
                $newUser->user_pwd = md5 ( set_value ( 'pass' ) );
                $newUser->user_validation = $validation;
                $newUser->user_email = $email;
                $newUser->user_avatar = 'basic.jpg'; // imagen basica
                $newUser->user_genre = 'M';
                $newUser->userrole_id = 1; // registrado, no es moderador ni admin
                $newUser->userstatus_id = 2; // inactivo, enviar correo de activacion
    
                $sendMail = $this->sendMailSignup($email, set_value ( 'name' ), $username, $validation);
                // enviamos el correo de registro
    
                if ($sendMail) {
                    $this->users_model->saveUser($newUser);
                }
    
            } else if ($exist_user == 1) {
                $this->session->set_flashdata ( 'signUpError', 'El nombre de usuario está en uso' );
            } else if ($exist_user == 2) {
                $this->session->set_flashdata ( 'signUpError', 'El correo electrónico está en uso' );
            }
        } else {
            $this->session->set_flashdata ( 'signUpError', 'Formulario incorrecto' );
        }
    
        redirect ( base_url (), 'refresh' );
    }
    
    private function sendMailSignup($emailReceiver, $nameReceiver, $nicknameReceiver, $validation) {
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
    
        $this->email->subject('Activación de cuenta');
        
        $url = $_SERVER ['REQUEST_SCHEME'] . '://' . $_SERVER ['SERVER_NAME'] ;
        
        if ($_SERVER ['SERVER_NAME'] == 'localhost' || $_SERVER ['SERVER_NAME'] == '127.0.0.1') {
            $url .= '/bookcorner';
        }
    
        $message = "Hola, $nameReceiver:<br/>
        Se ha registrado en BookCorner, este es un mensaje de activación. <br/><br/>
        
        <h2> Si ha realizado este registro puede confirmar la operación mediante este link: $url/activar/$validation </h2>
        
        <br/> <br/><br/> <br/><br/> <br/>
        
        <h3> Si no ha realizado este registro puede cancelar la operación mediante este link: $url/cancelar/$validation </h3>
                
        <br/> <br/>
        Atentamente, El equipo de BookCorner";
    
        $this->email->message("Email de $bookcornerEmail <br /><br />$message");
    
        if ($this->email->send()) {
             
            $this->session->set_flashdata ( 'ok', 'Se ha registrado satisfactoriamente, le enviaremos un correo de activación.' );
            return true;
        } else {
    
            $this->session->set_flashdata ( 'signUpError', 'No se le ha podido enviar el correo, vuelva a intentarlo' );
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
    
        $this->load->model('users_model');
        $validation = $this->users_model->activateUser($string);
        redirect( base_url(), 'refresh' );
    
    }
    
    public function cancel() {
    
        $string = $this->uri->segment(2);
        /*
         * El primer segmento es el controlador, el segundo la accion, y los siguientes son los parametros
         *
         * al routear, los parametros empiezan en el 2, no en el 3
        */
    
        $this->load->model('users_model');
        $validation = $this->users_model->cancelUser($string);
        redirect( base_url(), 'refresh' );
    
    }    
    
}
