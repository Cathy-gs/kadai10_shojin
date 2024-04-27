<?php
$form = [
    'name' => '',
    'lid' => '',
    'lpw' => ''
];
$error = [];

// htmlspecialcharsを短く書く
function h($value){
    return htmlspecialchars($value, ENT_QUOTES);
}


// フォームの内容をチェックする
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $form['name'] = filter_input(INPUT_POST,'name', FILTER_SANITIZE_STRING);
    if ($form['name'] === '') {
        $error['name'] = 'blank';
    }
    $form['lid'] = filter_input(INPUT_POST,'lid', FILTER_SANITIZE_EMAIL);
    if ($form['lid'] === '') {
        $error['lid'] = 'blank';
    }
    $form['lpw'] = filter_input(INPUT_POST,'lpw', FILTER_SANITIZE_STRING);
    if ($form['lpw'] === '') {
        $error['lpw'] = 'blank';
    } else if (strlen($form['lpw']) < 4) {
        $error['lpw'] = 'length';
    }
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
</head>

<body>
<header>

</header>

<!-- Main[Start] -->
<div class="admin">
    <div class="container px-2 text-left">        
        <div class=" create_user_form">
        <h1>Login</h1>
        <form method="POST" action="" name="form1" enctype="multipart/form-data">
        <fieldset>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingName" name="name" placeholder="Your Name" value = "<?php echo h($form['name']); ?>">
                <label for="floatingName">お名前</label>
                <?php if (isset($error['name']) && $error['name'] === 'blank'): ?>
                    <div class="error">
                        お名前を入力してください
                    </div>
                <?php endif; ?>

            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingEmail" placeholder="E-mail(ID)" name="lid" value = "<?php echo h($form['lid']); ?>">
                <label for="floatingEmail">メールアドレス</label>
                <?php if (isset($error['lid']) && $error['lid'] === 'blank'): ?>
                    <div class="error">
                        メールアドレスを入力してください
                    </div>
                <?php endif; ?>
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="floatingPass" placeholder="Password" name="lpw" value = "<?php echo h($form['lpw']); ?>">
                <label for="floatingPass">パスワード</label>
                <?php if (isset($error['lpw']) && $error['lpw'] === 'blank'): ?>
                    <div class="error">
                        パスワードを入力してください
                    </div>
                <?php endif; ?>

                <?php if (isset($error['lpw']) && $error['lpw'] === 'length'): ?>
                    <div class="error">
                        パスワードは4文字以上で入力してください
                    </div>
                <?php endif; ?>
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label"></label>
                <input class="form-control" type="file" id="formFile">
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
