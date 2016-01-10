<?php

class Controller_Cart Extends Controller_Page
{

    public function action_index(){
        $data;
        $data['cart'] = \Session::get(self::SESSION_KEY_CART);
        if(count($data['cart']['orders']) == 0){
            return Response::redirect('index.php/message/cartempty');
        }
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

    public function action_historyin($order_id){
        if(empty(\Session::get(self::SESSION_KEY_CART))){
            \Session::set(self::SESSION_KEY_CART,array('orders'=>array()));
        }
        $cart = \Session::get(self::SESSION_KEY_CART);
        $order = Model_Order::find($order_id);
        $total_money = 0;
        foreach ($order->orderline as $orderline) {
            $item = Model_Item::find($orderline['item_id']);
            $quantity = $orderline['num'];
            switch($orderline['size']){
                case 'S':
                    $price = $item->unit_price_s;
                    break;
                case 'M':
                    $price = $item->unit_price_m;
                    break;
                case 'L':
                    $price = $item->unit_price_l;
                    break;
                default:
                    $price = $item->unit_price;
                    break;
            }
            $money = $price * $quantity;
            array_push($cart['orders'],array(
                'item_id' => $item['id'],
                'item_name'=>$item['name'],
                'size' => $orderline['size'],
                'quantity' => $quantity,
                'money'=> $money
            ));
        }
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
