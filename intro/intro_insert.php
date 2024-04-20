<?php
//1. POSTデータ取得
$title      = $_POST["title"];
$overview   = $_POST["overview"];
$ditail     = $_POST["ditail"];
$tag1       = $_POST["tag1"];
$tag2       = $_POST["tag2"];
$tag3       = $_POST["tag3"];


//2. DB接続します
//*** function化する！  *****************
// 一つの処理をまとめてしまう
include("funcs.php"); // 外部ファイル読み込み
$pdo = db_conn();

//３．データ登録SQL作成
$stmt = $pdo->prepare("INSERT INTO intro(title,overview,ditail,tag1,tag2,tag3,indate)VALUES(:title,:overview,:ditail,:tag1,:tag2,:tag3,sysdate())");
$stmt->bindValue(':title',   $title,   PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':overview',  $overview,  PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':ditail',    $ditail,    PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':tag1', $tag1, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':tag2', $tag2, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':tag3', $tag3, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute(); //実行


//４．データ登録処理後
if($status==false){
    //*** function化する！*****************
        sql_error($stmt);
    }else{
        //*** function化する！*****************   
        redirect("intro_input.php");
}
?>
