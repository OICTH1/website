<?php echo Asset::css('content/newmembercheck.css')?>

<div class="heading">
    入力した情報の確認
</div>
<div class="form">
    <div class="formleft">
        <div class="formleftin">メールアドレス</div>
        <div class="formleftin">パスワード</div>
        <div class="formleftin">名前<br></div>
        <div class="formleftin">フリガナ<br></div>
        <div class="formleftin">郵便番号</div>
        <div class="formleftin">住所</div>
        <div class="formleftin">電話番号</div>
        <div class="formleftin">生年月日</div>
        <div class="formleftin">性別</div>
    </div>
    <div class="formright">
       <div class="formrightin"><span class="mail"><?php echo $newmember['mail'] ?></span></div>
        <div class="formrightin"><span class="password"><?php for ($i=0; $i < strlen($newmember['password1']); $i++) {
            echo '*';
        }?></span></div>
        <div class="formrightin"><span class="name"><?php echo $newmember['name'] ?></span></div>
        <div class="formrightin"><span class="name_kana"><?php echo $newmember['kana'] ?></span></div>
        <div class="formrightin">〒<span class="postal"><?php echo $newmember['postal'] ?></span></div>
        <div class="formrightin"><span class="address"><?php echo $newmember['address1'] . $newmember['address2'] ?></span></div>
        <div class="formrightin"><span class="phone"><?php echo $newmember['phone'] ?></span></div>
        <div class="formrightin">西暦<span class="years"><?php echo $newmember['years'] ?></span>年<span class="month"><?php echo $newmember['month'] ?></span>月<span class="days"><?php echo $newmember['days'] ?></span>日</div>
        <div class="formrightin"><span class="sex"><?php if(isset($newmember['sex'])){echo $newmember['sex'].'性';} ?></span></div>
    </div>
    <div class="clear"></div>
</div>
<div class="confirm button">
    <?php echo Html::anchor('index.php/newmember/commit','登録',array('class'=>'link'))?>
</div>
<div class="modify button">
    <?php echo Html::anchor('index.php/newmember/edit','再編集',array('class'=>'link'))?>
</div>
