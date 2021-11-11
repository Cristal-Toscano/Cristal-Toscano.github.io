<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>IMC</title>
</head>
<body>
    <h1>CALCULADORA IMC</h1>

    <form action="index.php" method="POST">
        <label for="">Peso:</label>
        <input type="number" name="peso" id="peso"><br><br>
        <label for="">Altura:</label>
        <input type="float" name="altura" id="altura"><br><br>
        <input type="submit" value="Calcular"><br><br>
    </form>

    <?php
        $peso = $_POST['peso'];
        $altura = $_POST['altura'];
        $imc = $peso / ($altura * $altura);

        if($imc<18.5){
            $categoria = 'Bajo Peso';
            
        }else if($imc<=24.9){
            $categoria = 'Peso Normal';
            
        }else if($imc<=29.9){
            $categoria = 'Sobrepeso';
            
        }else if($imc<=34.9){
            $categoria = 'Obesidad';
            
        }else if($imc>35){
            $categoria = 'Obesidad Severa';
            
        }
        echo "PESO: $peso<br>";
        echo "ALTURA: $altura<br>";
        echo "IMC: $imc<br>";
        echo "CATEGORIA: $categoria<br>";
    ?>
</body>
</html>