<h1>Cadastrar Atendente</h1>
<form action="?page=atendente-salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>CPF</label>
        <input type="number" name="cpf" class="form-control" required>
    </div>
    <div>
        <label>Email</label>
        <input type="text" name="email" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Telefone</label>
        <input type="number" name="telefone" class="form-control" required>
    </div>
    <div class="mb-3">
        <button class="btn btn-primary">Enviar</button>
    </div>
</form>