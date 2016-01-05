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

    public function action_editcommit(){
        $user_id = \Session::get(self::SESSION_KEY_USER_ID);
        $user = Model_Member::find($user_id);
        $keys = array(
            'name'=>'name',
            'kana'=>'phonetic',
            'postal'=>'postalcode',
            'address'=>'address',
            'mail'=>'mailaddress',
            'phone' => 'tel',
            'pass2'=>'password',
        );
        foreach ($keys as $key => $value) {
            if($_POST[$key] != ''){
                $user[$value] = $_POST[$key];
            }
        }
        $user->save();

        //$this->template->content = var_dump($_POST);
        return Response::redirect('index.php/member');
    }

    public function action_history()
    {
        $user_id = \Session::get(self::SESSION_KEY_USER_ID);
        $data['orders'] = Model_Order::query()->where('member_id',$user_id)->order_by('order_date','desc')->get();
        $this->template->content = View::forge('content/orderlog',$data);
    }

    public function action_new(){
        $this->template->content = View::forge('content/newmember');
    }
}
