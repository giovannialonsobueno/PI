<?php

include_once(__DIR__."/DB.php");

class Usuario {

    private $nome;
    private $username;
    private $email;
    private $senha;

    public function __construct($nome, $username, $email, $senha){
        $this->nome = $nome;
        $this->username = $username;
        $this->email = $email;
        $this->senha = $senha;
    }

    public function save(){

        // Inserir um usuário na tabela de usuários
        $db = new DB();

        // Escrever a string de consulta
        $sql = "INSERT INTO usuarios (nome, username, email, senha) VALUES (:nome, :username, :email, :senha)";

        // Preparar a consulta
        $consulta = $db->prepare($sql);

        // Executar a consulta
        $consulta->execute(
            [':nome' => $this->nome,
             ':username' => $this->username,
             ':email' => $this->email,
             ':senha' => $this->senha]);
        $db = null;
        }

    public static function login($email, $senha){
        $db = new DB();

        // Criando a string consulta
        $sql = "SELECT nome, username, email, senha FROM usuarios WHERE email = :email";

        // Cria consulta
        $consulta = $db->prepare($sql);

        // Executar consulta
        $result = $consulta->execute([":email" => $email]);

        // Verificando se a consulta deu certo
        if(!$result){
            die("falha na consulta");
        }

        // Carregar resultados da consulta
        $linhas = $consulta->fetchAll(PDO::FETCH_ASSOC);

        // Verificar se o usuário existe
        if(count($linhas) == 0){
            return false;
        }

        $linha = $linhas[0];

        // Verificação de senha
        if($linha['senha'] != $senha){
            return false;
        }

        // Criar um objeto Usuario e retorna-lo
        $usuario = new Usuario($linha['nome'], $linha['username'], $linha['email'], $linha['senha']);
        return $usuario;
    }

}
