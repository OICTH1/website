<?php

class Controller_Page Extends Controller_Template
{
    public $template = "header";

    const SESSION_KEY_USER_ID = 'user_id';
    const SESSION_KEY_CART = 'cart';
    const SESSION_KEY_ADDRESS = 'address';
    const SESSION_KEY_POST = 'post';


    public function before(){
      parent::before();

      if(!empty(\Session::get(self::SESSION_KEY_USER_ID))){
        $id = \Session::get(self::SESSION_KEY_USER_ID);
        $member = Model_Member::find($id);
        $this->template->member = array(
                                                          'name'=>$member->name
                                                        );
    } else {
      $this->template->member = false;
    }

      }
  }
?>
