<?php echo Asset::css('content/memberinfo.css')?>

<div class="formheading">
                登録中のお客様情報
                <div class="log">
                    <?php echo Html::anchor('index.php/member/history','注文履歴を確認',array('class'=>'link'))?>
                </div>
            </div>
            <div class="form">
                <div class="formleft">
                    <div class="formleftin">メールアドレス</div>
                    <div class="formleftin">パスワード</div>
                    <div class="formleftin">名前　<br></div>
                    <div class="formleftin">フリガナ　<br></div>
                    <div class="formleftin">郵便番号　</div>
                    <div class="formleftin">住所　</div>
                    <div class="formleftin">電話番号</div>
                    <div class="formleftin">生年月日</div>
                    <div class="formleftin">性別</div>
                </div>
                <div class="formright">
                    <div class="formrightin"><span class="mail"><?php echo $user['mailaddress']?></span></div>
                    <div class="formrightin"><span class="password"><?php echo $user['password']?></span></div>
                    <div class="formrightin"><span class="name"><?php echo $user['name']?></span></div>
                    <div class="formrightin"><span class="phonetic"><?php echo $user['phonetic']?></span></div>
                    <div class="formrightin"><span class="postal"><?php echo $user['postalcode']?></span></div>
                    <div class="formrightin"><span class="address"><?php echo $user['address']?></span></div>
                    <div class="formrightin"><span class="phone"><?php echo $user['tel']?></span></div>
                    <div class="formrightin">西暦　<span class="years"><?php echo explode('-',$user['birthday'])[0]?></span>年<span class="month"><?php echo explode('-',$user['birthday'])[1]?></span>月<span class="days"><?php echo explode('-',$user['birthday'])[2]?></span>日</div>
                    <div class="formrightin"><span class="sex"><?php echo $user['sex']?>性</span></div>
                </div>
            </div>
            <div class="modify">
                <?php echo Html::anchor('index.php/member/edit','編集',array('class'=>'buttonlink'))?>
            </div>
            <div class="top">
                <?php echo Html::anchor('index.php/top','トップページに戻る',array('class'=>'buttonlink'))?>
            </div>
