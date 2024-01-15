<?php
    const SERVER = 'mysql220.phy.lolipop.lan';
    const DBNAME = 'LAA1517445-final';
    const USER = 'LAA1517445';
    const PASS = 'haya0112';
    $connect = 'mysql:host='. SERVER . ';dbname='. DBNAME . ';charset=utf8';
?>

<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="UTF-8">
		<title>a</title>
        <link rel="stylesheet" href="./css/style.css"> 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.3/css/bulma.min.css">
	</head>
	<body>
<?php
    $pdo=new PDO($connect, USER, PASS);
    $sql=$pdo->prepare('insert into bunrui values(null,?)');
    if (empty($_POST['bunrui_mei'])){
        echo '商品名を入力してください。';
    }else if ($sql->execute([$_POST['bunrui_mei']])){
        echo '追加に成功しました';
    }else{
        echo '追加に失敗しました';
    }
   
?>
<p>-------------------------------------------------------</p>
<a href="index.php">レストランレシピ画面へ戻る</a>
    </body>
</html>