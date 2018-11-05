<?php
    if (isset($_POST['Enviar'])):
      $a=$_POST['a'];
      $b=2;
      echo "A sequência é: ";
      while ($a<=100) {
         echo ".$a";
         $a=$a+$b;
      }
      endif;
?>
<html> 
    <head>
       <title> Cálculo da Média </title>
    </head>
    <body> 
       <h1 align="center"> Ex 5 <br> A Sequência </h1>
       <form method="post" action=""> 
          <label> Valor Inicial </label>
          <input name="a" type="text"> <br>
          <button type="submit" name="Enviar"> Calcula </button> 
          <button type="reset" name="Apagar"> Apaga </button>
       </form>
    </body>
</html>