<?php
//1. POSTデータ取得
$name   = $_POST["name"];
$email  = $_POST["email"];
$inquiry_type = $_POST["inquiry_type"];
$naiyou    = $_POST["naiyou"];


//2. DB接続します
//*** function化する！  *****************
// 一つの処理をまとめてしまう
include("funcs.php"); // 外部ファイル読み込み
$pdo = db_conn();

//３．データ登録SQL作成
$stmt = $pdo->prepare("INSERT INTO inquiry(id,name,email,inquiry_type,naiyou,indate)VALUES(NULL,:name,:email,:inquiry_type,:naiyou,sysdate())");
$stmt->bindValue(':name',   $name,   PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':email',  $email,  PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':inquiry_type',    $inquiry_type,    PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':naiyou', $naiyou, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute(); //実行


//４．データ登録処理後
if($status==false){
    //*** function化する！*****************
        sql_error($stmt);
    }else{
        //*** function化する！*****************   
        redirect("inquiry_input.php");
}
?>
