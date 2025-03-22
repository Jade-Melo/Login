<?php

//importar a classe 
require 'Usuario.class.php';

$sucesso = $usuario = new Usuario();

if( $sucesso ){
    $user = $usuario->chkUser("fabioclaret@gmail.com");
    if( $user == 0 ){
        $usuario->cadastrar("fabio claret", "fabioclaret@gmail.com", "1234");
    echo "<h1>Cadastrado com sucesso!";
    }else{
        echo "<h1>O usuário já existe.";
    }
}else{
    echo "<h1>Erro ao conectar ao banco";
}
echo"<h1>";