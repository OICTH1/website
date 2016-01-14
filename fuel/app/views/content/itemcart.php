<?php echo Asset::css('content/itemcart.css');?>
    <div class="contents">
        <div class="heading">
            カート
        </div>
        <div class="cart">
            <div class="orders">
                <?php if(isset($cart['orders'])):?>
                    <?php foreach ($cart['orders'] as $key => $order) :?>
                        <div class="order">
                            <div class="name">
                                <span><?php echo $order['item_name']?></span><span><?php if ($order['size']) {echo '(' . $order['size'] .')';};?></span>
                            </div>
                            <div class="order-bottom">
                                <div>
                                    <div class="num">
                                        数量<span><?php echo $order['quantity']?></span>
                                    </div>
                                    <div class="money">
                                        金額￥<span><?php echo $order['money']?></span>
                                    </div>
                                    <div class="change button">
                                        <?php echo Html::anchor('index.php/item/detail/'.$order['item_id'] . '/' . $key,'変更',array('class'=>'link'))?>
                                    </div>
                                    <div class="delete button">
                                        <?php echo Html::anchor('index.php/cart/delete/' . $key,'削除',array('class'=>'link'))?>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    <?php endforeach;?>
                <?php endif;?>
              </div>
            <div class="summoney">
                ご注文金額　<span><?php echo $cart['total_money']?></span>円
            </div>
        </div>
        <div class="button selectdelivery">
            <?php echo Html::anchor('index.php/order/delivery','配達先選択へ進む',array('class'=>'link'))?>
        </div>
        <div class="button">
          <?php echo Html::anchor('index.php/item/list','お買い物を続ける',array('class'=>'link'))?>
        </div>
      </div>
