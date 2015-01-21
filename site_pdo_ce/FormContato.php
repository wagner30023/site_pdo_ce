<?php require './menu.php'; ?>
<script type="text/javascript">
    function Alerta() {
        alert("Dados enviados com suceso!");
    }
</script>


<form class="form-horizontal" action="Contato.php" method="post">
    <fieldset>
        <!-- Form Name -->
        <legend> Contato </legend>

        <!-- Text input-->
        <div class="control-group">
            
            <label class="control-label"> Cod </label>
            <div class="controls">
                <input id="nome" name="cod" type="text" class="input-xlarge" readonly="readonly">
            </div>
            
            
            <label class="control-label">Nome</label>
            <div class="controls">
                <input id="nome" name="nome" type="text" placeholder="Insira seu nome" class="input-xlarge" required>
                <p class="help-block">* Campo Obrigatório</p>
            </div>
            <br>
            <div class="contols-group">  
                <label class="control-label">Email</label>
                <div class="controls">
                    <input id="email" name="email" type="email" placeholder="Insira seu email" class="input-xlarge" required>
                    <p class="help-block">* Campo Obrigatório</p>
                </div>
            </div>
            <br>
            <div class="contols-group">  
                <label class="control-label"> Assunto </label>
                <div class="controls">
                    <input id="assunto" name="assunto" type="text"  class="input-xlarge" required>
                </div>
            </div>
            <br>
            <div class="contols-group">  
                <label class="control-label"> Mensagem </label>
                <div class="controls">
                    <textarea class="form-control"  name="mensagem" id="" cols="40" rows="10"></textarea>
                </div>
            </div>
        </div>

        <!-- Button -->
        <div class="control-group">
            <label class="control-label"></label>
            <div class="controls">
                <button id="enviar" name="enviar" class="btn btn-primary" onclick="Alerta();">Enviar</button>
            </div>
        </div>

    </fieldset>
</form>

<?php require_once './footer.php'; ?>