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
    <form method="POST" action="inquiry_confirm.php">
        <fieldset>
        <div class="container px-2 text-center">    
        <div class="mb-3">
                <input class="form-control" type="text" placeholder="お名前" aria-label="default input example" name="name">
            </div>
            <div class="mb-3">
                 <input class="form-control" type="text" placeholder="メールアドレス" aria-label="default input example" name="email">
            </div>
            <div class="mb-3">
                <select class="form-select" aria-label="Default select example" name="inquiry_type" >
                    <option selected>お問い合わせ内容を選択してください</option>
                    <option value="ご予約や提供している情報について（一般のお客様">ご予約や提供している情報について（一般のお客様）</option>
                    <option value="情報の掲載について（寺院・宿坊等の事業者様）">情報の掲載について（寺院・宿坊等の事業者様）</option>
                    <option value="取材・タイアップについて（メディアの方）">取材・タイアップについて（メディアの方）</option>
                    <option value="その他（上記以外の方）">その他（上記以外の方）</option>
                </select>
            </div>
            <div class="mb-3">
                <textArea  class="form-control" name="naiyou" id="exampleFormControlTextarea1" rows="3" placeholder="お問い合わせ内容"></textArea>
            </div>
            <button type="submit" class="btn btn-primary mb-3">入力内容を確認</button>
        </fieldset>
</div>
    </form>
    </div>
</div>

<footer>
    <?php include("common/footer.php");?>
</footer>

</body>
