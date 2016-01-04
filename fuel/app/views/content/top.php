<?php echo Asset::css('content/top.css');?>
<div class="content">
    <div class="content-top">
      <div class="main-nav">
        <ul>
          <li>
              <?php echo Html::anchor('index.php/cart','',array('class'=>'imglink'))?>
              <div><i class="fa fa-shopping-cart"></i></div><div>カート</div><div class="clear"></div>
          </li>
          <li>
              <?php echo Html::anchor('index.php/item/list','',array('class'=>'imglink'))?>
              <div><i class="fa fa-book"></i></div><div>メニュー</div><div class="clear"></div>
          </li>
          <li>
              <?php echo Html::anchor('#','',array('class'=>'imglink'))?>
              <div><i class="fa fa-search"></i></div><div>ピザどこ？</div><div class="clear"></div>
          </li>
        </ul>
      </div>
      <div class="top-banner">
          <?php echo Asset::img('banner.jpg');?>
      </div>
      <div style="clear:both"></div>
    </div>
    <div class="recommendation-label">オススメピザ</div>
    <div class="recommendation">
        <div class="recommendation-list">
          <div class="re-list-item">
              <div class="re-list-item-img">
                <?php echo Html::anchor('index.php/item/detail/1','',array('class'=>'imglink'))?>
                <?php echo Asset::img('margherita.jpg');?>
              </div>
              <div class="re-list-item-name">マルゲリータ</div>
            </a>
          </div>
          <div class="re-list-item">
              <div class="re-list-item-img">
                <?php echo Html::anchor('index.php/item/detail/11','',array('class'=>'imglink'))?>
                <?php echo Asset::img('rukora.jpg');?>
              </div>
              <div class="re-list-item-name">ルコラ</div>
            </a>
          </div>
          <div class="re-list-item">
              <div class="re-list-item-img">
                <?php echo Html::anchor('index.php/item/detail/8','',array('class'=>'imglink'))?>
                <?php echo Asset::img('capricciosa.jpg');?>
              </div>
              <div class="re-list-item-name">  カプリチョーザ</div>
            </a>
          </div>
          <div style="clear:both"></div>
        </div>
        <div style="clear:both"></div>
    </div>
 </div >
