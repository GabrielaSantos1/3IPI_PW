<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php 
             echo "Functions"; 
        
        ?>
    </title>
</head>
<body>
    
    <?php
       
        // Adição

        $num1 = 6;
        $num2 = 5;

        function soma($num1, $num2){

        $soma = $num1 + $num2;}

        soma($num1, $num2);

        // Subtração

        function subtracao($num1, $num2){

        $subtracao = $num1 - $num2;}
    
        subtracao($num1, $num2);

        // Multiplicação

        function Multiplicacao($num1, $num2){

        $Multiplicacao = $num1 * $num2;}
    
        Multiplicacao($num1, $num2);

        // Divisão

        function Divisao($num1, $num2){

        $Divisao = $num1 / $num2;}
    
        
    
        Divisao($num1, $num2);

        // Return

        function somaR($num1, $num2){
                return $num1 + $num2;
        }

        function subR($num1, $num2){
            return $num1 - $num2;
        }

        function multR($num1, $num2){
            return $num1 * $num2;
        }
        
        function divR($num1, $num2){
            return $num1 / $num2;
        }
        
        
        echo "<br><h2>Retorno Soma</h2>";

        $soma = somaR(6,5);
        echo "A soma de $num1 + $num2 é $soma.";


        echo "<br><br><br><h2>Retorno Subtração</h2>";
        $subtracao = subR(6,5);
        echo "A subtração de $num1 - $num2 é $subtracao.";


        echo "<br><br><br><h2>Retorno Multiplicação</h2>";
        $Multiplicacao = multR(6,5);
        echo "A multiplicação de $num1 vezes $num2 é $Multiplicacao.";

        
        echo "<br><br><br><h2>Retorno Divisão</h2>";
        $Divisao = divR(6,5);
        echo "A divisão de $num1 dividido por $num2 é $Divisao.";



    ?>

</body>
</html>