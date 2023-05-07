<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">

</head>
<body>
  <header>
    <h1>Caregamento Processando...</h1>
  </header>
  
    <main>
        <?php 
        // var_dump($_REQUEST); Isso imprime um objeto 

        $nome= $_GET["nome"] ?? "Sem Nome"; 
        // coloca  o nome na variavel nome apenas 

        $sobrenome = $_GET["sobrenome"] ?? "Sem Sobrenome";
        // coloca  o sobrenome na variavel sobrenome apenas 
        
        echo "<p> É um prazer te conhecer, <strong>$nome $sobrenome</strong>."
        ?>

        <p>
          <a href="javascript:history.go(-1)">Voltar para a página anterior.</a>
        </p>
    </main>

</body>
</html>