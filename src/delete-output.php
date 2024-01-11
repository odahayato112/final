<?php
    const SERVER = 'mysql220.phy.lolipop.lan';
    const DBNAME = 'LAA1517445-final';
    const USER = 'LAA1517445';
    const PASS = 'haya0112';
    $connect = 'mysql:host='. SERVER . ';dbname='. DBNAME . ';charset=utf8';
?>

<?php
$pdo=new PDO($connect, USER, PASS);

$sql=$pdo->prepare('delete from cook where cook_id=?');
if($sql->execute([$_GET['cook_id']])){
    echo '削除に成功しました。';
}else{
    echo '削除に失敗しました。';
}
?>
<p>-------------------------------------------------------</p>
<a href="index.php">レストランレシピ画面へ戻る</a>
