<?php
    const SERVER = 'mysql220.phy.lolipop.lan';
    const DBNAME = 'LAA1517445-final';
    const USER = 'LAA1517445';
    const PASS = 'haya0112';
    $connect = 'mysql:host='. SERVER . ';dbname='. DBNAME . ';charset=utf8';
?>
<h1>商品登録</h1>
<a href="index.php">レストランレシピ画面へ戻る</a>
<p>-------------------------------------------------------</p>
<form action="toroku-output.php" method="post">
        商品名　<input type="text" name="name"><br>
        
        分類　<select name='bunrui'>
            <option value='wa'>和食</option>
            <option value='you'>洋食</option>
            </select><br>
        旬の季節　<input type="text" name="kisetu"><br>
        
        <button type="submit">追加</button>
</form>
