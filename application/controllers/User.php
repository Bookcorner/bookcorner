<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class User extends CI_Controller {
    public function __construct() {
        parent::__construct ();
        $this->load->model ( 'Users_model' );
    }
    public function showUserInfo() {
        $userId;
        $session = 'id';
        
        if (check_session_exist ( $session )) {
            $userId = $this->session->userdata ( $session );
        } else {
            $this->session->set_flashdata ( 'signInError', 'Inicie sesión para continuar' );
            go_back();
        }
        
        $data ['title'] = 'Información de Usuario';
        $data ['userInfo'] = $this->Users_model->getUserInfo ( $userId );
        
        $views = [ 
                'cabeceras' => [ 
                        'templates/cabeceras/cabecera_base',
                        'templates/cabeceras/cabecera_usuario' 
                ],
                'contenidos' => [ 
                        'user/user_info' 
                ],
                'footer' => 'templates/footers/base_footer' 
        ];
        
        loadCustomViews ( $views, $data );
    }
    public function showList() {
        $userNick = $this->uri->segment ( 2 );
        $this->load->model ( 'Listbooks_model' );
        
        $data ['user'] = $this->Users_model->getUserByNick ( $userNick );
        if (! $data ['user']) {
            $viewUri = 'custom_errors/not_found';
            $data ['title'] = 'No se encuentra';            
        } else {
            $data ['title'] = 'Lista de ' . $userNick;
            $userId = $data ['user']->id;
            $data ['books'] = $this->Listbooks_model->getAllBooklistFromUser ( $userId );
            
            $viewUri = 'user/info_list';
        }
        loadBasicViews ( $viewUri, $data );
    }
    public function signup() {
        $this->setSignUpFormRules ();
        $isFormValidationOk = $this->form_validation->run () == true;
        
        if ($isFormValidationOk) {
            
            $username = set_value ( 'user' );
            $email = set_value ( 'email' );
            
            $user = $this->Users_model->check_exist_user ( $username, $email );
            
            $isUserOk = ($user == 0);
            $isNicknameUsed = ($user == 1);
            $isMailUsed = ($user == 2);
            
            $isCaptchaOk = $this->checkCaptchaMatch ();
            
            if (! $isCaptchaOk) {
                $this->session->set_flashdata ( 'signUpFail', captchaErrorMsg () );
            } else if ($isNicknameUsed) {
                $this->session->set_flashdata ( 'signUpFail', 'El nombre de usuario está en uso' );
            } else if ($isMailUsed) {
                $this->session->set_flashdata ( 'signUpFail', 'El correo electrónico está en uso' );
            } else if ($isUserOk) {
                $newUser = $this->dispenseNewUser ();
                $nameReceiver = $newUser->user_name;
                $validation = $newUser->user_validation;
                
                /*
                 * El protocolo sera http o https
                 */
                $url = $_SERVER ['REQUEST_SCHEME'] . '://' . $_SERVER ['SERVER_NAME'];
                
                /*
                 * Si esta en local en apache, habra que añadir /bookcorner/
                 */
                if ($_SERVER ['SERVER_NAME'] == 'localhost' || $_SERVER ['SERVER_NAME'] == '127.0.0.1') {
                    $url .= '/bookcorner';
                }
                
                $message = getMailActivationMsg ( $nameReceiver, $url, $validation );
                $sendMail = $this->sendMail ( $email, $message, 'Correo de Activación' );
                // enviamos el correo de registro
                if ($sendMail) {
                    $this->session->set_flashdata ( 'signUpSuccess', 'Se ha registrado satisfactoriamente, le enviaremos un correo de activación.' );
                    $this->Users_model->saveUser ( $newUser );
                } else {
                    $this->session->set_flashdata ( 'signUpFail', 'No se le ha podido enviar el correo, vuelva a intentarlo' );
                }
            }
        } else {
            $this->session->set_flashdata ( 'signUpFail', 'Formulario incorrecto' );
        }
        
        go_back();
    }
    private function setSignUpFormRules() {
        $this->form_validation->set_rules ( 'name', 'Nombre', 'required' );
        $this->form_validation->set_rules ( 'surname', 'Apellido', 'required' );
        $this->form_validation->set_rules ( 'user', 'Usuario', 'required|alpha_dash' );
        $this->form_validation->set_rules ( 'genre', 'Género', 'required' );
        $this->form_validation->set_rules ( 'captchaControl', 'Captcha', 'required' );
        $this->form_validation->set_rules ( 'pass', 'Contraseña', 'required' );
        $this->form_validation->set_rules ( 'repass', 'Confirmar Contraseña', 'required' );
        $this->form_validation->set_rules ( 'email', 'Email', 'required|valid_email' );
        $this->form_validation->set_rules ( 'reemail', 'Email', 'required' );
    }
    private function checkCaptchaMatch() {
        $captchaUser = set_value ( 'captchaControl' );
        $captchaUser = strtolower ( $captchaUser );
        
        $captcha = base64_decode ( set_value ( 'captchaValue' ) );
        $captcha = strtolower ( $captcha );
        
        return ($captcha == $captchaUser);
    }
    private function dispenseNewUser() {
        $validation = $this->Users_model->getRandomString ();
        
        $newUser = R::Dispense ( 'user' );
        $newUser->user_name = set_value ( 'name' );
        $newUser->user_surname = set_value ( 'surname' );
        $newUser->user_nickname = set_value ( 'user' );
        $newUser->user_pwd = encrypt ( set_value ( 'pass' ) );
        $newUser->user_validation = $validation;
        $newUser->user_email = set_value ( 'email' );
        $newUser->user_avatar = 'basic.jpg'; // imagen basica
        $newUser->user_genre = set_value ( 'genre' );
        $newUser->userrole_id = 1; // registrado, no es moderador ni admin
        $newUser->userstatus_id = 2; // inactivo, enviar correo de activacion
        return $newUser;
    }
    public function sendNewPass() {
        if (isset($_POST['email']) && isset($_POST['captchaValue']) && isset($_POST['captchaControl'])) {
            $email = $_POST ['email'];
            $captchaValue = $_POST ['captchaValue'];
            $captchaValue = base64_decode($captchaValue);
            $captchaControl = $_POST ['captchaControl'];
            
            $isCaptchaOk = $this->checkCaptchaMatch();
            
            if (! $isCaptchaOk) {
                $this->session->set_flashdata('sendmailerror', captchaErrorMsg());
                redirect( base_url('recuperar_clave') );
            }
    
            $this->load->model('Users_model');
            $userBean = $this->Users_model->check_email_exists($email);
    
            if (! $userBean) {
                $this->session->set_flashdata('updateEmailError', getEmailNotExistsMsg());
            } else if ($userBean['userstatus_id'] == 3) { // banned user
                $this->session->set_flashdata('updateEmailError', getBannedMsg());
            } else {
                
                if ($userBean['userstatus_id'] == 2) { // inactive user
                    $this->Users_model->activateUser ( $userBean['user_validation'] );
                }
                
                $userId = $userBean->id;
                $newPwd = $this->Users_model->generate_new_pass($userId);
                $fullname = $userBean['user_name'].' '.$userBean['user_surname'];
                $messageEmail = gerEmailResetPwdMsg($fullname, $newPwd);
                
                $sendMail = $this->sendMail ( $email, $messageEmail, 'Contraseña nueva' );
                
                if ($sendMail) {
                    $this->session->set_flashdata ( 'sendmailok', 'Se ha enviado el correo satisfactoriamente' );
                } else {
                    $this->session->set_flashdata ( 'sendmailerror', 'No se ha podido enviar el correo' );
                }
            }
            redirect( base_url('recuperar_clave') );
        } else {
            redirect(base_url('prohibido'), 'refresh');
        }
    }
    public function sendContact() {
        $this->form_validation->set_rules ( 'name', 'Nombre', 'required' );
        $this->form_validation->set_rules ( 'email', 'Email', 'required|valid_email' );
        $this->form_validation->set_rules ( 'message', 'Mensaje', 'required' );
        $this->form_validation->set_rules ( 'captchaControl', 'Captcha', 'required' );
        
        $isFormValidationOk = $this->form_validation->run () == true;
        
        if ($isFormValidationOk) {
            
            $isCaptchaOk = $this->checkCaptchaMatch ();
            
            $email = set_value ( 'email' );
            $message = set_value ( 'message' );
            
            if (! $isCaptchaOk) {
                $this->session->set_flashdata ( 'sendmailerror', captchaErrorMsg () );
            } else {
                
                $messageEmail = "Email de $email : <br /><br /> $message";
                
                $sendMail = $this->sendMail ( 'thecornerbook@gmail.com', $messageEmail, 'Correo de Contacto' );
                // enviamos el correo de contactar
                
                if ($sendMail) {
                    $this->session->set_flashdata ( 'sendmailok', 'Se ha enviado el correo satisfactoriamente' );
                } else {
                    $this->session->set_flashdata ( 'sendmailerror', 'No se ha podido enviar el correo' );
                }
            }
        } else {
            $this->session->set_flashdata ( 'sendmailerror', 'Formulario incorrecto' );
        }
        
        redirect ( base_url ( 'contacto' ), 'refresh' );
    }
    private function sendMail($emailReceiver, $message, $subject) {
        $bookcornerEmail = 'thecornerbook@gmail.com';
        $bookcornerPass = 'alumnoadmin';
        
        $this->load->library ( 'email' );
        
        $configGmail = null;
        
        if ($_SERVER ['SERVER_NAME'] == 'localhost' || $_SERVER ['SERVER_NAME'] == '127.0.0.1') {
            
            $configGmail = array (
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
            
            $configGmail = array (
                    // 'protocol' => 'smtp',
                    'smtp_host' => 'ssl://smtp.gmail.com', // 'ssl://smtp.googlemail.com'//ssl://smtp.gmail.com
                    'smtp_port' => 587, // 465//25
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
        
        $this->email->initialize ( $configGmail );
        
        $this->email->from ( $bookcornerEmail, 'Mr Book Corner' );
        $this->email->to ( $emailReceiver );
        
        $this->email->subject ( $subject );
        
        $this->email->message ( $message );
        
        if ($this->email->send ()) {
            return true;
        } else {
            return false;
        }
    }
    public function activate() {
        $string = $this->uri->segment ( 2 );
        /*
         * El primer segmento es el controlador, el segundo la accion, y los siguientes son los parametros
         *
         * al routear, los parametros empiezan en el 2, no en el 3
         */
        
        $validation = $this->Users_model->activateUser ( $string );
        
        if ($validation == 0) {
            $this->session->set_flashdata ( 'signUpFail', 'No corresponde la clave de validación' );
        } else if ($validation == 2) {
            $this->session->set_flashdata ( 'signUpSuccess', 'Usuario activado correctamente' );
        } else if ($validation == 1) {
            $this->session->set_flashdata ( 'signUpFail', 'El usuario ya estaba activado' );
        } else if ($validation == 3) {
            $this->session->set_flashdata ( 'signUpFail', 'El usuario está baneado, no puede activarlo' );
        }
        
        redirect ( base_url ('home'), 'refresh' );
    }
    public function cancel() {
        $string = $this->uri->segment ( 2 );
        /*
         * El primer segmento es el controlador, el segundo la accion, y los siguientes son los parametros
         *
         * al routear, los parametros empiezan en el 2, no en el 3
         */
        
        $validation = $this->Users_model->cancelUser ( $string );
        
        if ($validation == 0) {
            $this->session->set_flashdata ( 'signUpFail', 'No corresponde la clave de validación' );
        } else if ($validation == 2) {
            $this->session->set_flashdata ( 'signUpSuccess', 'Registro cancelado correctamente' );
        } else if ($validation == 1) {
            $this->session->set_flashdata ( 'signUpFail', 'El usuario ya estaba activado' );
        } else if ($validation == 3) {
            $this->session->set_flashdata ( 'signUpFail', 'El usuario está baneado, no puede borrarlo' );
        }
        
        go_back();
    }
    public function editUsername() {
        $session = 'id';
        if (check_session_exist ( $session )) {
            $userId = $this->session->userdata ( $session );
        } else {
            $this->session->set_flashdata ( 'signInError', 'Inicie sesión para continuar' );
            redirect ( base_url (), 'refresh' );
        }
        
        $username = set_value ( 'newUsername' );
        $this->load->model ( 'Users_model' );
        $isNicknameInUse = $this->Users_model->check_username_exists ( $username );
        if ($isNicknameInUse) {
            $this->session->set_flashdata ( 'updateUsernameError', getUsernameAlreadyExistsMsg () );
            redirect ( $_SERVER ['HTTP_REFERER'], 'refresh' );
        } else {
            $id = $this->session->userdata ( 'id' );
            $this->Users_model->update_username ( $username, $id );
            $this->session->set_flashdata ( 'updateUsernameOk', getUsernameChangeOkMsg () );
            go_back();
        }
        go_back();
    }
    public function editEmail() {
        $session = 'id';
        if (check_session_exist ( $session )) {
            $userId = $this->session->userdata ( $session );
        } else {
            $this->session->set_flashdata ( 'signInError', 'Inicie sesión para continuar' );
        }
        
        $email = set_value ( 'newEmail' );
        $isEmailInUse = $this->Users_model->check_email_exists ( $email );
        if ($isEmailInUse) {
            $this->session->set_flashdata ( 'updateEmailError', getEmailAlreadyExistsMsg () );
        } else {
            $id = $this->session->userdata ( 'id' );
            $this->Users_model->update_email ( $email, $id );
            $this->session->set_flashdata ( 'updateEmailOk', getEmailChangeOkMsg () );
        }
        go_back();
    }
    public function editAvatar() {
        $session = 'id';
        if (check_session_exist ( $session )) {
            if (isset ( $_FILES ['newAvatar'] ) && $_FILES ['newAvatar'] ['error'] == 0) {
                $userId = $this->session->userdata ( $session );
                $userBean = $this->Users_model->getUserInfo ( $userId );
                
                $photo = $_FILES ['newAvatar'];
                $nameOfPhoto = $photo ['name'];
                $nameOfPhoto = strtolower($nameOfPhoto);
                $nameArray = explode ( '.', $nameOfPhoto );
                $ext = end ( $nameArray );
                $newName = $userBean->user_nickname;
                $newName .= '.' . $ext;
                
                $deleteAvatar = $this->Users_model->deleteAvatar ( $userId );
                move_uploaded_file ( $_FILES ['newAvatar'] ['tmp_name'], 'assets/images/users/' . $newName );
                $this->Users_model->updateAvatarName ( $userId, $newName );
                
                $newSessionAvatar = array (
                        "avatar" => $newName 
                );
                $this->session->set_userdata ( $newSessionAvatar );
                
                $this->load->helper ( 'image_helper' );
                resize_img ( ('assets/images/users/' . $newName), 500, 500 );
                
                $this->session->set_flashdata ( 'updateAvatarOk', getAvatarChangeOkMsg () );
                redirect ( base_url ( 'informacion-de-usuario' ), 'refresh' );
            } else if (isset ( $_FILES ['newAvatar'] ) && $_FILES ['newAvatar'] ['size'] == 0) {
                $this->session->set_flashdata ( 'updateAvatarError', 'La foto no puede ocupar mas de 5MB' );
                redirect ( base_url ( 'informacion-de-usuario' ), 'refresh' );
            } else {
                $this->session->set_flashdata ( 'updateAvatarError', 'No se ha subido la foto correctamente' );
                redirect ( base_url ( 'informacion-de-usuario' ), 'refresh' );
            }
        } else {
            $this->session->set_flashdata ( 'signInError', 'Inicie sesión para continuar' );
        }
        go_back();
    }
    public function deleteAccount() {
        if (isset ( $_POST ['idUser'] ) && isset ( $_POST ['password'] )) {
            $sessionId = $this->session->userdata ( 'id' );
            $ajaxId = $_POST ['idUser'];
            
            if ($sessionId == $ajaxId) {
                $userBean = $this->Users_model->getUserInfo ( $sessionId );
                $pwd = $userBean->user_pwd;
                $validation = $userBean->user_validation;
                $ajaxPwd = encrypt ( $_POST ['password'] );
                if ($pwd == $ajaxPwd) {
                    if ($validation != 'GOD') {
                        $this->Users_model->deleteUser ( $sessionId );
                        $this->session->sess_destroy ();
                        echo "Cuenta borrada";
                    } else {
                        echo "Es un superadmin, su cuenta es vitalicia";
                    }
                } else {
                    echo "La contraseña es incorrecta";
                }
            } else {
                echo "El id no coincide";
            }
        }
        go_back();
    }
    public function editPass() {
        $session = 'id';
        if (check_session_exist ( $session )) {
            $userId = $this->session->userdata ( $session );
        } else {
            $this->session->set_flashdata ( 'signInError', 'Inicie sesión para continuar' );
            go_back();
        }
        
        $oldPass = md5 ( set_value ( 'oldPass' ) );
        $newPass = md5 ( set_value ( 'newPass' ) );
        $isOldPassCorrect = $this->Users_model->check_oldpass_matches ( $oldPass );
        if ($isOldPassCorrect) {
            $id = $this->session->userdata ( 'id' );
            $this->Users_model->update_pass ( $newPass, $id );
            $this->session->set_flashdata ( 'updatePassOk', getPassChangeOkMsg () );
        } else {
            $this->session->set_flashdata ( 'updatePassError', getPassNoMatchMsg () );
        }
        go_back();
    }
}
