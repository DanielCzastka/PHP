<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>

<body>
    <h1>Dia e Horarios</h1>
    <?php
    // Variavel
    $nome = "Daniel";
    // Constante -> Não muda e não pode mudar
    const PAIS = "Brasil";

    echo "Muito praser, meu nome é $nome! Eu moro no" . PAIS . "." ;

    date_default_timezone_set("America/Sao_Paulo");
    echo " Hoje é dia " . date("d/M/Y");
    echo " e a hora atual é " . date("G:i:s");
    ?>
</body>

</html>