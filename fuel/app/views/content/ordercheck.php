<?php echo Asset::css('content/ordercheck.css');?>
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
                </div>
            <?php endforeach;?>
        <?php endif;?>
        <div class="summoney">
            合計金額
            <div class="sum">
                <span><?php echo $cart['total_money']?></span>円
            </div>
        </div>
    </div>

    <div class="deliveryheading">
        配達先
    </div>
    <div class="delivery">
        <div class="postal">
            <span>〒</span><?php echo $address['postalcode']?>
        </div>
        <div class="address">
            <?php echo $address['address']?>
            <?php echo '<br>' . $address['billname'] . '  '. $address['companyname']?>
        </div>
    </div>
    <div class="confirm">
        <?php echo Html::anchor('index.php/order/commit','確定',array('class'=>'link'))?>
    </div>
    <div class="back">
        <?php echo Html::anchor('index.php/order/delivery','戻る',array('class'=>'link'))?>
    </div>