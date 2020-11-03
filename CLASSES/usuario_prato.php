<?php

class usuario_prato
{
    private $pdo;
    public $msgErro = "";

    public function conectar($nome_do_prato, $host, $inf_prato, $img_prato)
    {
        global $pdo;
        global $msgErro;/**se não funcionar voltar aqui e remover linha**/
        try {
            $pdo = new PDO("mysql:dbname=".$nome_do_prato.";host=".$host,$inf_prato,$img_prato);
        } catch (PDOException $i) {
            $msgErro = $i->getMessage();
          }
    }
    
    public function cadastrar($nome_do_prato, $inf_prato, $img_prato)
    {
        global $pdo;
        //Verificarse já existe um prato cadastrado
        $sql = $pdo->prepare("SELECT id_usuario FROM usuarios WHERE nome_do_prato = :i");
        $sql->bindValue(":np",$nome_do_prato);
        $sql->execute();
        if($sql->rowCount()>0)//significa que já está cadastrado
        {
            return false; 
        }
        else//caso não exista
        {
            $sql = $pdo->prepare("INSERT INTO usuarios (nome_do_prato, inf_prato) VALUES (:np, :ip, :imp)");
            $sql->bindValue(":np",$nome_do_prato);
            $sql->bindValue(":ip",$inf_prato);
            $sql->bindValue(":imp", $img_prato);
            $sql->execute();
            return true;
        }
        
    }}
?>