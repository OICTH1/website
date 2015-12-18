<?php

class Controller_Top Extends Controller_Page
{
  
    public function action_index()
    {
      $this->template->content = View::forge('content/top');
    }
}

?>
