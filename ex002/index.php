<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>PHP</title>
</head>
<body>
    <main>
        <h1>Exemplo de PHP</h1>
        <?php
            date_default_timezone_set("America/Sao_Paulo");
            print "Hoje é dia " . date("d/M/Y");
            print " e a hora  atual é " . date("G:i:s T");
        ?>
    </main>
</body>
</html>