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
<h1>商品登録</h1>
<form action="toroku-output.php" method="post">
        商品名　<input type="text" name="cook_mei"><br>
        
        <!--分類　<select name='bunrui_id'>
            <option value='2'>和食</option>
            <option value='1'>洋食</option>
            </select>
        -->
        <?php
        $pdo=new PDO($connect, USER, PASS);

        echo'分類';
        echo '<select name="bunrui_id">';
        foreach($pdo->query('select * from bunrui')as $row){
            echo '<option value="',$row['bunrui_id'],'">',$row['bunrui_mei'],'</option>';
        }
        echo '</select>';
        ?>
            <br>
        旬の季節　<input type="text" name="season"><br>
        
        <button type="submit">追加</button>
</form>
<form action="bunrui-output.php" method="post">
        <p>-------------------------------------------------------</p>
        <h1>分類追加</h1>
        分類名　<input type="text" name="bunrui_mei"><br>
        <button type="submit">追加</button>
        <p>-------------------------------------------------------</p>
        <a href="index.php">レストランレシピ画面へ戻る</a>


</form>
