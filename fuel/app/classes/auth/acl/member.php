<?php

class Auth_Acl_Member extends \Auth\Auth_Acl_Driver
{
  /**
   * Check access rights
   *
   * @param  mixed  \Auth\condition to check for access
   * @param  mixed  \Auth\user or group identifier in the form of array(driver_id, id)
   * @return  bool
   */
  public function has_access($condition, Array $entity)
  {
    // TODO: Implement has_access() method.
  }
}
