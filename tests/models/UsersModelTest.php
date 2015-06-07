<?php
class UsersModelTest extends PHPUnit_Framework_TestCase {
    private $CI;
    public function setUp() {
        $this->CI = &get_instance ();
    }
    public function testCheckValidUserWithExistingUser() {
        $user_nickname = 'admin';
        
        $this->CI->load->model ( 'users_model' );
        $userChecked = $this->CI->users_model->check_valid_user ( $user_nickname );
        
        $this->assertNotNull ( $userChecked );
        $this->assertEquals ( $userChecked->user_nickname, $user_nickname );
    }
    public function testCheckValidUserWithNotExistingUser() {
        $username = 'nouser';
        
        $this->CI->load->model ( 'users_model' );
        $userChecked = $this->CI->users_model->check_valid_user ( $username );
        
        $this->assertNull ( $userChecked );
    }
    public function testWhenGetUserInfoWithExistingIdIsCalledThenThisUserShouldBeReturned() {
        $id = '1';
        
        $this->CI->load->model ( 'users_model' );
        $user = $this->CI->users_model->getUserInfo ( $id );
        
        $this->assertNotNull ( $user );
    }
    public function testWhenGetUserInfoWithNoExistingIdIsCalledThenUserShouldBeEmpty() {
        $id = '-1';
        
        $this->CI->load->model ( 'users_model' );
        $user = $this->CI->users_model->getUserInfo ( $id );
        
        $this->assertEmpty ( $user );
    }
    public function testWhenGetAllAdministratorsIsCalledThenAdministratorsShouldBeReturned() {
        $this->CI->load->model ( 'users_model' );
        $user = $this->CI->users_model->getAllAdministrators ();
        
        $this->assertNotEmpty ( $user );
    }
    public function testWhenGetAllModeratorsIsCalledThenModeratorsShouldBeReturned() {
        $this->CI->load->model ( 'users_model' );
        $user = $this->CI->users_model->getAllModerators ();
        
        $this->assertNotEmpty ( $user );
    }
    /*
    public function testWhenCheckIfValidUsernameExistsIsCalledThenUserNicknameShouldBeEquals() {
        $this->CI->load->model ( 'users_model' );
        $username = 'admin';
        $user = $this->CI->users_model->check_username_exists ( $username );
        
        $this->assertEquals ( $username, $user->user_nickname );
    }
    public function testWhenCheckIfValidEmailExistsIsCalledThenEmailShouldBeEquals() {
        $this->CI->load->model ( 'users_model' );
        $email = 'administrator@gmail.com';
        $user = $this->CI->users_model->check_email_exists ( $email);
    
        $this->assertEquals ( $email, $user->user_email );
    }
    */
    public function testWhenUpdateUsernameIsCalledThenUsernameShouldBeChanged(){
        $newUsername = "AdminImpostor";
        $oldUsername = "admin";
        $userId = 1;
        $this->CI->load->model ( 'users_model' );
        $this->CI->users_model->update_username ($newUsername, $userId);
        $user = $this->CI->users_model->getUserInfo ($userId);
        $this->assertEquals($newUsername, $user->user_nickname);
        $this->CI->users_model->update_username ($oldUsername, $userId);
    }
    public function testWhenUpdateEmailIsCalledThenEmailShouldBeChanged(){
        $newEmail = "AdminImpostor@gmail.com";
        $oldEmail = "administrator@gmail.com";
        $userId = 1;
        $this->CI->load->model ( 'users_model' );
        $this->CI->users_model->update_email ($newEmail, $userId);
        $user = $this->CI->users_model->getUserInfo ($userId);
        $this->assertEquals($newEmail, $user->user_email);
        $this->CI->users_model->update_email ($oldEmail, $userId);
    }
    public function testWhenUpdatePassIsCalledThenPassShouldBeChanged(){
        $newPwdEncrypted = encrypt("NewPass.*27");
        $oldPwd = encrypt("theboss");
        $userId = 1;
        $this->CI->load->model ( 'users_model' );
        $this->CI->users_model->update_pass ($newPwdEncrypted, $userId);
        $user = $this->CI->users_model->getUserInfo ($userId);
        $this->assertEquals($newPwdEncrypted, $user->user_pwd);
        $this->CI->users_model->update_pass ($oldPwd, $userId);
    }
    public function testWhenCountUsersIsCalledThenNumberShouldBeReturned(){
        $this->CI->load->model ( 'users_model' );
        $number_of_users = $this->CI->users_model->countUsers ();
        $this->assertNotNull($number_of_users);
    }
}