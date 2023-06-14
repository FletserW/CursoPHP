<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Exercicio 5</title>
</head>
<body>
    <header><h1>Exercicio 005</h1></header>
</body>
    <main>
        <h1>Resultado final</h1>
        <p>
            <?php
                $num = $_GET["num"] ?? 0;
                print "O número escolhido foi $num<br>";
                print "O seu antecessor é " .$num -1 ;
                print "<br>O seu sucessor é ".$num +1;
            ?>
        </p>
        <button><a href="javascript:history.go(-1)">Voltar</a></button>
    </main>

</html>