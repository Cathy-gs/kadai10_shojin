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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
</head>

<body>
<header>

</header>



<div class="admin">
    <div class="container px-2 text-left">        
        <div class="">
        <h1>アカウントを作成する</h1>
        <form method="POST" action="creator_insert.php" name="form1">
        <fieldset>
            <div class="mb-3">
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="お名前" name="cname">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="ニックネーム" name="nname">
            </div>
            <div class="mb-3">
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="メールアドレス" name="email">
            </div>
            <div class="mb-3">
                <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="パスワード" name="cpw">
            </div>
            <div class="form-check">
                <p>クリエイター種別</p>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="creator_flag" value="0">
                    <label class="form-check-label" for="inlineCheckbox1">野菜の生産者</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="creator_flag" value="1">
                    <label class="form-check-label" for="inlineCheckbox2">加工品の生産者</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="creator_flag" value="2">
                    <label class="form-check-label" for="inlineCheckbox3">料理人</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="creator_flag" value="3">
                    <label class="form-check-label" for="inlineCheckbox3">宿泊先</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="creator_flag" value="4">
                    <label class="form-check-label" for="inlineCheckbox3">観光業</label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary mb-3">登録</button>
            </fieldset>
        </form>
        <a href="creator_login.php">アカウントをお持ちの方はこちら</a>
    </div>
</div>

<footer>
    <?php include("common/footer.php");?>
</footer>

</body>