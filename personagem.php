<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Personagem</title>
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
    <script src="main.js"></script>
</head>
<body>
    <div id="menu">
        <?php
            require_once "php/menu.php";
        ?>
    </div>
    <div id="conteudo">
        <?php
            echo readfile("txt/personagem.txt");
        ?>
    </div>
    <div id="conteudo">
        <?php
            echo readfile("txt/personagem2.txt");
        ?>
    </div>
    <div id="rodape">
        <?php
            require_once "php/rodape.php";
        ?>
    </div>
</body>
</html>