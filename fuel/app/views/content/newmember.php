<?php echo Asset::css('content/newmember.css') ?>
<?php echo Asset::css('content/validationEngine.jquery.css') ?>

<div class="heading">
    新規会員登録
</div>
<div class="form">
    <div class="formleft">
        <div class="formleftin">メールアドレス　[必須]</div>
        <div class="formleftin">パスワード　[必須]</div>
        <div class="formleftin">確認のためもう一度</div>
        <div class="formleftin">名前　[必須]<br></div>
        <div class="formleftin">フリガナ　[必須]<br></div>
        <div class="formleftin">郵便番号　[必須]</div>
        <div class="formleftin br">住所　[必須]</div>
        <div class="formleftin br">番地以降　[必須]</div>
        <div class="formleftin">電話番号　[必須]</div>
        <div class="formleftin">生年月日　[必須]</div>
        <div class="formleftin">性別　[必須]</div>
    </div>
    <div class="formright">
        <?php $flag = isset($editing) ?>
        <?php echo Form::open(array('action'=>'index.php/newmember/check','method'=>'post','id'=>'formin')) ?>
            <div class="formrightin"><input type="text" name="mail" size="60" class="validate[required,custom[email]]" value=<?php if($flag){echo $editing['mail'];} ?>></div>

            <div class="formrightin"><input type="password" name="password1" id="password1" size="50" class="validate[required],minSize[8]">　<span class="description">8文字以上</span></div>

            <div class="formrightin"><input type="password" name="password2" size="50" class="validate[required,equals[password1]]"></div>

            <div class="formrightin"><input type="text" name="name" class="validate[required]" value=<?php if($flag){echo $editing['name'];} ?>><span class="description" >姓名</span></div>
            <div class="formrightin"><input type="text" name="kana" class="validate[required]" value=<?php if($flag){echo $editing['kana'];} ?>><span class="description" >セイメイ</span></div>

            <div class="formrightin">〒<input type="text" name="postal"  size="7" class="validate[required]" value=<?php if($flag){echo $editing['postal'];} ?>><input type="button" name="search" id="search" value="検索"><span class="description">（-を含める）</span></div>

            <div class="formrightin br"><input type="text" name="address1" size="40" class="validate[required]" value=<?php if($flag){echo $editing['address1'];} ?>></br><span class="description">【例】東京都渋谷区恵比寿南1-2-3の場合、”東京都渋谷区恵比寿南” を入力してください。</span></div>
            <div class="formrightin br"><input type="text" name="address2" size="30" class="validate[required]" value=<?php if($flag){echo $editing['address2'];} ?>></br><span class="description">【例】東京都渋谷区恵比寿南1-2-3の場合、”1-2-3” を入力してください。</span></div>

            <div class="formrightin"><input type="text" name="phone" class="validate[custom[phone],required]" value=<?php if($flag){echo $editing['phone'];} ?>><span class="description">（-を含める）</span></div>

            <div class="formrightin">西暦<input type="text" name="years" size="4" class="validate[required,minSize[4]],maxSize[4]" value=<?php if($flag){echo $editing['years'];} ?>>年
                <input type="text" name="month" size="2" class="validate[required,custom[integer],min[1],max[12]]" value=<?php if($flag){echo $editing['month'];} ?>>月
                <input type="text" name="days" size="2" class="validate[required,custom[integer],min[1],max[31]]" value=<?php if($flag){echo $editing['days'];} ?>>日<span class="description"> （会員登録後の変更はできません）</span></div>

            <div class="formrightin"><label><input type="radio" name="sex" value="男" class="validate[required]" <?php if($flag && isset($editing['sex']) && $editing['sex'] == "男" ){echo 'checked';} ?>>男性</label>　
                <label><input type="radio" name="sex" value="女" class="validate[required]" <?php if($flag && isset($editing['sex']) && $editing['sex'] == "女" ){echo 'checked';} ?>>女性<span class="description">会員登録後の変更はできません</span></label></div>
</div>
<div class="clear"></div>
</div>
<div class="clear"></div>
</div>
<div class="confirmation button">
    <input type="submit" value="" class="biglink" id="sbt">
    <label for="sbt">確認画面へ</label>
</div>
<?php echo Form::close() ?>
<div class="back button">
    <?php echo Html::anchor('index.php/top','戻る',array('class'=>'link'))?>
</div>
<?php echo Asset::js('content/jquery/jquery.js') ?>
<?php echo Asset::js('content/jquery/jquery.validationEngine.js') ?>
<?php echo Asset::js('content/jquery/jquery.validationEngine-ja.js') ?>
<?php echo Asset::js('content/jquery/ajaxzip3.js')?>
<?php echo Asset::js('content/newmember.js') ?>
