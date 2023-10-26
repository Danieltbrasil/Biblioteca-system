<h1>Cadastrar livro</h1>
<form action="?page=livro-salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Categoria</label>
        <select name="categoria_id_categoria" class="form-control" required>
        selected <option value="">Selecione a Categoria</option required>
            <?php 
            
            $sql = "SELECT * FROM categoria";
            
            $resultado = $mysqli->query($sql);
            while($row = $resultado->fetch_object())
            {
                print "<option value='".$row->id_categoria."'>";
                print $row->nome_categoria."</option>";
            }
        
            ?>
        </select>
    </div>
    <div class="md-3">
        <label>Título</label>
        <input type="text" name="titulo" class="form-control" required>
    </div>
    <div class="md-3">
        <label>Autor</label>
        <input type="text" name="autor" class="form-control" required>
    </div>
    <div>
        <label>Editora</label>
        <input type="text" name="editora" class="form-control" required>
    </div>
    <div class="md-3">
        <label>Edição</label>
         <input type="number" name="edicao" class="form-control" required>
    </div>
    <div class="md-3">
        <label>Localidade</label>
        <input type="text" name="localidade" class="form-control" required>
    </div>
    <div class="md-3">
        <label>Ano</label>
        <input type="number" name="ano" class="form-control" required>
    </div><br>
    <div class="md-3">
        <button class="btn btn-primary">Enviar</button>
    </div>
</form>