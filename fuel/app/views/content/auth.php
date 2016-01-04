<?php echo Asset::css('content/auth.css')?>
<div class="contents">
    <div class="loginformheading">
        ログインページ
    </div>
    <div class="loginform">
        <div class="form">
           <?php echo form::open('index.php/auth/login/' . $selectflag)?>
           <div class="formin">
            <div class="formtitle">ご登録のメールアドレス</div><div class="forminput"><input type="text" name="mail" size="40" id="form-mail">
          </div>
          <div style="clear:both"></div>
        </div>
          <div class="formin">
           <div class="formtitle">パスワード</div><div class="forminput"><input type="password" name="pass" size="40" id="form-password">
           </div>
           <div style="clear:both"></div>
         </div>
            <?php if(isset($err)):?>
                <div id="err-message">
                  メールアドレスまたはパスワードが正しくありません
              </div>
              <?php endif; ?>
        </div>
        <div class="login-btn">
            <label for="login-sbt">ログイン</label><input type="submit"  style="display:none" id="login-sbt">
        </div>
      <?php echo form::close()?>
    </div>
    <div class="newmember">
        <?php echo Html::anchor('index.php/newmember','新規会員登録はこちら',array('class'=>'buttonlink'))?>
    </div>
    <div class="return-top">
        <?php echo Html::anchor('index.php/top','トップページへ戻る',array('class'=>'buttonlink'))?>
    </div>
</div>
