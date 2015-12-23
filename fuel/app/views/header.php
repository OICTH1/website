<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <?php echo Asset::css('content/all.css');?>
    <?php echo Asset::css('header.css');?>
    <?php echo Asset::js('content/jquery/jquery.js')?>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <style media="screen">
    body{
      background-image: url(<?php echo Asset::get_file('background.png', 'img');?>);
    }
    </style>
  </head>
  <body>
    <div class="main">
      <header>
        <div class="header-top">
            <div class="navigator">
              <ul class="navi-list">
                <li><?php echo Html::anchor('index.php/top','TOP',array('class'=>'link'))?></li>
                <li><?php echo Html::anchor('index.php/item/list','メニュー',array('class'=>'link'))?></li>
                <li><a href="#">ピザどこ？</a></li>
              </ul>
            </div>
        </div>

        <div class="header-bottom">
            <div class="logo">
              <?php echo Asset::img('logo.png');?>
            </div>
            <div class="info-bar">
            <?php if(!$member):?>
                <div class="info-login info-item">
                  <?php echo Html::anchor('index.php/auth','ログイン',array('class'=>'link','style'=>'color:#fff'))?>
                </div>
                <div class="info-signup info-item">
                  新規登録
                </div>
              <?php else:?>
              <div class="info-logout">
                <div >
                    ようこそ
                </div>
                <div class="member-bar">
                  <div class="member-name">
                    <?php echo $member['name'] . '様' ?>
                  </div>
                  <div class="logout-btn">
                    <?php echo Html::anchor('index.php/auth/logout','ログアウト',array('class'=>'link'))?>
                  </div>
                  <div style="clear:both"></div>
                </div>
              </div>
                <div class="info-cart info-item">
                    <?php echo Html::anchor('index.php/cart','カート',array('class'=>'link'))?>
                </div>
              <?php endif;?>
              </div>
        </div>
      </header>

      <div class="inner">
        <?php echo $content ?>
      </div>
    </div>
  </body>
</html>
