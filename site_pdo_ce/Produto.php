<?php require_once './menu.php'; ?>

<h2 class="pesq" > Cursos oferecidos  </h2>

<table align='center' width='50%' border='1px'>
    <thead>
        <tr>  
            <th> Curso  </th>
            <th> Professor </th> 
        </tr>
    </thead>
    <?php
    require_once './lib/Produto.class.php';
    require_once './lib/Produto.DAO.php';

    $pesquisar = new Produto();
    $pesquisar->setNome_curso($_POST['nome']);


    $resultado = ProdutoDAO::PesquisarProduto($pesquisar);

    foreach ($resultado as $dados):
        echo "
                          
                                <tbody>
                                <tr>
                                    <td>{$dados['nome_curso']}</td>
                                    <td>{$dados['professor']}</td>
                               </tr>
                               </tbody>
                        ";


    endforeach;
    ?>
</table>
<?php require_once './footer.php'; ?>
