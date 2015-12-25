<?php

class Controller_Newmember Extends Controller_Page
{
    public function action_index(){
        $this->template->content = View::forge('content/newmember');
    }

    public function action_check(){
        $this->template->content = View::forge('content/newmembercheck');
    }

    public function action_commit(){
        
    }
}
