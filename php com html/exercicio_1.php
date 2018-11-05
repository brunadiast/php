<?php
    if (isset($_POST['Enviar'])):
        $h=$_POST['Altura'];  
        $b=$_POST['Base'];
        $A=($b*$h)/2;
        echo "O calculo da área: $A";
    endif; 
?> 

<html> 
    <head>
       <title> Cálculo do Triângulo </title>
    </head>
    <body> 
        <h1 align="center"> Ex 1 <br> A Área</h1>
       <form method="post" action=""> 
          <label> O Valor da Altura: </label>
          <input name="Altura" type="text"> <br>
          <label> O Valor da Base: </label>
          <input name="Base" type="text"> <br>
          <button type="submit" name="Enviar"> Calculo </button> 
          <button type="reset" name="Apagar"> Apaga </button>
       </form>
    </body>
</html>