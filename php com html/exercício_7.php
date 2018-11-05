<?php
    if (isset($_POST['Enviar'])):
      $r=$_POST['r'];
      $pi=3.14;
      function area ($r,$pi) {
         $A=($r*$r)*$pi;
         return $A;
      }
      echo "A área:";
      echo area ($r,$pi);
    endif;
?>
<html> 
    <head>
       <title> Área do Círculo </title>
    </head>
    <body> 
        <h1 align="center"> Ex 7 <br> Área do Círculo </h1>
       <form method="post" action=""> 
          <label> O raio : </label>
          <input name="r" type="text"> <br>
          <button type="submit" name="Enviar"> Calcula </button> 
          <button type="reset" name="Apagar"> Apaga</button>
       </form>
    </body>
</html>