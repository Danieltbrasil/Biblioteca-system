<h1>Editar Atendente</h1>
<?php 
    $sql = "SELECT * FROM atendente WHERE id_atendente=".$_REQUEST['id'];

    $resultado = $mysqli->query($sql);
    
    $row = $resultado->fetch_object();
?>
<form action="?page=atendente-salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row->id_atendente ?>">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" class="form-control" value="<?php print "$row->nome_atendente" ?>" required>
    </div>
    <div class="mb-3">
        <label>CPF</label>
        <input type="number" name="cpf" class="form-control" value="<?php print "$row->cpf_atendente" ?>" required>
    </div>
    <div>
        <label>Email</label>
        <input type="text" name="email" class="form-control" value="<?php print "$row->email_atendente" ?>" required>
    </div>
    <div class="mb-3">
        <label>Telefone</label>
        <input type="number" name="telefone" class="form-control" value="<?php print "$row->fone_atendente" ?>" required>
    </div>
    <div class="mb-3">
        <button class="btn btn-primary">Enviar</button>
    </div>
</form>