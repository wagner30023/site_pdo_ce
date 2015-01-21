<?php


require_once './PDOConnectionFactory.php';

echo "####################### Executando Fixture ###################################";

echo "\n\n\n";

$pdo = new PDOConnectionFactory();
$conn = $pdo->getConnection();




echo "\n\n\n";

echo  "################## Excluindo e criando um  novo banco. #######################";

echo "\n";

$conn->query("SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

DROP SCHEMA IF EXISTS `site_pdo_ce` ;

CREATE SCHEMA IF NOT EXISTS `site_pdo_ce` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ;

USE `site_pdo_ce`;");

echo " \n OK \n\n";


echo "################## Estrutura das tabelas produto e contato, ########################################";
echo " \n ####################### criando as tabelas produto e contato! #######################";

$conn->query("
CREATE  TABLE IF NOT EXISTS `site_pdo_ce`.`produto` (
  `id_curso` INT(11) NOT NULL AUTO_INCREMENT ,
  `nome_curso` VARCHAR(45) NULL DEFAULT NULL ,
  `professor` VARCHAR(45) NULL DEFAULT NULL ,
  PRIMARY KEY (`id_curso`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci;




CREATE  TABLE IF NOT EXISTS `site_pdo_ce`.`contato` (
  `id_contato` INT(11) NOT NULL AUTO_INCREMENT ,
  `nome` VARCHAR(45) NULL DEFAULT NULL ,
  `email` VARCHAR(45) NULL DEFAULT NULL ,
  `assunto` VARCHAR(25) NULL DEFAULT NULL ,
  `mensagem` TEXT NULL DEFAULT NULL ,
  PRIMARY KEY (`id_contato`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

");

echo " \n\n OK \n\n";

echo "################## Extraindo dados das tabelas #######################";

$conn->query("
    --
-- Extraindo dados da tabela `contato`
--

INSERT INTO `contato` (`id_contato`, `nome`, `email`, `assunto`, `mensagem`) VALUES
(1, 'Alburqueque', 'wagner30023@gmail.com', 'zend', 'Zend Framework 2'),
(2, 'Carlos Wagner ', 'wagner30023@hotmail.com', teste, 'Gostaria de fazer o curso PHP do jeito certo. ');

INSERT INTO `contato` (`id_contato`, `nome`, `email`, `assunto`, `mensagem`) VALUES
(3,'Eduardo Morais','edu@hotmail.com','curso','tem curso de Python'),
(4,'Gabriela','gab@hotmail.com','curso','Web design');

-- --------------------------------------------------------

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id_curso`, `nome_curso`, `professor`) VALUES
(1, 'Desvendando Mysql ', 'Wesley Wilhans'),
(2, 'PHP do jeito certo ', 'Wesley Winlhans '),
(3, 'Desvendando Mysql ', 'Wesley Wilhans'),
(4, 'PHP do jeito certo ', 'Wesley Winlhans '),
(5, 'Desvendando Mysql ', 'Wesley Wilhans'),
(6, 'Zend Famework 2 ', 'Wesley Wilhans'),
(7, 'Ruby on Rails ', 'Paulo Davi'),
(8, 'ZF2 Angular ', 'Wesley Wilhans'),
(9, 'PHP com MVC', 'Wesley Wilhans'),
(10, 'PHP do jeito certo ', 'Wesley Wilhans'),
(11, 'SILEX a jato', 'Joao Paulo');
");

  echo " \n\n OK \n\n";
  
  echo " \n\n";
  echo  "################## Fixture finalizada. #######################";
  echo " \n\n";
  
 
