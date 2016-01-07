<?php

class Controller_Message extends Controller_Page
{
	public $data;

	public function before()
    {
        parent::before(); // この行がないと、テンプレートが動作しません!

    }


	public function action_cartempty(){
		global $data;
		$data['title'] = 'カートに商品がありません';
		$data['messagein'] = View::forge('message/cartempty');
	}

	public function action_newmember(){
		global $data;
		$data['title'] = '登録完了';
		$data['messagein'] = View::forge('message/newmember');
	}

	public function action_commit(){
		global $data;
		$data['title'] = '注文完了';
		$data['messagein'] = View::forge('message/commit');
	}

	public function after($response)
    {
		global $data;
		$this->template->content = View::forge('content/message',$data);
        $response = parent::after($response); // あなた自身のレスポンスオブジェクトを作成する場合は必要ありません。
        // do stuff

        return $response; // after() は確実に Response オブジェクトを返すように
    }

}
