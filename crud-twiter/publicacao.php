<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publicaçoes</title>

    <?php
include_once './conexao2.php';
?>
    <?php

$file = isset($_POST['file'])?($_POST['file']): "";
$texto = isset($_POST['texto'])?($_POST['texto']): "";
$data = isset($_POST['data'])?($_POST['data']): 0;
$hashtags = isset($_POST['h'])?($_POST['h']): 0;


?>
</head>
<body>
    
<form action="" method="post">



Digite texto Maximo de 140 Caracteres: <input type="text" name="texto" id="texto"> <br>
Selecione 1 arquivo:<input type="file" name="file" id="file"><br>
Selecione a Data da Publicaçao:<input type="datetime-local" name="data" id="data"> <br>
Hashtags(Opcional)#: <input type="text" name="h" id="h" value="" > <br>


<br>
 <input type="submit" value="Publicar/Salvar">
<br><br>
</form>

<form action="" method="get">
Curtidas: <input type="checkbox" name="" id="">
Comentarios:
respostagens:
Seguindo:
Seguidores:
</form>


<?php
echo $file ;
echo "<br>";
echo $texto;
echo "<br>";
echo $data;
echo "<br>";

/*
function hashtags(){
    echo $hashtags . " <p style='color: #0000A0;'></p>" ;
}
*/


?>

<br><br>
<br><br>
<br><br>
<a href="cadastrar.php">Voltar para o login/cadrastro</a>
</body>
</html>