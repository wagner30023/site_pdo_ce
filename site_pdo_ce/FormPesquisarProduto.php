<?php require_once './menu.php'; ?>

<header class="body">

    <h2 class="pesq"> Pesquisar </h2>
    <h3 class="pesq"> Digite o nome, que vc deseja buscar. </h3>
    <h3 class="pesq"> clique no botão se deseja buscar todos os cursos disponiveis </h3>
    
</header>

<section >
    <form  method="post" action="Produto.php">
        <input name="nome" placeholder="nome">
        <input id="submit" name="submit" type="submit" value="Submit">
    </form>

</section>
<?php require_once './footer.php'; ?>