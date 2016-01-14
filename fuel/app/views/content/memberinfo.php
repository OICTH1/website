<?php echo Asset::css('content/memberinfo.css')?>

<div class="heading">
        登録中のお客様情報
</div>
<div class="memberinfo">
    <div class="form">
        <div class="formitem">
            <div class="itemleft">メールアドレス</div>
            <div class="itemright"><span class="mail"><?php echo $user['mailaddress']?></span></div>
        </div><br>
        <div class="formitem">
            <div class="itemleft">パスワード</div>
            <div class="itemright"><span class="password"><?php for ($i=0; $i < strlen($user['password']); $i++) {
                echo '*';
            }?></span></div>
        </div><br>
        <div class="formitem">
            <div class="itemleft">名前</div>
            <div class="itemright"><span class="name"><?php echo $user['name']?></span></div>
        </div><br>
        <div class="formitem">
            <div class="itemleft">フリガナ</div>
            <div class="itemright"><span class="phonetic"><?php echo $user['phonetic']?></span></div>
        </div><br>
        <div class="formitem">
            <div class="itemleft">郵便番号</div>
            <div class="itemright">〒<span class="postal"><?php echo $user['postalcode']?></span></div>
        </div><br>
        <div class="formitem">
            <div class="itemleft">住所　</div>
            <div class="itemright"><span class="address"><?php echo $user['address']?></span></div>
        </div><br>
        <div class="formitem">
            <div class="itemleft">電話番号</div>
            <div class="itemright"><span class="phone"><?php echo $user['tel']?></span></div>
        </div><br>
        <div class="formitem">
            <div class="itemleft">生年月日</div>
            <div class="itemright">西暦　<span class="years"><?php echo explode('-',$user['birthday'])[0]?></span>年<span class="month"><?php echo explode('-',$user['birthday'])[1]?></span>月<span class="days"><?php echo explode('-',$user['birthday'])[2]?></span>日</div>
        </div><br>
        <div class="formitem">
            <div class="itemleft">性別</div>
            <div class="itemright"><span class="sex"><?php echo $user['sex']?>性</span></div>
        </div>
    </div>
    <div class="memberinfo-bottom">
        <div class="history button">
            <?php echo Html::anchor('index.php/member/history','注文履歴',array('class'=>'link'))?>
        </div>
        <div class="modify button">
            <?php echo Html::anchor('index.php/member/edit','編集',array('class'=>'link'))?>
        </div>
    </div>
</div>
<div class="top button">
    <?php echo Html::anchor('index.php/top','TOPに戻る',array('class'=>'link'))?>
</div>
