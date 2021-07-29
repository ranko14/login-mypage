<?php
session_start();
if(isset($_SESSION['id'])){
  header("Location:mypage.php");
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>ログインエラー</title>
  <link rel="stylesheet" href="login.css">
</head>
<body>
<header>
    <img src="4eachblog_logo.jpg">
    <div class="login"><a href="login.php">ログイン</a></div>  
  </header>
  <main>
    <form method="post" action="mypage.php">
      <p>メールアドレスまたはパスワードが間違っています。</p>
      <div class="mail">
        <label>メールアドレス</label><br>
        <input type="text" class="formbox" size="40" name="mail" pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
      </div>
      <h2></h2>
      <div class="password">
        <label>パスワード</label><br>
        <input type="password" class="formbox" size="40" name="password" id="password" pattern="^[a-zA-Z0-9]{6,}$" required>
      </div>
    
      <div class="loginbtn">
        <input type="submit" class="button" size="35" value="ログイン"> 
      </div>
    </form>
  </main>

  <footer>©️ 2018 InterNous.inc. All right reserved</footer>
  
</body>
</html>