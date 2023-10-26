<h1>Editar Usuário</h1>
<?php 
    $sql = "SELECT * FROM usuario WHERE id_usuario=".$_REQUEST['id'];

    $resultado = $mysqli->query($sql);
    
    $row = $resultado->fetch_object();
?>
<form action="?page=usuario-salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row->id_usuario ?>">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" class="form-control" value="<?php print $row->nome_usuario ?>" required>
    </div>
    <div class="mb-3">
        <label>CPF</label>
        <input type="number" name="cpf" class="form-control" value="<?php print $row->cpf_usuario ?>" required>
    </div>
    <div class="mb-3">
        <label>Email</label>
        <input type="text" name="email" class="form-control" value="<?php print $row->email_usuario ?>" required>
    </div>
    <div class="mb-3">
        <label>Telefone</label>
        <input type="number" name="telefone" class="form-control" value="<?php print $row->fone_usuario ?>" required>
    </div>
    <div class="mb-3">
        <label>Data de nascimento</label>
        <input type="date" name="dt_nasc" class="form-control" min="1930-01-01" value="<?php print $row->dt_nasc_usuario ?>">
    </div>
    <div class="mb-3">
        <button class="btn btn-primary">Enviar</button>
    </div>
</form>