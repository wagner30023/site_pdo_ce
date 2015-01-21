<?php

/**
 * Description of Contato
 *
 * @author carlos
 */
class Contato {

    public $id_contato;
    public $nome;
    public $email;
    public $assunto;
    public $mensagem;

    function getId_contato() {
        return $this->id_contato;
    }

    function getNome() {
        return $this->nome;
    }

    function getEmail() {
        return $this->email;
    }

    function getAssunto() {
        return $this->assunto;
    }

    function getMensagem() {
        return $this->mensagem;
    }

    function setId_contato($id_contato) {
        $this->id_contato = $id_contato;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setAssunto($assunto) {
        $this->assunto = $assunto;
    }

    function setMensagem($mensagem) {
        $this->mensagem = $mensagem;
    }



}
