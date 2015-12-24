<?php echo Asset::css('content/itemlist.css');?>
<div class="contents">
	<div class="listheading">
		ピザ
	</div>
	<div class="list">
			<?php foreach ( $item_list as $item) :?>
            <div class="listitem">
                <div class="img">
                  <?php echo Asset::img($item['img_path']);?>
                </div>
                <div class="pizzaname"><?php echo $item['item_name']?></div>
				<div class="pricelist">
					<?php if($item['prices']['unit_price'] != null):?>
					 	<div class="price">￥<span id="price"><?php echo $item['prices']['unit_price']?></span></div>
					<?php else:?>
				   		<div class="price-sml">S￥<span id="price_s"><?php echo $item['prices']['unit_price_s']?></span> M￥<span id="price_m"><?php echo $item['prices']['unit_price_m']?></span> L￥<span id="price_l"><?php echo $item['prices']['unit_price_l']?></span></div>
			   		<?php endif;?>
				</div>
	            <div class="zei">(税込)</div>
                <div class="description"><?php echo $item['explanatory']?></div>
                <div class="syousai">
					<?php echo Html::anchor('index.php/item/detail/' . $item['item_id'],'詳細を見る',array('class'=>'link'))?>
                </div>
            </div>
		<?php endforeach; ?>
		<div style="clear:both"></div>
    </div>
	<div class="toppage">
		<?php echo Html::anchor('index.php/top','TOPページに戻る',array('class'=>'link'))?>
	</div>
