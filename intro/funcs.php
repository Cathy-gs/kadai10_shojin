<?php
//XSS対応（ echoする場所で使用！それ以外はNG ）
function h($str){
    return htmlspecialchars($str, ENT_QUOTES);
}

//DB接続関数：db_conn()
function db_conn(){
    try {

        // local接続は以下を利用する
         $db_name = "shojin";    //データベース名 ** localでは "shojin"を利用する
         $db_id   = "root";      //アカウント名 localhostは"root"
         $db_pw   = "root";          //パスワード：localhostは”root”。
         $db_host = "localhost"; //DBホスト -> sakuraの場合はここを変える localではlocalhostを利用する
         return new PDO('mysql:dbname='.$db_name.';charset=utf8;host='.$db_host, $db_id, $db_pw); //接続した情報を戻す（変数にリターンする）
     } catch (PDOException $e) {
         exit('DB Connection Error:'.$e->getMessage());
     }
 }



//SQLエラー関数：sql_error($stmt)
function sql_error($stmt){
    $error = $stmt->errorInfo();
    exit("SQLError:".$error[2]);
    }   



//リダイレクト関数: redirect($file_name)
function redirect($file_name){
    header("Location: ".$file_name);
    exit();
}





