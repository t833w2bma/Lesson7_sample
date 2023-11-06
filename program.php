<?php 
 session_start();
// いずれかがカラかトークンが一致しなければ送信しない
if( empty($_POST['userName']) 
 || empty($_POST['userEmail']) 
 || empty($_POST['message']) 
){
echo '<p>送信出来ませんでした｡戻って入力し直してください｡';	
exit;
}

  foreach($_POST as $key=>$value){
    $_SESSION['post'][$key] = htmlspecialchars($value) . "\n";
  }

?>
<style>dt{ float:left;width:6em}</style>
<h2>確認してください</h2>
<dl>
  <dt>お名前</dt>   <dd><?=$_SESSION['post']['userName']?></dd>
  <dt>Eメール</dt>  <dd><?=$_SESSION['post']['userEmail']?></dd>
  <dt>職業</dt>     <dd><?=$_SESSION['post']['job'] ?? '' ?></dd>
  <dt>Eメール</dt>  <dd><?=$_SESSION['post']['messageType'] ?? '' ?></dd>
  <dt>お問い合わせ種別</dt> <dd><?=$_SESSION['post']['message']?></dd>
</dl>

<button onclick='location.href="mailsend.php"'>この内容で送信</button>
