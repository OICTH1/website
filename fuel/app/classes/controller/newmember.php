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
		$member->address = $post['address'];
		$member->mailaddress = $post['mail'];
		$member->password = $post['password1'];
		$member->tel = $post['phone'];
		$member->postalcode = $post['postal'];
        $member->save();
        $this->template->content = 'commit!!';
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
