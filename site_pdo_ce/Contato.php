<?php require_once './menu.php'; ?>

<header class="body">



</header>

<section class="body">

    <?php
    require_once './lib/Contato.class.php';
    require_once './lib/Contato.DAO.php';
    try {

        $contato = new Contato();
        //$contato->setId_contato('cod');
        $contato->setNome($_POST['nome']);
        $contato->setEmail($_POST['email']);
        $contato->setAssunto($_POST['assunto']);
        $contato->setMensagem($_POST['mensagem']);

  

        $cadastrar = ContatoDAO::InserirContato($contato);



        if ($cadastrar == TRUE) {
            echo " 
            <img alt='add' src='img/ico/add.png' />Cadastro efetuado com sucesso ";
        }
    } catch (Exception $ex) {
        $ex->getCode();
        $ex->getTraceAsString();
    }
    ?>
</section>
<?php require_once './footer.php'; ?>