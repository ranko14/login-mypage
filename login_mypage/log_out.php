<?php

session_start();
session_destroy();  //全てのセッションを削除（無効化）

header("Location:login.php");

?>
