<?php echo Asset::css('content/membermodify.css') ?>
<?php echo Asset::css('content/validationEngine.jquery.css') ?>

<div class="heading">
    会員情報編集
</div>
<div class="form">
    <div class="formleft">
        <div class="formleftin">名前<br></div>
        <div class="formleftin">フリガナ<br></div>
        <div class="formleftin">生年月日</div>
        <div class="formleftin">性別</div>
        <div class="formleftin">郵便番号</div>
        <div class="formleftin">住所</div>
        <div class="formleftin">電話番号</div>
        <div class="formleftin">新しいメールアドレス</div>
        <div class="formleftin">現在のメールアドレス</div>
        <div class="formleftin">パスワード</div>
        <div class="formleftin">確認のためもう一度</div>
    </div>
    <div class="formright">
        <?php echo Form::open(array('action'=>'index.php/member/editcommit','method'=>'post','id'=>'formin')) ?>
          <div class="formrightin"><span class="description">姓　名</span><input type="text" name="name"></div>
          <div class="formrightin"><span class="description">セイメイ</span><input type="text" name="kana"></div>
          <div class="formrightin">西暦　<span class="years">1900</span>　年　<span class="month">10</span>　月　<span class="days">10</span>　日　　<span class="description">（変更できません）</span></div>
          <div class="formrightin"><span class="sex">男性</span>　　　　<span class="description">（変更できません）</span></div>
          <div class="formrightin"><input type="text" name="postal"  size="7">　　　<input type="button" name="search" value="検索" id="search">　　<span class="description">（-を含める）</span></div>
          <div class="formrightin"><input type="text" name="address" size="40"></div>
          <div class="formrightin"><input type="text" name="phone"><span class="description">（-を含めず続けて書く）</span></div>
          <div class="formrightin"><input type="text" name="mail" size="60" class="validate[custom[email]]"></div>
          <div class="formrightin"></div>
          <div class="formrightin"><input type="password" id="pass1" name="pass1" size="50" class="validate[minSize[8]"><span class="description">（8文字以上）</span></div>
          <div class="formrightin"><input type="password" name="pass2" size="50" class="validate[equals[pass1]]"></div>
        </div>
        <div class="clear"></div>
      </div>
<div class="modify">
    <input type="submit" value="編集完了" class="buttonlink">
</div>
    </form>
<div class="back">
    <?php echo Html::anchor('index.php/member','編集せず戻る',array('class'=>'buttonlink'))?>
</div>
<?php echo Asset::js('content/jquery/jquery.js') ?>
<?php echo Asset::js('content/jquery/jquery.validationEngine.js') ?>
<?php echo Asset::js('content/jquery/jquery.validationEngine-ja.js') ?>
<?php echo Asset::js('content/newmember.js') ?>
