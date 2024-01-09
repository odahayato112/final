<?php
    const SERVER = 'mysql220.phy.lolipop.lan';
    const DBNAME = 'LAA1517445-final';
    const USER = 'LAA1517445';
    const PASS = 'haya0112';
    $connect = 'mysql:host='. SERVER . ';dbname='. DBNAME . ';charset=utf8';
?>
<?php
echo '<table>';
echo '<tr><th>料理ID</th><th>料理名</th><th>分類</th><th>旬の季節</th></tr>';
$pdo=new PDO($connect, USER, PASS);
$sql = $pdo->query('select * from cook');
foreach($sql as $row){
    $cook_id=$row['cook_id'];
    echo '<tr>';
    echo '<td>',$cook_id,'</td>';
    echo '<td>';
    echo $row['cook_mei'];
    echo '</td>';

    echo '<td>',$row['bunrui_mei'],'</td>';
    echo '<td>',$row['season'],'</td>';
    echo '</tr>';
}
echo '</table>';
?>