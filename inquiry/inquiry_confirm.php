<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shojin TOP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
</head>

<body>
<header>
   <?php
// includes/config/database.php を読み込む
include __DIR__ . '/common/header.php';
echo 'tetete';
?>
</header>

<div class="jumbotron">
    <div class="inquiry-header">  
        <img src="img/inquiry_head.png" class="img-fluid" alt="お問い合わせ">
        <p class="text-center"> お問い合わせいただきありがとうございます<br>
        内容を確認の上、順次回答させていただきます<br>
        今しばらくお待ちください</p>
    </div>
    
    <div class="inquiry_input_form">
    
        <fieldset>
        <div class="container px-2 text-center">    
        <div class="mb-3">
        <p>お名前 <?php echo $name; ?></p>
        <p>メールアドレス <?php echo $email; ?></p>
        <p>お問い合わせ種別 <?php echo $inquiry_type; ?></p>
        <p>お問い合わせ内容 <?php echo $naiyou; ?></p>
        </div>
        </fieldset>
        </div>
        <form method="POST" action="inquiry_insert.php">
            <input type="hidden" name="name" value="<?php echo $_POST["name"] ?>">
            <input type="hidden" name="email" value="<?php echo $_POST["email"] ?>">
            <input type="hidden" name="inquiry_type" value="<?php echo $_POST["inquiry_type"] ?>">
            <input type="hidden" name="naiyou" value="<?php echo $_POST["naiyou"] ?>">
            <button type="button" class="btn btn-primary mb-3" onclick="history.back(-1)">戻る</button>
            <button type="submit" class="btn btn-primary mb-3">送信</button>
        </form>
    </div>
</div>

<footer>
    <?php include("common/footer.php");?>
</footer>

</body>
