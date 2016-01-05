<?php echo Asset::css('content/itemdetail.css')?>

<div class="menu">
  <div class="heading">
    商品詳細
  </div>
  <div class="menuin">
    <div class="detail">
        <div class="menuname"><?php echo $detail['item_name']?></div>
        <div class="menuleft">
          <?php echo Asset::img($detail['img_path']); ?>
        </div>
        <div class="menuright">
                  <!--<div class="pricelist">-->
                     <?php if($detail['prices']['unit_price'] != null ):?>
                         ￥<span id="price"><?php echo $detail['prices']['unit_price']?></span>
                     <?php else:?>
                        S￥<span id="price_s"><?php echo $detail['prices']['unit_price_s']?></span> M￥<span id="price_m"><?php echo $detail['prices']['unit_price_m']?></span> L￥<span id="price_l"><?php echo $detail['prices']['unit_price_l']?></span>
                    <?php endif;?>
                  <!--</div>-->
                  <!--<div class="zei">-->(税込)<br><!--</div>-->
          <!--<div class="description">--><?php echo $detail['explanatory']?><!--</div>-->
        </div>
        <div class="clear"></div>
        <?php if(isset($order_id)):?>
            <?php echo Form::open(array('action' => 'index.php/cart/edit/' . $order_id, 'method' => 'post'))?>
        <?php else :?>
            <?php echo Form::open(array('action' => 'index.php/cart/add', 'method' => 'post'))?>
        <?php endif;?>
        <?php echo Form::hidden('item_id',$detail['item_id'])?>
        <?php if(!($detail['prices']['unit_price'] != null)):?>
    </div>
    <div class="size">
      <div class="sizeheading">
        サイズ
      </div>
      <div class="sizein">
              <div class="s"><label>Sサイズ<br><input type="radio" name="size" value="_s" checked></label></div>
              <div class="m"><label>Mサイズ<br><input type="radio" name="size" value="_m"></label></div>
              <div class="l"><label>Lサイズ<br><input type="radio" name="size" value="_l"></label></div>
      </div>
    </div>
    <?php endif;?>
    <div class="select">
      <div class="selectleft">
        個数<select name="quantity" id="quantity" >
          <option value="1" checked>1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
        </select>
      </div>
      <div class="selectcenter">
              ご注文金額　<span id="money">5000</span>円
              <input type="hidden" id="form-money" name="money">
      </div>
      <div class="selectright">
        <?php if(isset($order_id)):?>
            <input type="submit" value="変更" >
        <?php else :?>
            <input type="submit" value="カートへ入れる">
        <?php endif;?>
      </div>
      <?php echo Form::close()?>
    </div>
  </div>
</div>
<div class="button">
  <?php echo Html::anchor('index.php/item/list/'.$detail['category'],'一覧へ戻る',array('class'=>'link'))?>
</div>
<?php echo Asset::js('content/itemdetail.js')?>
