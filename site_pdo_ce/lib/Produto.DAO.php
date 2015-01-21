<?php

/**
 * Description of Produto
 *
 * @author carlos
 */

require_once ('PDOConnectionFactory.php');

class ProdutoDAO extends PDOConnectionFactory {

    public static function PesquisarProduto(Produto $where) {
        try {
            $pdo = parent::getConnection();
            $sql = "SELECT * FROM produto";
            if ($where == null) {
                $stmt = $pdo->prepare($sql);
                $stmt->execute();
                return $stmt->fetchAll();
            } else {
                $sql = "SELECT nome_curso,professor FROM produto WHERE nome_curso LIKE ?";
                $stmt = $pdo->prepare($sql);
                $stmt->bindValue(1, $where->getNome_curso() . "%");
                $stmt->execute();
                return $stmt->fetchAll();
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString() . $exc->getCode();
        }
    }

}
