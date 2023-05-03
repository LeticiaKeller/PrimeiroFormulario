<!DOCTYPE html>
<html lang="en">
<head>
<?php
     $cortxt = isset($_GET["cor"])?$_GET["cor"]:"0";
     $tam = isset($_GET["tamanho"])?$_GET["tamanho"]:"0";
     ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cadastro.css">
    <title>Formulário</title>
    <style>
        span.texto{
            font-size: <?php echo $tam; ?>;
            color: <?php echo $cortxt; ?>;
        }
        span.texto1{
            font-size: <?php echo $tam; ?>;
            color: <?php echo $cortxt; ?>;
        }
        span.texto2{
            font-size: <?php echo $tam; ?>;
            color: <?php echo $cortxt; ?>;
        }
        span.texto3{
            font-size: <?php echo $tam; ?>;
            color: <?php echo $cortxt; ?>;
        }
        span.texto4{
            font-size: <?php echo $tam; ?>;
            color: <?php echo $cortxt; ?>;
        }
    </style>
</head>
<body>
    <div class="c">
   <?php
        $nome = ($_GET["nome"])?$_GET["nome"]:"Não informado";
        $sobrenome = ($_GET["sobrenome"])?$_GET["sobrenome"]:"não informado";
        $idade = ($_GET["idade"])? $_GET["idade"]:"0";
        $sexo = $_GET["sex"];
        $dia = ($_GET["diaprova"])? $_GET["diaprova"]:"0";
        $data = ($_GET["Dataprova"])? $_GET["Dataprova"]:"nenhum";
        $horario = ($_GET["Horario"])? $_GET["Horario"]:"0";
        $m = ($_GET["Media"])?$_GET["Media"]:"0";
        $V = ($_GET["Valor"])?$_GET["Valor"]:"0";
        $rq = sqrt($V);
   echo "<span class='texto'></br>$nome $sobrenome cadastro feito com sucesso!</span>";
   echo "<span class='texto1'></br>Você tem: $idade anos de idade e é $sexo.</span>";
   echo "<span class='texto2'></br>Sua prova esta marcada para: $dia às $horario hrs.</span>";
   echo "<span class='texto3'></br>Sua média é: $m</span>";
   echo "<span class='texto4'></br>A raiz quadrada de $V é: $rq </span>";
   ?> 
   <a href="index.html"><button>Voltar</button></a>
   </div>
</body>
</html>