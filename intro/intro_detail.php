<?php
$id = $_GET["id"];

//【重要】
//insert.phpを修正（関数化）してからselect.phpを開く！！
include("funcs.php");
$pdo = db_conn();

//２．データ登録SQL作成
$sql = "SELECT * FROM intro WHERE id=:id";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();

//３．データ表示
$values = "";
if($status==false) {
  sql_error($stmt);
}

//全データ取得
$v =  $stmt->fetch(); 
$json = json_encode($values,JSON_UNESCAPED_UNICODE);

?> 

<body>
    

<div class="admin">
    <div class="container px-2 text-left">        
        <div class="intro_input_form">
        <h1>intro_list</h1>
        <form method="POST" action="intro_update.php">
        <fieldset>
            <div class="mb-3">
                <input type="text" class="form-control" id="exampleFormControlInput1"  name="title" value="<?=$v["title"]?>">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" id="exampleFormControlInput1"  name="overview" value="<?=$v["overview"]?>">
            </div>
            <div class="mb-3">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="ditail" value="<?=$v["ditail"]?>"></textarea>
            </div>
            <div class="mb-3">
                <input class="form-control" type="file" id="formFileDisabled" disabled>
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" id="exampleFormControlInput1"  name="tag1" value="<?=$v["tag1"]?>">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" id="exampleFormControlInput1"  name="tag2" value="<?=$v["tag2"]?>">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" id="exampleFormControlInput1"  name="tag3" value="<?=$v["tag3"]?>">
            </div>
            <input type="hidden" name= "id" value="<?=$v["id"]?>">
            <button type="submit" class="btn btn-primary mb-3">更新</button>
            </fieldset>
        </form>
        </div>
    </div>
</div>


</body>