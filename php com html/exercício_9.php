<?php
    if (isset($_POST['Enviar'])):
      $n=$_POST['valor'];
      
      echo "A sequência é: ";
    
      function funcB($n)
      {
            echo ".$n";
         if ($n >= 1) 
         {
            echo ".$n";
            return (funcB($n - 1));
        }
      }
      funcB ($n);
    endif;
?>
<html> 
    <head>
       <title> A Função Recursiva </title>
    </head>
    <body> 
        <h1 align="center"> Ex 9 <br> A Recursividade </h1>
       <form method="post" action=""> 
          <label> O valor inicial: </label>
          <input name="valor" type="text"> <br>
          <button type="submit" name="Enviar"> Calcula </button> 
          <button type="reset" name="Apagar"> Apaga </button>
       </form>
    </body>
</html>