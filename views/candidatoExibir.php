<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabalhe Conosco</title>
    <link rel="stylesheet" href="../../content/style/style.css" type="text/css">
</head>

<body>
    <div class="tabTitulo">
        <h1 >Trabalhe Conosco</h1>
    </div>    
    <div class="tabGeral">
        <p>Nome: <?php echo $candidato[0]['nome'] ?></p> 
        <p>Endereço:<?php echo $candidato[0]['endereco'] ?></p> 
        <p>Cidade:<?php echo $candidato[0]['cidade'] ?></p> 
        <p>Estado:<?php echo $candidato[0]['estado'] ?></p> 
        <p>Ocupação Atual:<?php echo $candidato[0]['ocupacao'] ?></p> 
        <p>Cargo Pretendido:<?php echo $candidato[0]['cargo'] ?></p> 
        <p>Mini Curriculo:<?php echo $candidato[0]['curriculo'] ?></p> &nbsp;
        <p><a href='index.php'>Clique aqui para voltar.</a></p>    
    
    </div>


</body>

</html>