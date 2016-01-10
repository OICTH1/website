<?php

class Controller_Order Extends Controller_Page
{
    public function before(){
            parent::before();
          if(empty(\Session::get(self::SESSION_KEY_USER_ID))){
            return Response::redirect('index.php/auth/index/true');
          }
          if(empty(\Session::get(self::SESSION_KEY_CART))){
            return Response::redirect('index.php/message/cartempty');
          }
    }

    public function action_delivery(){
        $data['cart'] = \Session::get(self::SESSION_KEY_CART);
        $user_id = \Session::get(self::SESSION_KEY_USER_ID);
        $data['user'] = Model_Member::find($user_id);
        $this->template->content = View::forge('content/deliveryselect',$data);
    }

    public function action_enter(){
        switch ($_POST['select-address']) {
            case 'registered':
                $user_id = \Session::get(self::SESSION_KEY_USER_ID);
                $user = Model_Member::find($user_id);
                $address['postalcode'] = $user['postalcode'];
                $address['address'] = $user['address'] ;
                $address['billname'] = '';
                $address['companyname'] = '';
                break;

            case 'other':
                $address['postalcode'] = $_POST['postalcode'];
                $input_address = $_POST['address1'] . $_POST['address2'];
                $address['address'] = $input_address;
                $address['billname'] = $_POST['billname'];
                $address['companyname'] = $_POST['companyname'];
                break;
        }
        \Session::set(self::SESSION_KEY_ADDRESS,$address);
        return Response::redirect('index.php/order/check');
    }

    public function action_check(){
        $data['cart'] = \Session::get(self::SESSION_KEY_CART);
        $data['address'] = \Session::get(self::SESSION_KEY_ADDRESS);
        $this->template->content = View::forge('content/ordercheck',$data);
    }


    public function action_commit(){
        $user_id = \Session::get(self::SESSION_KEY_USER_ID);
        $user = Model_Member::find($user_id);
        $address = \Session::get(self::SESSION_KEY_ADDRESS);
        /*------make order----------------------------------------------------------*/
        $order = new Model_Order();
        $order->member_id = $user->id;
        $order->postalcode = $address['postalcode'];
        $order->destination = $address['address'] . $address['billname'] .$address['companyname'];
        $date =  time();
        $order->order_date = date('Y-m-d H:i:s',$date);
        $order->print_flag = 0;
        $order->status = 0;
        $order->save();

        /*-----make orderline------------------------*/
        $cart = \Session::get(self::SESSION_KEY_CART);
        foreach ($cart['orders'] as $orderline) {
            $item_id = $orderline['item_id'];
            $num = $orderline['quantity'];
            $size = $orderline['size'];
            $neworderline = new Model_Orderline();
            $neworderline->order_id = $order->id;
            $neworderline->item_id = $item_id;
            $neworderline->num = $num;
            $neworderline->size = $size;
            $neworderline->save();

            $earning = new Model_Earning();
            $earning->member_id = $user->id;
            $earning->item_id = $item_id;
            $earning->size = $size;
            switch ($size) {
                case 'S':
                    $unit_price = $neworderline->item->unit_price_s;
                    break;
                case 'M':
                    $unit_price = $neworderline->item->unit_price_m;
                    break;
                case 'L':
                    $unit_price = $neworderline->item->unit_price_m;
                    break;
                default:
                    $unit_price = $neworderline->item->unit_price;
                    break;
            }
            $earning->unit_price = $unit_price;
            $earning->num = $num;
            $earning->date = date('Y-m-d H:i:s',$date);
            $now = date('Ymd');
            $birthday = date('Ymd',strtotime($user->birthday));
            $earning->age = (int)floor(($now-$birthday)/10000);
            $earning->save();

        }
        \Session::delete(self::SESSION_KEY_CART);
        return Response::redirect('index.php/message/commit');
    }

}
