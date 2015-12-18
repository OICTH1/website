<?php

class Auth_Login_Member extends \Auth\Auth_Login_Driver
{
  const SESSION_KEY_LOGGED_IN = 'logged-in';

  /**
   * Perform the actual login check
   *
   * @return  bool
   */
  protected function perform_check()
  {
    // TODO: Implement perform_check() method.
    return !empty(\Session::get(self::SESSION_KEY_LOGGED_IN));
  }

  /**
   * Perform the actual login check
   *
   * @return  bool
   */
  public function validate_user($mail_address = '', $password = '')
  {
    // TODO: Implement validate_user() method.
    return !emoty(Model_Member::find('all', array(
                                                                        'where' =>array(
                                                                          array('mailaddress' => $mail_address ),
                                                                          array('password' => $password )
                                                                        )
                                                                      )
                            )
    );
  }

  /**
   * Login method
   *
   * @return  bool  whether login succeeded
   */
  public function login($mail_address,$password)
  {
    // TODO: Implement login() method.
    if(!$this->validate_user($mail_address, $password)){
      return false;
    }
    \Session::set(self::SESSION_KEY_LOGGED_IN, $mail_address);

    return true;
  }

  /**
   * Logout method
   */
  public function logout()
  {
    // TODO: Implement logout() method.
    \Session::delete(self::SESSION_KEY_LOGGED_IN);
  }

  /**
   * Get User Identifier of the current logged in user
   * in the form: array(driver_id, user_id)
   *
   * @return  array
   */
  public function get_user_id()
  {
    // TODO: Implement get_user_id() method.
  }

  /**
   * Get User Groups of the current logged in user
   * in the form: array(array(driver_id, group_id), array(driver_id, group_id), etc)
   *
   * @return  array
   */
  public function get_groups()
  {
    // TODO: Implement get_groups() method.
  }

  /**
   * Get emailaddress of the current logged in user
   *
   * @return  string
   */
  public function get_email()
  {
    // TODO: Implement get_email() method.
  }

  /**
   * Get screen name of the current logged in user
   *
   * @return  string
   */
  public function get_screen_name()
  {
    // TODO: Implement get_screen_name() method.
  }
}
