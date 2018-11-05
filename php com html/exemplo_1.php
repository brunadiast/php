<?php
header("Content-Type: txt/html; charset=iso-8859-1",true);
  if (isset($_POST['enviar'])):     
  $vl_a = $_POST['va'];      
  $vl_b = $_POST['vb'];     
  $soma = ($vl_a + $vl_b);       
  $subt = ($vl_a - $vl_b);     
  $mult = ($vl_a * $vl_b);     
  $divi = ($vl_a / $vl_b);
     echo "A soma = ".$soma."<br>";     
     echo "A subtração = ".$subt."<br>";     
     echo "A multiplicação = ".$mult."<br>";     
     echo "A divisão = ".$divi."<br>";   
     endif;  
?>

<html>     
<head>      
 <title> Aritmética </title>    
 <!--  -->  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
 
 <body>       
 <form method="post" action="">            
 <label>valor de a: </label>            
 <input name ="va" type="text">            
 <br>            
 <label>valor de b: </label>            
 <input name ="vb" type="text">            
 <br>            
 <button type="submit" name='enviar'>Calcular </button>            
 <button type="reset">Limpar</button>        
 </form>    
 </body> 
 </html>
