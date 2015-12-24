<?php

class Controller_Cart Extends Controller_Page
{
    public function before(){
            parent::before();
          if(empty(\Session::get(self::SESSION_KEY_USER_ID))){
            return Response::redirect('index.php/auth');
          }
    }

    public function action_index(){
        $data;
        $data['cart'] = \Session::get(self::SESSION_KEY_CART);
        $this->template->content = View::forge('content/itemcart',$data);
    }

    public function action_add(){

        if(empty(\Session::get(self::SESSION_KEY_CART))){
            \Session::set(self::SESSION_KEY_CART,array('orders'=>array()));
        }
        $cart = \Session::get(self::SESSION_KEY_CART);
        $item = Model_Item::find($_POST['item_id']);
        if(!empty($_POST['size'])){
            $size = explode('_',$_POST['size'])[1];
        } else {
            $size = null;
        }
        $quantity = $_POST['quantity'];
        $money = $_POST['money'];
        $total_money = 0;
        array_push($cart['orders'],array(
            'item_id' => $item['id'],
            'item_name'=>$item['name'],
            'size' => strtoupper($size),
            'quantity' => $quantity,
            'money'=> $money
        ));
        foreach ($cart['orders'] as $order) {
            $total_money += $order['money'];
        }
        $cart['total_money'] =  $total_money;
        \Session::set(self::SESSION_KEY_CART,$cart);
        return Response::redirect('index.php/cart');
    }

    public function action_delete($id){
        $cart = \Session::get(self::SESSION_KEY_CART);
        unset($cart['orders'][$id]);
        $total_money = 0;
        foreach ($cart['orders'] as $order) {
            $total_money += $order['money'];
        }
        $cart['total_money'] =  $total_money;
        \Session::set(self::SESSION_KEY_CART,$cart);
        return Response::redirect('index.php/cart');
    }

    public function action_edit($id){
        $cart = \Session::get(self::SESSION_KEY_CART);
        $item = Model_Item::find($_POST['item_id']);
        if(!empty($_POST['size'])){
            $size = explode('_',$_POST['size'])[1];
        } else {
            $size = null;
        }
        $quantity = $_POST['quantity'];
        $money = $_POST['money'];
        $cart['orders'][$id] = array(
            'item_id' => $item['id'],
            'item_name'=>$item['name'],
            'size' => strtoupper($size),
            'quantity' => $quantity,
            'money'=> $money
        );
        $total_money = 0;
        foreach ($cart['orders'] as $order) {
            $total_money += $order['money'];
        }
        $cart['total_money'] =  $total_money;
        \Session::set(self::SESSION_KEY_CART,$cart);
        return Response::redirect('index.php/cart');
    }

    public function action_test(){
        Session::delete('cart');
        return Response::redirect('index.php/item/list');
    }




}

?>
