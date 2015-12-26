 	  <?php echo Asset::css('content/orderlog.css');?>

            <div class="logheading">
                注文履歴一覧
            </div>
            <div class="log">
                <ul class="log-list" style="list-style:none">
                    <?php foreach ($orders as $order):?>
                        <li class="log-list-item">
                            <div class="title"><span class="titleleft"><?php echo $order['order_date'] ?></span><span class="titleright openicon"></span>></div>
                            <div class="datail">
                                <div class="cart">
                                <?php $total_money = 0;foreach ($order->orderline as $orderline):?>
                                    <div class="cartin">
                                        <div class="name">
                                            <span><?php echo $orderline->item->name ?></span><span><?php if ($orderline->size) {echo '(' . $orderline->size .')';};?></span>
                                        </div>
                                        <div class="num">
                                            数量<span><?php echo $orderline->num;?></span>
                                        </div>
                                        <div class="money">
                                            金額￥<span><?php
                                            switch ($orderline->size) {
                                                case 'S':
                                                    $unit_price = $orderline->item->unit_price_s;
                                                    break;
                                                case 'M':
                                                    $unit_price = $orderline->item->unit_price_m;
                                                    break;
                                                case 'L':
                                                    $unit_price = $orderline->item->unit_price_l;
                                                    break;
                                                default:
                                                    $unit_price = $orderline->item->unit_price;
                                                    break;
                                            }
                                            $price = $unit_price * $orderline->num;
                                            $total_money += $price;
                                            echo $price;
                                            ?></span>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                                <div class="summoney">
                                    合計金額
                                    <div class="sum">
                                        <span><?php echo $total_money?></span>円
                                    </div>
                                </div>
                    <?php endforeach; ?>
                    <div style="clear:both"></div
            <div class="back">
                <a class="buttonlink">戻る</a>
            </div>

<?php echo Asset::js('content/jquery/jquery.js');?>
<?php echo Asset::js('content/orderlog.js')?>
