<h1>Cadastrar Categoria</h1>
<form action="?page=categoria-salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Categoria</label>
        <input type="text" name="categoria" class="form-control" required>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>
