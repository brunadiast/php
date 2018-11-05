<?php
   header("Content-Type: text/html; charset=ISO-8859-1", true);
   
   if (isset($_POST['enviar'])):
   
       $base = $_POST['base'];
       $altura = $_POST['altura'];
       
       $area = ($base * $altura)/ 2;
       
       echo "A area do triângulo = ".$area."<br>";
       
    endif;
    ?>   