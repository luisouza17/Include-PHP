<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Resumo</title>
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
            echo readfile("txt/resumo1.txt");
        ?>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/4QRdB4RAQMs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <?php
            echo readfile("txt/resumo2.txt");
        ?>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/VIDmMoSeG30" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <div id="rodape">
        <?php
            require_once "php/rodape.php";
        ?>
    </div>
</body>
</html>