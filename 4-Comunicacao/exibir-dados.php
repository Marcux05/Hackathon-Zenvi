<?php 
 
if (isset($_POST["acao"])){ 
 
   $nome=$_POST["nome"]; 
   $telefone=$_POST["telefone"]; 
   $email=$_POST["email"]; 
   $radio=$_POST["novidades"]; 
   $msg=$_POST["mensagem"]; 
 
   echo "<p>Ol�, ".$nome."</p>"; echo "<p>Seu email �: ".$email."</p>"; 
 
   echo "<p>Seu telefone �: ".$telefone."</p>"; 
 
   if ($radio=="sim"){ 
      echo "<p>Voc� escolheu receber nossas novidades</p>"; 
   }
   elseif ($radio=="nao") { 
      echo "<p>Voc� escolheu N�O receber nossas novidades</p>"; 
   } 
   echo "<p>Sua mensagem �:<br/>".$msg."</p>"; 
} 
 
?>