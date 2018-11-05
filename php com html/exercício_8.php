<?php
    if (isset($_POST['Enviar'])):
      $a=$_POST['a'];
      $dn=$_POST['dn'];
      function idade ($a,$dn){
         $i=$a-$dn;
         return $i;
      }
      echo "A sua idade é de:";
      echo idade ($a,$dn);
    endif;
?>
<html>  
    <head>
       <title> Cálculo da Idade  </title>
    </head>
    <body> 
        <h1 align="center"> Ex 8 <br> A Idade </h1>
       <form method="post" action=""> 
          <label> O ano atual: </label>
          <input name="a" type="text"> <br>
          <label> O ano de nascimento: </label>
          <input name="dn" type="text"> <br>
          <button type="submit" name="Enviar"> Calcula </button> 
          <button type="reset" name="Apagar"> Apaga </button>
       </form>
    </body>
</html>