<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css"> 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.3/css/bulma.min.css">
    <title>レストランレシピ</title>
    <style>
body {
	background-image: url(./img/1.png);
	}
</style>
</head>
<body>
    	
    <h1 class="title is-2">レストランレシピ</h1>
    <div style="display:inline-flex">
<form action="itiran.php" method="post"><button type="submit" class="centered_button button is-dark is-outlined is-rounded">一覧 <i class= "fas fa-ellipsis-h"></i></button>　</form>
<form action="toroku-input.php" method="post"><button type="submit" class="centered_button button is-success is-outlined is-rounded">登録 <i class= "far fa-check-circle"></i></button>　</form>
<form action="update-input.php" method="post"><button class="centered_button button is-info is-outlined is-rounded">更新 <i class= "far fa-hand-point-right"></i></button>　</form>
<form action="delete-input.php" method="post">    <button class="centered_button button is-danger is-outlined is-rounded">削除 <i class= "	fas fa-arrow-alt-circle-right"></i></button>
　</form>
</div>
</body>