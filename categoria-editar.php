<h1>Categoria Editar</h1>
<?php
    $sql = "SELECT * FROM categoria WHERE id_categoria=".$_REQUEST['id'];

    $resultado = $mysqli->query($sql);

    $row = $resultado->fetch_object(); 
?>
<form action="?page=categoria-salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row->id_categoria ?>">
    <div class="mb-3">
        <label>Categoria</label>
        <input type="text" name="categoria" class="form-control" value="<?php print $row->nome_categoria ?>" required>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>