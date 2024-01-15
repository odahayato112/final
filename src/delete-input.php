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
<div class="table2">
<?php
echo '<table border="1">';
echo '<tr><th>料理ID</th><th>料理名</th><th>分類</th><th>旬の季節</th><th></th></tr>';
$pdo=new PDO($connect, USER, PASS);

$query1 = 'SELECT * FROM cook';
$query2 = 'SELECT * FROM bunrui';

foreach($pdo->query('select * from cook, bunrui where cook.bunrui_id = bunrui.bunrui_id') as $row){
    echo '<tr>';
    echo '<td>',$row['cook_id'],'</td>';
    echo '<td>';
    echo $row['cook_mei'];
    echo '</td>';
    echo '<td>',$row['bunrui_mei'],'</td>';
    echo '<td>',$row['season'],'</td>';
    echo '<td>';
    echo '<a href="delete-output.php?cook_id=',$row['cook_id'],'">削除</a>';
    echo '</td>';
    echo '</tr>';
}
echo '</table>';
?>
</div>
<p>-------------------------------------------------------</p>
<a href="index.php">レストランレシピ画面へ戻る</a>
