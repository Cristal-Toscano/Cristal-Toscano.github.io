<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMC PHP</title>
</head>
<body>
    <h1>CALCULAR EL IMC</h1>

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
        $imc = $peso / ($altura*$altura);

        if($imc<18.5){
            $categoria = 'bajo peso';
            
        }else if($imc<=24.9){
            $categoria = 'peso normal';
            
        }else if($imc<=29.9){
            $categoria = 'sobrepeso';
            
        }else if($imc<=34.9){
            $categoria = 'obesidad';
            
        }else if($imc>35){
            $categoria = 'obesidad severa';
            
        }

        echo "*Peso*: $peso<br>";
        echo "*Altura*: $altura<br>";
        echo "*IMC*: $imc<br>";
        echo "*Categoria/nivel*: $categoria<br>";
    ?>

</body>
</html>