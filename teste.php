<?php

require "Usuario.class.php";

$exito = $usuario = new Usuario();

if($exito){
   if(isset($_POST["cadastrar"])){
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];

        $usuario->cadastrar($nome, $email, $senha);

   }else{
        echo "<script>
      confirm('Erro ao conectar. Tente mais tarde')
        <script>";
   }     
}