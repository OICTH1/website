<?php echo Asset::css('contents/whereismypizza.css') ?>

<div class="cartheading">
    ご注文内容
</div>
<div class="cart">
    <div class="cartin">
        <div class="name">
            <span>ソーセージナラベターノ</span><span>(L)</span>
        </div>
        <div class="num">
            数量<span>1</span>
        </div>
        <div class="money">
            金額￥<span>5000</span>
        </div>
    </div>
    <div class="cartin">
        <div class="name">
            <span>ソーセージナラベターノ</span><span>(L)</span>
        </div>
        <div class="num">
            数量<span>1</span>
        </div>
        <div class="money">
            金額￥<span>5000</span>
        </div>
    </div>
    <div class="cartin">
        <div class="name">
            <span>ソーセージナラベターノ</span><span>(L)</span>
        </div>
        <div class="num">
            数量<span>1</span>
        </div>
        <div class="money">
            金額￥<span>5000</span>
        </div>
    </div>
    <div class="cartin">
        <div class="name">
            <span>ソーセージナラベターノ</span><span>(L)</span>
        </div>
        <div class="num">
            数量<span>1</span>
        </div>
        <div class="money">
            金額￥<span>5000</span>
        </div>
    </div>
    <div class="summoney">
        合計金額
        <div class="sum">
            <span>15,000</span>円
        </div>
    </div>
</div>
<div class="deliveryheading">
    配達先
</div>
<div class="delivery">
    <div class="yubin">
        777-7777
    </div>
    <div class="address">
        ○○府○○市○○町×-××
    </div>
    <div class="address">
        ○○○○○○ビル×××号室
    </div>
</div>
<div class="whereheading">
    Where is my pizza
</div>
<div class="whereismypizza">
    <div class="map-embed">
        <div id="map-canvas">ここに地図が表示されます</div>
    </div>
</div>
<div class="confirm">
    <a class="biglink">確定</a>
</div>
<div class="back">
    <a class="biglink">戻る</a>
</div>
<?php echo Asset::js("https://maps.googleapis.com/maps/api/js?key=AIzaSyAGCQellvVcqIZwpn0xtU0Vrc5SBLWnTt8") ?>
<?php echo Asset::js('contents/whereismypizza.js') ?>
