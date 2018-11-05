<?php
    if(isset($_POST['enviar'])):
        $a=$_POST['a'];
        $b=$_POST['b'];
        $c=$_POST['c'];
        $d=($b*$b)-(4*$a*$c);
        $x1=((-$b)+(sqrt($d)))/2*$a;
        $x2=((-$b)-(sqrt($d)))/2*$a;
        echo "O x linha é: $x1"; 
        echo "O x duas linhas é: $x2"; 
    endif;
?>

<html> 
    <head>
        <title> Equação </title>
    </head>
    <body>
        <h1> Ex 2 <br> Equação </h1>
        <form method="post" action="">
            <label> O Valor de a: </label> <br>
            <input name="a" type="text">
            <label> O Valor de b: </label> <br>
            <input name="b" type="text">
            <label> O Valor de c: </label> <br>
            <input name="c" type="text">
            <button type="submit" name="enviar"> Calcula </button>
            <button type="reset" name="apagar"> Limpa </button>
        </form>
    </body>
</html>