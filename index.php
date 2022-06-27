<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP Calculatrice</title>
</head>
<body>
    <?php 
        echo "<h1>Calculatrice simple en PHP</h1>
        <form action='#' method='POST'> 
            <br>Nombre 1: <input type= 'text' name ='num1'>
            <br>Nombre 2: <input type= 'text' name ='num2'>
            <br>
            <fieldset>
                <span>Sélectionner un opérateur</span>
                <br>Addition<input type='radio' name='operation' value='addi' checked>
                <br>Soustraction<input type='radio' name='operation' value='sous'>
                <br>Multiplication<input type='radio' name='operation' value='mult'>
                <br>Division<input type='radio' name='operation' value='divi'>
            </fieldset>
            <br><input type='submit' value='Calculer' name='submit'>
            <br><span name='spanText'>Merci de saisir une valeur numérique pour nombre 1 et nombre2</span>
        </form>
        ";
        
        if(isset($_POST['submit'])){
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $operation = $_POST['operation'];
            // echo $operation :OP : addi, sous, multi, divi attribute values;

            if ($_POST['operation'] == 'addi') {
                echo ($num1 + $num2);
            }else if ($_POST['operation'] == 'sous') {
                echo ($num1 - $num2);
            }else if ($_POST['operation'] == 'mult') {
                echo ($num1 * $num2);
            }else if ($_POST['operation'] == 'divi') {
                echo ($num1 / $num2);
            }
        }
    ?>
</body>
</html>