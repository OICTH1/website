<?php echo Asset::css('content/itemcart.css');?>

    <title>商品カート</title>

    <div class="contents">
        <div class="cartheading">
            ご注文内容
        </div>
        <div class="cart">
            <?php if(isset($cart['orders'])):?>
                <?php foreach ($cart['orders'] as $key => $order) :?>
                    <div class="cartin">
                        <div class="name">
                            <span><?php echo $order['item_name']?></span><span>(<?php echo $order['size']?>)</span>
                        </div>
                        <div class="num">
                            数量<span><?php echo $order['quantity']?></span>
                        </div>
                        <div class="money">
                            金額￥<span><?php echo $order['money']?></span>
                        </div>
                        <div class="change">
                            <?php echo Html::anchor('index.php/item/detail/'.$order['item_id'] . '/' . $key,'変更',array('class'=>'link'))?>
                        </div>
                        <div class="delete">
                            <?php echo Html::anchor('index.php/cart/delete/' . $key,'削除',array('class'=>'link'))?>
                        </div>
                    </div>
                <?php endforeach;?>
            <?php endif;?>
        <div class="summoney">
            ご注文金額　<span><?php echo $cart['total_money']?></span>円
        </div>
        <div class="deliverybutton">
            <?php echo Html::anchor('index.php/order/delivery','配達先選択へ進む',array('class'=>'link'))?>
        </div>
    </div>
