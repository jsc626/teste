<?php

if(isset($_POST["nome"])){
    $nome = $_POST["nome"];
    
    if($nome == true){
         echo "Bem-vindo,$nome!";

    }else{
        echo "Por favor,informe seu nome.";
    }
}
 
?>
