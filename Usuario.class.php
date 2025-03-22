<?php
class Usuario{
    private $id;
    private $nome;
    private $email;
    private $senha;
    private $pdo;

    function __construct(){
        $dns = "mysql:dbname=usuariopwii;host=localhost";
        $dbUser = "root";
        $dbPass = "";

        try{
            $this->pdo = new PDO($dns, $dbUser, $dbPass);
            return true;
        }catch(Throwable $th) {
            return false;

        }
    }

    function cadastrar($nome, $email, $senha){
        //passo 1 criar a query(consulta)
        $sql = "INSERT INTO usuarios SET nome = :n, email = :e, senha = :s";

        //passo 2 preparar a query
        $stmt = $this->pdo->prepare($sql);

        //passo 3 usar o bindValue
        $stmt->bindValue(":n", $nome);
        $stmt->bindValue(":e", $email);
        $stmt->bindValue(":s", $senha);

        //passo 4 executar a query
        
        $stmt->execute();
    }

    function chkUser($email){
        //passo 1
        $sql = "SELECT * FROM usuarios WHERE email = :e";

        //passo 2 
        $stmt = $this->pdo->prepare($sql);

        //passo 3
        $stmt->bindValue(":e", $email);

        //passo 4 
        $stmt->execute();

        //passo 5 saber se encontrou o registro 
        return $stmt->rowCount();
    }
}
