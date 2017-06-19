<?php require 'common/header.php';?>
<?php require 'common/navbar.php';?>


<main>
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <fieldset>
                    <legend>新規会員登録</legend>
                    <p>赤（必須）で示されている項目は必須項目です。</p>
                    <form action="signup-output.php" method="post" class="error_check form-horizontal">
                        <div class="form-group">
                            <label for="name" class="control-label"><span class="required">お名前（※必須）</span>：（例：鈴木　一郎）</label>
                            <input type="text" id="name" name="name" class="form-control" value="" required aria-required="true" autofocus>
                        </div>
                        <div class="form-group">        
                            <label for="email" class="control-label"><span class="required">メールアドレス（※必須）</span>：（例：suzuki@xxx.com）</label>
                            <input type="email" id="email" name="email" class="form-control col-sm-6" value="" pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required aria-required="true">
                        </div>
                        <div class="form-group">        
                            <label for="password" class="control-labal"><span class="required">パスワード（※必須）</span>：（※半角英数字6文字以上）</label>
                            <input type="password" id="password" name="password" class="form-control password1" pattern="^([a-zA-Z0-9]{6,})$" required aria-required="true"> 
                            <span class="error"></span>
                        </div>
                        <div class="form-group">
                            <label for="password_confirmation" class="control-label"><span class="required">パスワード確認（※必須）</span>：</label>
                            <input type="password" id="password_confirmation" name="password_confirmation" class="form-control password2" required aria-required="true">
                            <span class="error"></span>
                        </div>
                        <div class="form-group">
                            <label for="postal_code" class="control-label"><span class="required">郵便番号（※必須）</span>：（※ハイフンあり可、半角数字７ケタ）</label>
                            <input type="text" id="postal_code" name="postal_code" class="form-control" pattern="\d{3}-?\d{4}" reqiured aria-requied="true"> 
                        </div>
                        <div class="form-group">
                            <label for="address" class="control-label"><span class="required">住所（※必須）</span>：（例：東京都新宿区西新宿x-x-x〇〇マンションxxx号室）</label>
                            <input type="text" id="address" name="address" class="form-control" required area-required="true">
                        </div>
                        <div class="form-group">
                            <label for="phone_number" class="control-label"><span class="required">電話番号（※必須）</span>：（例：03-1234-XXXX）</label>
                            <input type="tel" id="phone_number" name="phone_number" class="form-control" pattern="\d{2,4}-\d{3,4}-\d{3,4}" reqiured aria-reqiured="true">
                        </div>
                        
                        <button type="submit" id="submit" class="btn btn-success col-sm-4">登録</button>
                        <button type="reset" class="clear btn btn-warning col-sm-2 col-sm-offset-2">クリア</button>
                    
                    </form>
                </fieldset>
            </div>
        </div>
    </div>
</main>



<?php require 'common/footer.php';?>