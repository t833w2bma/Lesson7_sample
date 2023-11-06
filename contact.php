<?php
 session_start();
	// トークン作成のための関数
  function token($length = 20){  	
    return substr(str_shuffle('1234567890QWERTYUIOPLKJHGFDSAZXCVBNMabcdefghijklmnopqrstuvwxyz'), 0, $length);
  }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>フォームのデザイン（CSS編）</title>
</head>
<body>

<h1>お問い合わせフォーム</h1>
<form action="program.php" method="post">
    <?php   $_SESSION['post']['token']=token();  ?>      
      <input type="hidden" name="token" value="<?=$_SESSION['post']['token']?>">
    <dl>
        <div class="form-item">
            <dt>お名前※</dt>
            <dd><input type="text" name="userName"></dd>
        </div>
        <div class="form-item">
            <dt>メールアドレス※</dt>
            <dd><input type="email" name="userEmail"></dd>
        </div>
        <div class="form-item">
            <dt>職業</dt>
            <dd>
                <label class="label-radio"><input type="radio" name="job" value="学生" checked>学生</label>
                <label class="label-radio"><input type="radio" name="job" value="会社員">会社員</label>
                <label class="label-radio"><input type="radio" name="job" value="その他">その他</label>
            </dd>
        </div>
        <div class="form-item">
            <dt>お問い合わせ種別</dt>
            <dd>
                <select name="messageType">
                    <option value="商品について" selected>商品について</option>
                    <option value="採用について">採用について</option>
                    <option value="その他お問い合わせ">その他お問い合わせ</option>
                </select>
            </dd>
        </div>
        <div class="form-item">
            <dt>お問い合わせ内容※</dt>
            <dd><textarea name="message"></textarea></dd>
        </div>
    </dl>
    <div class="form-submit">
        <input type="submit" value="送信する">
    </div>
</form>

</body>
</html>