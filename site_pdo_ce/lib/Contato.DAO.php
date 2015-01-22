<?php

/**
 * Description of Contato
 *
 * @author carlos
 */
 
ini_set('display_errors', 1);
error_reporting(E_ALL);
 
require_once ('PDOConnectionFactory.php');

class ContatoDAO extends PDOConnectionFactory {

    public static function InserirContato(Contato $contato) {
        try {
            $pdo = parent::getConnection();
            $sql = "INSERT INTO contato(id_contato,nome,email,assunto,mensagem) VALUES(?,?,?,?,?)";
            $stmt = $pdo->prepare($sql);
            
            $id_contato = $contato->getId_contato();
            $nome = $contato->getNome();
            $email = $contato->getEmail();
            $assunto = $contato->getAssunto();
            $mensagem = $contato->getMensagem();

            $stmt->bindParam(1, $id_contato, PDO::PARAM_INT);
            $stmt->bindParam(2, $nome, PDO::PARAM_STR);
            $stmt->bindParam(3, $email, PDO::PARAM_STR);
            $stmt->bindParam(4, $assunto, PDO::PARAM_STR);
            $stmt->bindParam(5, $mensagem, PDO::PARAM_STR);

              $stmt->execute();
        } catch (Exception $exc) {
         
            echo $exc->getTraceAsString()."\n\n".$exc->getCode();
        }
    }

}
