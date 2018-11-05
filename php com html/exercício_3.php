<?php
    if(isset($_POST['enviar'])):
        $d=$_POST['x'];
        $tp=$_POST['t'];
        $VM=($d/$tp);
        echo "A velocidade média: $VM";
    endif;
?>

<html>
    <head>
        <title> Velocidade Média </title>
    </head>
    <body>
        <h1> EX 3 <br> Movimento Mecânico </h1>
        <form method="post" action="">
            <label> distância percorrida: </label> <br>
            <input name="d" type="text"> <br>
            <label> tempo gasto: </label> <br>
            <input name="tp" type="text"> <br>
            <button type="submit" name="enviar"> Calcula </button>
            <button type="reset" name="apagar"> Limpa </button>
        </form>
    </body>
</html>