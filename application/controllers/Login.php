<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class Login extends CI_Controller {
    public function __construct() {
        parent::__construct ();
    }
    
    public function signin() {
        $this->setSigninFormRules ();
    
        $isFormValidationOk = $this->form_validation->run () == TRUE;
    
        if ($isFormValidationOk) {
            $this->load->model ( 'users_model' );
            $validUser = $this->getCheckedUser ();
    
            if ($validUser == 'inactive') {
                $this->session->set_flashdata ( 'loginError', 'Usuario inactivo' );
            } else if ($validUser == 'banned') {
                $this->session->set_flashdata ( 'loginError', 'Usuario baneado' );
            } else if (empty ( $validUser )) {
                $this->session->set_flashdata ( 'loginError', 'Usuario erróneo, Por favor inténtelo otra vez' );
            } else {
                $encriptedPwd = $this->getEncriptedPwd ();
    
                $areDifferentPwd = $validUser->user_pwd != $encriptedPwd;
    
                if ($areDifferentPwd) {
                    $this->session->set_flashdata ( 'loginError', 'Contraseña errónea, Por favor inténtelo otra vez' );
                } else {
                    $remember = set_value ( 'remember' );
                    $isRememberChecked = $remember == 'on';
    
                    if ($isRememberChecked) {
                        $this->config->set_item('sess_expire_on_close', FALSE);
                        $this->config->set_item('sess_expiration', 2592000);
                        
                        $userSession = $this->createUserDataSession ( $validUser );
                        $this->session->set_userdata ( $userSession );
                    } else {
                        $this->config->set_item('sess_expire_on_close', TRUE);
                        $userSession = $this->createUserDataSession ( $validUser );
                        $this->session->set_userdata ( $userSession );
                    }
                }
            }
        } else {
            $this->session->set_flashdata('formError',getFormErrorMsg());
        }
        go_back();
    }
    
    public function logout() {
        $this->session->sess_destroy ();
        redirect(base_url(), 'refresh');
    }
    private function setSigninFormRules() {
        $this->form_validation->set_rules ( 'username', 'Usuario', 'required' );
        $this->form_validation->set_rules ( 'pwd', 'Contraseña', 'required' );
    }
    
    /**
     * Create a CodeIgniter special session browser is open.
     * This session data title will be bookcorner, and the main content it has are nickname, username and surname
     *
     * @param Object $user            
     * @return multitype:string data for the session
     */
    private function createUserDataSession($user) {
        $sessionData = array (
                'title' => 'bookcorner',
                'id' => $user->id,
                'role' => $user->userrole_id,
                'username' => $user->user_nickname,
                'name' => $user->user_name,
                'surname' => $user->user_surname,
                'avatar' => $user->user_avatar 
        );
        
        return $sessionData;
    }
    private function getCheckedUser() {
        $username = set_value ( 'username' );
        $validUser = $this->users_model->check_valid_user ( $username );
        return $validUser;
    }
    private function getEncriptedPwd() {
        return encrypt ( set_value ( 'pwd' ) );
    }
    
    public function getInfoAjax() {
        
        if (isset($_POST['field']) && isset($_POST['value'])) {            
            if ($_POST['field'] == 'username') {
                $this->load->model('Users_model');                
                $username = $_POST['value'];
                $exist = $this->Users_model->check_username_exists($username);
                if (!$exist) {
                    echo "ok";
                } else {
                    echo "bad";
                }
            } else if ($_POST['field'] == 'email') {
                $this->load->model('Users_model');
                $email = $_POST['value'];
                $exist = $this->Users_model->check_email_exists($email);
                if (!$exist) {
                    echo "ok";
                } else {
                    echo "bad";
                }
            } else {
                redirect ( base_url ( 'prohibido' ), 'refresh' );
            }            
        } else {
            redirect ( base_url ( 'prohibido' ), 'refresh' );
        }
        
    }
    
}