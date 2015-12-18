<?php echo Asset::css('contents/deliveryselect.css') ?>
<?php echo Asset::css('contents/validationEngine.jquery.css') ?>

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
    配達先を選択する
</div>

<!--==========配達先選択=====================-->
<table class="select-address">
    <!--==========登録している住所=====================-->
  <tr>
    <td>
        <input type="radio" name="select-address" value="registered" id="select-address">
    <td>
      <h3>登録している住所に配達する</h3>
      <div id="registered-address">
        <div id="postal">
          <span>〒</span><span id="postal-code">XXX-XXXX</span>
        </div>
        <div id="address1">
          ○○府○○市○○町×-××
        </div>
        <div id="address2">
          ○○○○○○ビル×××号室
        </div>
      </div>
    </td>
  </tr>
  <tr>
    <td>
      <input type="radio" name="select-address" value="other" id="select-other">
    </td>
    <td>
      <h3>住所を指定して配達する</h3>

      <form class="other-form" id="other-form">
        <hr>
        <!--郵便番号-->
        <div class="form-postal">
            <div class="form-label required">郵便番号　[必須]</div>
            <div class="form-input">
                <input type="text" name="postal-code" value="" class="validate[required]">
            <input type="button" name="address-search" value="自動検索" id="address-search">
          </div>
          <div class="form-describe">-は含まない</div>
        </div>
        <!--都道府県、市区町村-->
        <div class="form-address-1">
            <div class="form-label required">住所　[必須]</div>
            <div class="form-input"><input type="text" name="address1" value="" class="validate[required]"></div>
          <div class="form-describe">【例】東京都渋谷区恵比寿南1丁目2-3の場合、”東京都渋谷区恵比寿南1丁目” を入力してください。</div>
        </div>
        <!--番地-->
        <div class="form-address-2">
          <div class="form-label required">番地　[必須]</div>
            <div class="form-input"><input type="text" name="address2" value="" class="validate[required]"></div>
          <div class="form-describe">【例】東京都渋谷区恵比寿南1丁目2-3の場合、”2” を入力してください。</div>
        </div>
        <!--号-->
        <div class="form-address-3">
            <div class="form-label">号　[必須]</div>
            <div class="form-input"><input type="text" name="address3" value="" class="validate[required]"></div>
          <div class="form-describe">【例】東京都渋谷区恵比寿南1丁目2-3の場合、”3” を入力してください。</div>
        </div>
        <h3>マンション、ビル、アパートの場合</h3>
        <!--建物名-->
        <div class="form-builname">
            <div class="form-label">建物名</div>
            <div class="form-input"><input type="text" name="billname" value=""></div>
          <div class="form-describe">部屋番号・フロア番号も含む</div>
        </div>
        <!--会社名-->
        <div class="form-companyname">
          <div class="form-label ">会社名</div>
          <div class="form-input"><input type="text" name="companyname" value=""></div>
          <div class="form-describe"></div>
        </div>
    </td>
  </tr>
</table>

<div class="confirmation">
    <input type="submit" value="決定" class="biglink">
</div>
</form>
<div class="back">
    <a class="biglink">戻る</a>
</div>
<?php echo Asset::js('contents/jquery/jquery.js') ?>
<?php echo Asset::js('contents/jquery/jquery.validationEngine.js') ?>
<?php echo Asset::js('contents/jquery/jquery.validationEngine-ja.js') ?>
<?php echo Asset::js('contents/deliveryselect.js')?>
