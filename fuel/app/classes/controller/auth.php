<?php

class Controller_Auth Extends Controller_Page
{

    public function action_index($selectflag = false)
    {
      $data['selectflag'] = $selectflag;
      $this->template->content = View::forge('content/auth',$data);
    }

    public function action_err($selectflag = false){
      $data['selectflag'] = $selectflag;
      $data['err'] = true;
      $this->template->content = View::forge('content/auth',$data);
    }


    public function action_login($selectflag = false){

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
          if ($selectflag == 'true') {
              return Response::redirect('index.php/order/delivery');
          } else {
              return Response::redirect('index.php/top');
          }
      } else {
            return Response::redirect('index.php/auth/err');
      }
    }

    public function action_logout(){
        \Session::delete(self::SESSION_KEY_USER_ID);
        \Session::delete(self::SESSION_KEY_CART);
        return Response::redirect('index.php/top');
    }
}

?>
