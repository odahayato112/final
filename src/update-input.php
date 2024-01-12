<?php
    const SERVER = 'mysql220.phy.lolipop.lan';
    const DBNAME = 'LAA1517445-final';
    const USER = 'LAA1517445';
    const PASS = 'haya0112';
    $connect = 'mysql:host='. SERVER . ';dbname='. DBNAME . ';charset=utf8';
?>
<h1>商品一覧</h1>
<?php
echo '<table border="1">';
echo '<tr><th>料理ID</th><th>料理名</th><th>分類ID</th><th>旬の季節</th><th></th></tr>';
$pdo=new PDO($connect, USER, PASS);

$query1 = 'SELECT * FROM cook';
$query2 = 'SELECT * FROM bunrui';

foreach($pdo->query('select * from cook where cook_id') as $row){
    echo'<form action="update-output.php" method="post">';
    echo '<tr>';
    echo '<td>',$row['cook_id'],'</td>';
    echo '<td>';
    echo '<input type="text" name="cook_mei" value="',$row['cook_mei'],'">';
    echo '</td>';
    echo '<td>';
    echo '<input type="text" name="bunrui_id" value="',$row['bunrui_id'],'">';
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
<p>-------------------------------------------------------</p>
<a href="index.php">レストランレシピ画面へ戻る</a>
