<?php

/**
 * Description of Produto
 *
 * @author carlos
 */
class Produto {
    public $id_curso;
    public $nome_curso;
    public $professor;
    
    
    function getId_curso() {
        return $this->id_curso;
    }

    function getNome_curso() {
        return $this->nome_curso;
    }

    function getProfessor() {
        return $this->professor;
    }

    function setId_curso($id_curso) {
        $this->id_curso = $id_curso;
    }

    function setNome_curso($nome_curso) {
        $this->nome_curso = $nome_curso;
    }

    function setProfessor($professor) {
        $this->professor = $professor;
    }

}
