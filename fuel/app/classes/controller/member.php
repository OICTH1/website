<?php

class Controller_Member Extends Controller_Page
{
    public function before(){
            parent::before();
          if(empty(\Session::get(self::SESSION_KEY_USER_ID))){
            return Response::redirect('index.php/auth');
          }
    }
    public function action_index(){
        $user_id = \Session::get(self::SESSION_KEY_USER_ID);
        $data['user'] = Model_Member::find($user_id);
        $this->template->content = View::forge('content/memberinfo',$data);
    }

    public function action_edit(){
        $this->template->content = View::forge('content/membermodify');
    }
}
