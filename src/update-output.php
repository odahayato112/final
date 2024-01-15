<html lang="ja">
	<head>
		<meta charset="UTF-8">
		<title>a</title>
        <link rel="stylesheet" href="./css/style.css"> 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.3/css/bulma.min.css">
	</head>
<?php
    const SERVER = 'mysql220.phy.lolipop.lan';
    const DBNAME = 'LAA1517445-final';
    const USER = 'LAA1517445';
    const PASS = 'haya0112';
    $connect = 'mysql:host='. SERVER . ';dbname='. DBNAME . ';charset=utf8';
?>
<h1>商品一覧</h1>
<?php
$pdo=new PDO($connect, USER, PASS);
$sql=$pdo->prepare('update cook set cook_mei=?,bunrui_id=?,season=? where cook_id=?');


if (empty($_POST['cook_mei'])){
    echo '料理名を入力してください。';
}else if(empty($_POST['bunrui_id'])){
    echo '分類IDを選択してください';
}else if(empty($_POST['season'])){
    echo '季節を入力してください';
}else if ($sql->execute([$_POST['cook_mei'],$_POST['bunrui_id'],$_POST['season'],$_POST['id']])){
    echo '更新に成功しました';
}else{
    echo '更新に失敗しました';
}
?>
<p>-------------------------------------------------------</p>
<a href="index.php">レストランレシピ画面へ戻る</a>
