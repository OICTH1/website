<?php echo Asset::css('content/auth.css')?>
<div class="contents">
    <div class="loginformheading">
        ログインページ
    </div>
    <div class="loginform">
        <div class="form">
           <?php echo form::open('index.php/auth/login')?>
            <p>
                ご登録のメールアドレス<input type="text" name="mail" size="40" id="form-mail">
            </p>
            <p>
                パスワード<input type="password" name="pass" size="40" id="form-password">
            </p>
            <?php if(isset($err)):?>
                <p id="err-message">
                  メールアドレスまたはパスワードが正しくありません
                </p>
              <?php endif; ?>
        </div>
        <div class="login-btn">
            <label for="login-sbt">ログイン</label><input type="submit"  style="display:none" id="login-sbt">
        </div>
      <?php echo form::close()?>
    </div>
    <div class="newmember">
        <a>新規会員登録はこちら</a>
    </div>
    <div class="return-top">
        <?php echo Html::anchor('index.php/top','トップページへ戻る',array('class'=>'link'))?>

    </div>
</div>
