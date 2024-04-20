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



<div class="admin">
    <div class="container px-2 text-left">        
        <div class="login_form">
        <h1>Login</h1>
        <form method="POST" action="login_act.php" name="form1">
        <fieldset>
            <div class="mb-3">
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="E-mail(ID)" name="lid">
            </div>
            <div class="mb-3">
                <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="Password" name="lpw">
        </div>
            <button type="submit" class="btn btn-primary mb-3">Login</button>
            </fieldset>
        </form>
    </div>
</div>

<footer>
    <?php include("common/footer.php");?>
</footer>

</body>