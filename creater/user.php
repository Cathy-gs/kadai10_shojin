<?php
session_start();
//※htdocsと同じ階層に「includes」を作成してfuncs.phpを入れましょう！
//include "../../includes/funcs.php";
include ("../intro/funcs.php");
// sschk();
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>USERデータ登録</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
    <?php echo $_SESSION["name"]; ?>さん　
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<div class="admin">
    <div class="container px-2 text-left">        
        <div class=" create_user_form">
        <h1>Login</h1>
        <form method="POST" action="user_insert.php" name="form1">
        <fieldset>
        <div class="mb-3">
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Name" name="name">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="E-mail(ID)" name="lid">
            </div>
            <div class="mb-3">
                <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="Password" name="lpw">
            </div>
            <label>管理FLG：
                一般<input type="radio" name="kanri_flg" value="0">
                管理者<input type="radio" name="kanri_flg" value="1">
            </label>
            <button type="submit" class="btn btn-primary mb-3">Create</button>
            </fieldset>
        </form>
    </div>
</div>
<!-- Main[End] -->


</body>
</html>
