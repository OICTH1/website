<?php echo Asset::css('content/deliveryselect.css') ?>
<?php echo Asset::css('content/validationEngine.jquery.css') ?>



<div class="heading">
    配達先選択
</div>

<!--==========配達先選択=====================-->
<div class="select-address">

    <?php echo Form::open(array('action' => 'index.php/order/enter', 'id' => 'other-form'))?>
    <table>
        <!--==========登録している住所=====================-->
      <tr>
        <td><label class="labe" for="select-address">
            <input type="radio" name="select-address" value="registered" id="select-address" checked>
        </label></td>
        <td>
          <label for="select-address"><h3 class="close">登録している住所に配達する</h3></label>
          <div id="registered-address">
            <div id="postal">
              <span>〒</span><span id="postal-code"><?php echo $user['postalcode']?></span>
            </div>
            <div id="address1">
              <?php echo $user['address']?>
            </div>
          </div>
        </td>
      </tr>
      <tr>
        <td><label class="labe" for="select-other">
          <input type="radio" name="select-address" value="other" id="select-other">
        </label></td>
        <td>
          <label for="select-other"><h3 class="open">住所を指定して配達する</h3></label>

             <div class="other-form" id="other-form">

                <!--郵便番号-->
                <div class="form-postal">
                    <div class="form-label required">郵便番号　[必須]</div>
                    <div class="form-input">
                        <input type="text" name="postalcode" size="7" value="" class="validate[required]">
                    <input type="button" name="address-search" value="自動検索" id="address-search">
                  </div>
                  <div class="form-describe">-を含む   【例】123-4567</div>
                </div>
                <!--都道府県、市区町村-->
                <div class="form-address-1">
                    <div class="form-label required">住所　[必須]</div>
                    <div class="form-input"><input type="text" name="address1" size="40" value="" class="validate[required]"></div>
                  <div class="form-describe">【例】東京都渋谷区恵比寿南1丁目2-3の場合、”東京都渋谷区恵比寿南” を入力してください。</div>
                </div>
                <!--番地-->
                <div class="form-address-2">
                  <div class="form-label required">番地以降　[必須]</div>
                    <div class="form-input"><input type="text" name="address2" size="30" value="" class="validate[required]"></div>
                  <div class="form-describe">【例】東京都渋谷区恵比寿南1丁目2-3の場合、”1丁目2-3” を入力してください。</div>
                </div>
                <h3>マンション、ビル、アパートの場合</h3><br/>
                <!--建物名-->
                <div class="form-builname">
                    <div class="form-label">建物名</div>
                    <div class="form-input"><input type="text" size="30" name="billname" value=""></div>
                  <div class="form-describe">部屋番号・フロア番号も含む</div>
                </div>
                <!--会社名-->
                <div class="form-companyname">
                  <div class="form-label ">会社名</div>
                  <div class="form-input"><input type="text" size="30" name="companyname" value=""></div>
                  <div class="form-describe"></div>
                </div>
            </div>
        </td>
      </tr>
</table>
</div>

<div class="confirmation button">
    <input type="submit" value="決定" id="sbt">
    <label for="sbt">決定</label>
</div>
<?php echo Form::close()?>
<div class="back button">
    <?php echo Html::anchor('index.php/cart','戻る',array('class'=>'link'))?>
</div>
<?php echo Asset::js('content/jquery/jquery.js') ?>
<?php echo Asset::js('content/jquery/jquery.validationEngine.js') ?>
<?php echo Asset::js('content/jquery/jquery.validationEngine-ja.js') ?>
<?php echo Asset::js('content/jquery/ajaxzip3.js')?>
<?php echo Asset::js('content/deliveryselect.js')?>
