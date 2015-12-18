<?php

class Auth_Group_Member extends \Auth\Auth_Group_Driver
{
  /**
   * Check membership of given users
   *
   * @param  mixed  \Auth\condition to check for access
   * @param  array  \Auth\user identifier in the form of array(driver_id, user_id), or null for logged in
   * @return  bool
   */
  public function member($group, $user = null)
  {
    // TODO: Implement member() method.
  }

  /**
   * Fetch the display name of the given group
   *
   * @param  mixed  \Auth\group condition to check
   * @return  string
   */
  public function get_name($group)
  {
    // TODO: Implement get_name() method.
  }
}
