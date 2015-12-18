<?php echo Asset::css('contents/newmember.css') ?>
<?php echo Asset::css('contents/validationEngine.jquery.css') ?>

<div class="formheading">
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
        <div class="formleftin">住所　[必須]</div>
        <div class="formleftin">番地　[必須]</div><span class="description"></span>
        <div class="formleftin">号以降　[必須]</div><span class="description"></span>
        <div class="formleftin">建物名</div>
        <div class="formleftin">会社名</div>
        <div class="formleftin">電話番号　[必須]</div>
        <div class="formleftin">生年月日　[必須]</div>
        <div class="formleftin">性別　[必須]</div>
    </div>
    <div class="formright">
        <form action="" method="" name="formins" id="formin">
            <div class="formrightin"><input type="text" name="mail" size="60" class="validate[required,custom[email]]"></div>

            <div class="formrightin"><input type="password" name="password1" id="password1" size="50" class="validate[required],minSize[8]">　<span class="description">8文字以上</span></div>

            <div class="formrightin"><input type="password" name="password2" size="50" class="validate[required,equals[password1]]"></div>

            <div class="formrightin">　<span class="description">性：</span><input type="text" name="name" class="validate[required]">　<span class="description">名：</span><input type="text" name="name" class="validate[required]"></div>

            <div class="formrightin"><span class="description">セイ：</span><input type="text" name="kana" class="validate[required]">　<span class="description">メイ：</span><input type="text" name="kana" class="validate[required]"></div>

            <div class="formrightin"><input type="text" name="postal"  size="7" class="validate[required]">　　　<input type="button" name="search" value="検索"><span class="description">（-は含まない）</span></div>
            <div class="formrightin"><input type="text" name="address" size="40" class="validate[required]"></div>

            <div class="formrightin"><input type="text" name="banti" size="4" class="validate[required]"></div><span class="description">【例】東京都渋谷区恵比寿南1丁目2-3の場合、”2” を入力してください。</span>

            <div class="formrightin"><input type="text" name="gouikou" size="5" class="validate[required]"></div><span class="description">【例】東京都渋谷区恵比寿南1丁目2-3の場合、”2” を入力してください。</span>

            <div class="formrightin"><input type="text" name="tatemono" size="40"><span class="description">（部屋番号・フロア番号も含む）</span>
            </div>

            <div class="formrightin"><input type="text" name="kaisya" size="40"></div>
            <div class="formrightin"><input type="text" name="phone" class="validate[custom[phone],required]"><span class="description">（-を含めず続けて書く）</span></div>

            <div class="formrightin">西暦<input type="text" name="years" size="4" class="validate[required]">年　<input type="text" name="month" size="2" class="validate[required]">月　<input type="text" name="days" size="2" class="validate[required]">日<span class="description"> （会員登録後の変更はできません）</span></div>

            <div class="formrightin"><label><input type="radio" name="sex" value="male" class="validate[required]">男性</label>　
                <label><input type="radio" name="sex" value="female" class="validate[required]">女性　　　　<span class="description">会員登録後の変更はできません</span></div></label>
</div>
</div>
<div class="confirmation">
    <input type="submit" value="確認画面へ" class="biglink">
</div>
</form>
<div class="back">
    <a class="biglink">戻る</a>
</div>
<?php echo Asset::js('contents/jquery/jquery.js') ?>
<?php echo Asset::js('contents/jquery/jquery.validationEngine.js') ?>
<?php echo Asset::js('contents/jquery/jquery.validationEngine-ja.js') ?>
<?php echo Asset::js('contents/newmember.js') ?>
