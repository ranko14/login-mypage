<?php

mb_internal_encoding("utf8");

//仮保存されたファイル名で画像ファイルを取得
//（サーバーで仮アップロードされたディレクトリとファイル名）
$temp_pic_name = $_FILES['picture']['tmp_name'];//一時的なファイル名

//元のファイル名で画像ファイルを取得。事前に画像を格納する「image」という名前のフォルダを作成しておく必要あり
$original_pic_name = $_FILES['picture']['name'];//本来のファイル名
$path_filename = './image/'.$original_pic_name;

//仮保存のファイル名を、imageフォルダに、元のファイル名で移動させる
move_uploaded_file($temp_pic_name,$path_filename);


?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>マイページ登録</title>
  <link rel="stylesheet" href="register_confirm.css">
</head>
<header>
  <img src="4eachblog_logo.jpg"> 
</header>
<body>
  <main>
    <div class="confirm">
      <h2>会員登録 確認</h2>
      <p class="toroku">こちらの内容で登録しても宜しいでしょうか？</p>
      <p>氏名：<?php echo $_POST['name']; ?></p>
      <p>メール：<?php echo $_POST['mail']; ?></p>
      <p>パスワード：<?php echo $_POST['password']; ?></p>
      <p>プロフィール写真：<?php echo $path_filename; ?></p>
      <p>コメント：<?php echo $_POST['comments']; ?></p>
      
      <div class="button">
        <form action="register.php">
          <input type="submit" class="btn1" value="戻って修正する">
        </form>
        
        <form action="register_insert.php" method="post">
          <input type="submit" class="btn2" value="登録する"/>
          <input type="hidden" value="<?php echo $_POST['name']; ?>" name="name">
          <input type="hidden" value="<?php echo $_POST['mail']; ?>" name="mail">
          <input type="hidden" value="<?php echo $_POST['password']; ?>" name="password">
          <input type="hidden" value="<?php echo $path_filename; ?>" name="path_filename">
          <input type="hidden" value="<?php echo $_POST['comments']; ?>" name="comments">
        </form>
      </div>
   
    </div>
  </main>
  <footer>©️ 2018 InterNous.inc. All right reserved</footer>
</body>
</html>