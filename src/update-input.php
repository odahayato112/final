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
<div class="table1">
<?php
echo '<table border="1">';
echo '<tr><th>料理ID</th><th>料理名</th><th>分類ID</th><th>旬の季節</th><th></th></tr>';
$pdo=new PDO($connect, USER, PASS);

$query1 = 'SELECT * FROM cook';
$query2 = 'SELECT * FROM bunrui';

foreach($pdo->query('select * from cook, bunrui where cook.bunrui_id = bunrui.bunrui_id') as $row){
    echo'<form action="update-output.php" method="post">';
    echo '<tr>';
    echo'<input type="hidden" name="id" value="',$row['cook_id'],'">';
    echo '<td>',$row['cook_id'],'</td>';
    echo '<td>';
    echo '<input type="text" name="cook_mei" value="',$row['cook_mei'],'">';
    echo '</td>';
    echo '<td>';
    echo '<select name="bunrui_id">';
    foreach($pdo->query('select * from bunrui')as $bunruiRow){
        if($row['bunrui_id'] == $bunruiRow['bunrui_id']){
        echo '<option value="',$bunruiRow['bunrui_id'],'"selected>',$bunruiRow['bunrui_mei'],'</option>';
        }else{
    echo '<option value="',$bunruiRow['bunrui_id'],'">',$bunruiRow['bunrui_mei'],'</option>';
    }
}
    echo '</select>';
    echo '</td>';
    echo '<td>';
    echo '<input type="text" name="season" value="',$row['season'],'">';
    echo '</td>';
    echo '<td>';
    echo '<button type="submit">更新</a>';
    echo '</td>';
    echo '</tr>';
    echo '</form>';
}
echo '</table>';
?>
</div>
<p>-------------------------------------------------------</p>
<a href="index.php">レストランレシピ画面へ戻る</a>
