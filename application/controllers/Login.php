<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class Login extends CI_Controller {
    public function signin() {
        $this->setSigninFormRules ();
        
        $isFormValidationOk = $this->form_validation->run () == TRUE;
        
        if ($isFormValidationOk) {
            $this->load->model ( 'users_model' );
            $validUser = $this->getCheckedUser ();
            
            if (empty ( $validUser )) {
                $this->session->set_flashdata ( 'error', 'Usuario erróneo, Por favor inténtelo otra vez' );
            } else {
                $encriptedPwd = $this->getEncriptedPwd ();
                
                $areDifferentPwd = $validUser->user_pwd != $encriptedPwd;
                
                if ($areDifferentPwd) {
                    $this->session->set_flashdata ( 'error', 'Contraseña errónea, Por favor inténtelo otra vez' );
                } else {
                    $remember = set_value ( 'remember' );
                    $isRememberChecked = $remember == 'on';
                    
                    if ($isRememberChecked) {
                        $userCookie = $this->createUserCookieData ( $validUser );
                        $this->input->set_cookie ( $userCookie );
                    } else {
                        $this->config->set_item('sess_expire_on_close', TRUE);
                        $userSession = $this->createUserSession ( $validUser );
                        $this->session->set_userdata ( $userSession );
                    }
                }
            }
        }
        
        redirect ( $_SERVER ['HTTP_REFERER'], 'refresh' );
    }
    public function logout() {
        delete_cookie ( 'bookcorner' );
        $this->session->sess_destroy ();
        redirect ( 'home', 'refresh' );
    }
    
    private function setSigninFormRules() {
        $this->form_validation->set_rules ( 'username', 'Usuario', 'required|alpha_numeric' );
        $this->form_validation->set_rules ( 'pwd', 'Contraseña', 'required' );
    }
    
    /**
     * Create a cookie that expire in one year.
     * This cookie name will be bookcorner, and the content it has are nickname, username and surname
     *
     * @param Object $user
     *            User object returned by model
     * @return multitype:string number data for the cookie
     */
    private function createUserCookieData($user) {
        $cookieData = array (
                'name' => 'bookcorner',
                'value' => $user->user_id . '#' . $user->user_nickname . '#' . $user->user_name . '#' . $user->user_surname . '#' . $user->user_avatar,
                'expire' => time () + (86400 * 365),
                'path' => '/' 
        );
        
        return $cookieData;
    }
    
    /**
     * Create a CodeIgniter special session browser is open.
     * This session data title will be bookcorner, and the main content it has are nickname, username and surname
     *
     * @param Object $user            
     * @return multitype:string data for the session
     */
    private function createUserSession($user) {
        $sessionData = array (
                'title' => 'bookcorner',
                'id' => $user->user_id,
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
        return encrypt( set_value ( 'pwd' ) );
    }
}