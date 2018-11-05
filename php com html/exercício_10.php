<?php
    if (isset($_POST['Enviar'])):
      $a=$_POST['x'];
      function fatorial ($a) {
         if ($a>0) {
            return ($a) * fatorial($a-1);
         }
         else {
             return 1;
         }
      }
      echo fatorial ($a);
    endif;
?>
<html> 
    <head>
       <title> Fatoriais </title>
    </head>
    <body> 
        <h1 align="center"> Exercício 10 <br> O Fatorial </h1>
       <form method="post" action=""> 
          <label> O número no qual deseja-se o fatorial: </label>
          <input name="x" type="text"> <br>
          <button type="submit" name="Enviar"> Calcular </button> 
          <button type="reset" name="Apagar"> Apagar </button>
       </form>
    </body>
</html>
