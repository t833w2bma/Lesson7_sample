<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="refresh" content="3;URL=./">
    </head>
    <body>
    <?php
        mb_language("Japanese");
        mb_internal_encoding("UTF-8");

        $email = "email_1@example.com , $_POST[email]";
        $title = 'お問い合わせ';
        $message = $_POST['message'];
        $headers = "From: from@example.com";

        if(mb_send_mail($email, $title, $message, $headers)){
            echo "メール送信成功です";
        }else{
            echo "メール送信失敗です";
        }
    ?>
    </body>
</html>