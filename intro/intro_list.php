<?php
//【重要】
//insert.phpを修正（関数化）してからselect.phpを開く！！
include("funcs.php");
$pdo = db_conn();

//２．データ登録SQL作成
$sql = "SELECT * FROM intro";
$stmt = $pdo->prepare($sql);
$status = $stmt->execute();

//３．データ表示
$values = "";
if($status==false) {
  sql_error($stmt);
}

//全データ取得
$values =  $stmt->fetchAll(PDO::FETCH_ASSOC); //PDO::FETCH_ASSOC[カラム名のみで取得できるモード]
$json = json_encode($values,JSON_UNESCAPED_UNICODE);

?> 

<body id="main">
<div>
    <div class="container jumbotron">

      <table>
      <?php foreach($values as $v){ ?>
        <tr>
        <!-- // h(hoge)は、危ない文字が入っていたら無効にする（文字にする）関数。実行されずに無効化される（表示される場所を置き換える）タグとかスクリプトを入れることができてしまうので、セキュリティ的に良くない -->
          <td><?=h($v["id"])?></td> 
          <td><?=h($v["title"])?></td>
          <td><?=h($v["overview"])?></td>
          <td><?=h($v["ditail"])?></td>
          <td><?=h($v["tag1"])?></td>
          <td><?=h($v["tag2"])?></td>
          <td><?=h($v["tag3"])?></td>
          <td><?=h($v["indate"])?></td>
          <td><a href="intro_detail.php?id=<?=h($v["id"])?>">更新</a></td>
          <td><a href="delete.php?id=<?=h($v["id"])?>">削除</a></td>
        </tr>
      <?php } ?>
      </table>

  </div>
</div>
</body>