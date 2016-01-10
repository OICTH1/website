<?php

class Controller_Newmember Extends Controller_Page
{
    public function action_index(){
        \Session::delete(self::SESSION_KEY_POST);
        $this->template->content = View::forge('content/newmember');
    }

    public function action_check(){
        if(!empty($_POST)){
            \Session::set(self::SESSION_KEY_POST,$_POST);
        }
        $data['newmember'] = $_POST;
        $this->template->content = View::forge('content/newmembercheck',$data);
    }

    public function action_commit(){
        $post = \Session::get(self::SESSION_KEY_POST);
        $member = new Model_Member();
        $member->name = $post['name'];
        $member->phonetic = $post['kana'];
		$member->sex = $post['sex'];
		$member->birthday = $post['years'] . '-' . $post['month'] . '-' . $post['days'];
		$member->address = $post['address1'] . $post['address2'];
		$member->mailaddress = $post['mail'];
		$member->password = $post['password1'];
		$member->tel = $post['phone'];
		$member->postalcode = $post['postal'];
        $member->save();
        $login_user = Model_Member::find('all', array(
                                                                           'where' =>array(
                                                                             array('mailaddress' => $post['mail']),
                                                                             array('password' => $post['password1'])
                                                                           )
                                                                         )
                                                                       );

       if(!empty($login_user)){
           \Session::set(self::SESSION_KEY_USER_ID, array_shift($login_user)->id);
           if(empty(\Session::get(self::SESSION_KEY_CART))){
               \Session::set(self::SESSION_KEY_CART,array('orders'=>array(),'total_money'=>0));
           }
           return Response::redirect('index.php/message/newmember');
       } else {
             return Response::redirect('index.php/auth/err');
       }
    }

    public function action_edit(){
        if(!empty(\Session::get(self::SESSION_KEY_POST))){
            $data['editing'] = \Session::get(self::SESSION_KEY_POST);
        } else {
            return Response::redirect('index.php/newmember');
        }
        $this->template->content = View::forge('content/newmember',$data);
    }

    public function action_backtop(){
        \Session::delete(self::SESSION_KEY_POST);
        return Response::redirect('index.php/top');
    }
}
