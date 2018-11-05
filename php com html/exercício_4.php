<?php
    if (isset($_POST['Enviar'])):
        $n1=$_POST['n1'];
        $n2=$_POST['n2'];
        $n3=$_POST['n3'];
        $n4=$_POST['n4'];
        $M=($n1+$n2+$n3+$n4)/4;
        if ($M>=6.0){
          echo "A média $M, você foi Aprovado";
        }
        else{
          echo "A média $M, você foi Reprovado";
        }
    endif;
?>

<html> 
    <head>
       <title> Cálculo da Média  </title>
    </head>
    <body> 
        <h1 align="center"> Exercício 04 <br> A Média</h1>
       <form method="post" action=""> 
          <label> Nota 01: </label> <br>
          <input name="n1" type="text"> <br>
          <label> Nota 02: </label> <br>
          <input name="n2" type="text"> <br>
          <label> Nota 03: </label> <br>
          <input name="n3" type="text"> <br>
          <label> Nota 04: </label>
          <input name="n4" type="text"> 
          <button type="submit" name="Enviar"> Calcula </button> 
          <button type="reset" name="Apagar"> Apaga</button>
       </form>
    </body>
</html>