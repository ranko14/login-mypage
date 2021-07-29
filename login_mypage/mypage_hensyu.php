<?php
mb_internal_encoding("utf8");
session_start();

if(empty($_POST['from_mypage'])){
  header("Location:login_error.php");
}

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>マイページ登録</title>
  <link rel="stylesheet" href="mypage_hensyu.css">
</head>
<body>
  <header>
    <img src="4eachblog_logo.jpg">
    <div class="logout"><a href="logout.php">ログアウト</a></div>  
  </header>
  <main>
    <form action="mypage_update.php" method="post">
      <h2>会員情報</h2>

      <div class="hello"> 
        <?php echo "こんにちは！".$_SESSION['name']."さん"; ?>
      </div>

      <div class="profile_pic">
        <img src="<?php echo $_SESSION['picture']; ?>">
      </div>

      <div class="basic_info">
        <p>氏名：<input type="text" value=<?php echo $_SESSION['name']; ?> class="formbox" size="40" name="name"></p>
        <p>メール：<input type="text" value=<?php echo $_SESSION['mail']; ?> class="formbox" size="40" name="mail"></p>
        <p>パスワード：<input type="text" value=<?php echo $_SESSION['password']; ?> class="formbox" size="40" name="password"></p>
      </div>

      <div class="comments">
        <textarea  rows="3" cols="82" name="comments"><?php echo $_SESSION['comments']; ?></textarea>
      </div>

      <div class="henkou">
        <input type="submit" class="btn" value="この内容に変更する">
      </div>
    </form>

  </main>
  <footer>©️ 2018 InterNous.inc. All right reserved</footer>
</body>
</html>