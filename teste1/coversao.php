<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversão dólar pra real</title>
</head>
<body>

<div>
    <?php 
        $din = $_GET["din"];
        $dol = 5.20;
        $conv = number_format($din /  $dol,2,",",".");
        
        echo "Valor: R$".number_format($din,2,",","."). "<br/> Conversão: UU$$conv ";
    ?>
    <button><a href="index.html">Retornar</a></button>
</div>

</body>
</html>