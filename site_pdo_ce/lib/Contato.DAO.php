<?php

/**
 * Description of Contato
 *
 * @author carlos
 */
require_once ('PDOConnectionFactory.php');




class ContatoDAO extends PDOConnectionFactory {

    public static function InserirContato(Contato $contato) {
        try {
            $pdo = parent::getConnection();
            $sql = "INSERT INTO contato(id_contato,nome,email,assunto,mensagem) VALUES(?,?,?,?,?)";
            $stmt = $pdo->prepare($sql);
            
            $stmt->bindParam(1, $contato->getId_contato(),  PDO::PARAM_INT);
            $stmt->bindParam(2, $contato->getNome()  , PDO::PARAM_STR);
            $stmt->bindParam(3, $contato->getEmail(),PDO::PARAM_STR);
            $stmt->bindParam(4, $contato->getAssunto(),PDO::PARAM_STR);
            $stmt->bindParam(5, $contato->getMensagem(),PDO::PARAM_STR);

              $stmt->execute();
        } catch (Exception $exc) {
         
            echo $exc->getTraceAsString()."\n\n".$exc->getCode();
        }
    }

}
