<?php
//$_SESSION使うよ！
session_start();

//※htdocsと同じ階層に「includes」を作成してfuncs.phpを入れましょう！
//include "../../includes/funcs.php";
include ("../intro/funcs.php");
// sschk();

//1. POSTデータ取得
$cname       = filter_input( INPUT_POST, "cname" );
// $nname       = filter_input( INPUT_POST, "nname" );
$email       = filter_input( INPUT_POST, "email" );
$cpw         = filter_input( INPUT_POST, "cpw" );
$creator_flag   = filter_input( INPUT_POST, "creator_flag" );
$cpw         = password_hash($cpw, PASSWORD_DEFAULT);   //パスワードハッシュ化

//2. DB接続します
$pdo = db_conn();

//３．データ登録SQL作成
$sql = "INSERT INTO creator_table(cname,nname,email,cpw,creator_flag,life_flag)VALUES(:cname,:nname,:email,:cpw,:creator_flag,0)";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':cname', $cname, PDO::PARAM_STR); //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':nname', null, PDO::PARAM_STR); //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':email', $email, PDO::PARAM_STR); //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':cpw', $cpw, PDO::PARAM_STR); //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':creator_flag', $creator_flag, PDO::PARAM_INT); //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute();

//４．データ登録処理後
if ($status == false) {
    sql_error($stmt);

} else {
    redirect("creator_login.php");
}
?>
