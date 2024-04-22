<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faixa Etária</title>
</head>
<body>

<div>
    <?php 
      $nome = $_GET["nome"];
      $idade = $_GET["idade"];
      $idadecrt = date('Y') - $idade; 

      if ($idadecrt <= 11 ) {
        echo "$nome é criança<br/>";
      }
        elseif ($idadecrt <=14) {
        echo "$nome é adolecente<br/>";
      }
        elseif ($idadecrt <=18){
        echo "$nome é jovem<br/>";
      }
        elseif ($idadecrt <= 64) {
        echo "$nome é adulto<br/>";
      }
        else {
        echo "$nome é idoso<br/>&#1F9D3";
      }
    ?>
    <a href="index.html"> <button>Retornar</button></a>
</div>
</body>
</html>