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

</header>



<div class="admin">
    <div class="container px-2 text-left">        
        <div class="intro_input_form">
        <h1>intro</h1>
        <form method="POST" action="intro_insert.php">
        <fieldset>
            <div class="mb-3">
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="タイトル" name="title">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="概要" name="overview">
            </div>
            <div class="mb-3">
                <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="詳細" rows="3" name="ditail"></textarea>
            </div>
            <div class="mb-3">
                <input class="form-control" type="file" id="formFileDisabled" disabled>
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="タグ１" name="tag1">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="タグ２" name="tag2">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="タグ３" name="tag3">
            </div>
            <button type="submit" class="btn btn-primary mb-3">登録</button>
            </fieldset>
        </form>
    </div>
</div>

<footer>
    <?php include("common/footer.php");?>
</footer>

</body>
