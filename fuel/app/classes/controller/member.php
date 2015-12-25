<?php

class Controller_Member Extends Controller_Page
{
    public function action_index(){
        if(empty(\Session::get(self::SESSION_KEY_USER_ID))){
          return Response::redirect('index.php/auth');
        }
        $user_id = \Session::get(self::SESSION_KEY_USER_ID);
        $data['user'] = Model_Member::find($user_id);
        $this->template->content = View::forge('content/memberinfo',$data);
    }

    public function action_edit(){
        if(empty(\Session::get(self::SESSION_KEY_USER_ID))){
          return Response::redirect('index.php/auth');
        }
        $this->template->content = View::forge('content/membermodify');
    }

    public function action_history()
    {
        if(empty(\Session::get(self::SESSION_KEY_USER_ID))){
          return Response::redirect('index.php/auth');
        }
        $user_id = \Session::get(self::SESSION_KEY_USER_ID);
        $user = Model_Member::find($user_id);
        $data['orders'] = $user->orders;
        $this->template->content = View::forge('content/orderlog',$data);
    }

    public function action_new(){
        $this->template->content = View::forge('content/newmember');
    }
}
