<h1>Editar livro</h1>
<?php 
    $sql = "SELECT * FROM livro WHERE id_livro=".$_REQUEST['id'];

    $resultado = $mysqli->query($sql);

    $row = $resultado->fetch_object();

?>
<form action="?page=livro-salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row->id_livro ?>">
    <div class="mb-3">
        <label>Categoria</label>
     <select class="form-control" name="categoria_id_categoria" required>
        selected <option value="">Selecione a nova Categoria</option>;
        <?php 
        $sql = "SELECT * FROM categoria";
            
        $resultado = $mysqli->query($sql);
        while($rows = $resultado->fetch_object())
        {
            print "<option value='".$rows->id_categoria."'>";
            print $rows->nome_categoria."</option>";
        }
        ?>
     </select>
    </div>
    <div class="md-3">
        <label>Título</label>
        <input type="text" name="titulo" class="form-control" value="<?php print "$row->titulo_livro" ?>" required>
    </div>
    <div class="md-3">
        <label>Autor</label>
        <input type="text" name="autor" class="form-control" value="<?php print $row->autor_livro ?>" required>
    </div>
    <div>
        <label>Editora</label>
        <input type="text" name="editora" class="form-control" value="<?php print $row->editora_livro ?>" required>
    </div>
    <div class="md-3">
        <label>Edição</label>
         <input type="number" name="edicao" class="form-control" value="<?php print $row->edicao_livro ?>" required>
    </div>
    <div class="md-3">
        <label>Localidade</label>
        <input type="text" name="localidade" class="form-control" value="<?php print $row->localidade_livro ?>" required>
    </div>
    <div class="md-3">
        <label>Ano</label>
        <input type="number" name="ano" class="form-control" value="<?php print $row->ano_livro ?>" required>
    </div><br>
    <div class="md-3">
        <button class="btn btn-primary">Enviar</button>
    </div>
</form>