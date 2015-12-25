<?php

class Controller_Auth Extends Controller_Page
{

    public function action_index()
    {
      $this->template->content = View::forge('content/auth');
    }

    public function action_err(){
      $this->template->content = View::forge('content/auth',array('err' => true ));
    }


    public function action_login(){

       $login_user = Model_Member::find('all', array(
                                                                          'where' =>array(
                                                                            array('mailaddress' => $_POST['mail']),
                                                                            array('password' => $_POST['pass'])
                                                                          )
                                                                        )
                                                                      );

      if(!empty($login_user)){
          \Session::set(self::SESSION_KEY_USER_ID, array_shift($login_user)->id);
          if(empty(\Session::get(self::SESSION_KEY_CART))){
              \Session::set(self::SESSION_KEY_CART,array('orders'=>array(),'total_money'=>0));
          }
          return Response::redirect('index.php/top');
      } else {
        return Response::redirect('index.php/auth/err');
      }
    }

    public function action_logout(){
        \Session::destroy();
        return Response::redirect('index.php/top');
    }
}

?>
