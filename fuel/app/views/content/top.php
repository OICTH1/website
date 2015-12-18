<?php echo Asset::css('content/top.css');?>
<div class="content">
    <div class="content-top">
      <div class="main-nav">
        <ul>
          <li><a href="#" class="link"><i class="fa fa-shopping-cart"></i>カート</a></li>
          <li><a href="#" class="link"><i class="fa fa-book"></i>メニュー</a></li>
          <li><a href="#" class="link"><i class="fa fa-search"></i>ピザどこ？</a></li>
        </ul>
      </div>
      <div class="top-banner">
          <?php echo Asset::img('banner.jpg');?>
      </div>
      <div style="clear:both"></div>
    </div>
    <div class="	recommendation">
        <div class="	recommendation-label">オススメピザ</div>
        <div class="recommendation-list">
          <div class="re-list-item">
            <a href="http://localhost/website/public/index.php/top" class="link">
              <div class="re-list-item-img">
                <?php echo Asset::img('margherita.jpg');?>
              </div>
              <div class="re-list-item-name">マルゲリータ</div>
            </a>
          </div>
          <div class="re-list-item">
            <a href="http://localhost/website/public/index.php/top" class="link">
              <div class="re-list-item-img">
                <?php echo Asset::img('rukora.jpg');?>
              </div>
              <div class="re-list-item-name">ルコラ</div>
            </a>
          </div>
          <div class="re-list-item">
            <a href="http://localhost/website/public/index.php/top" class="link">
              <div class="re-list-item-img">
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
