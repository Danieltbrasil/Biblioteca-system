<h1>Cadastrar Empréstimo</h1>
<form action="?page=emprestimo-salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Livro</label>
        <select name="livro_id_livro" class="form-control" required>
        <option value="">Selecione o livro</option>
            <?php 
            
            $sql = "SELECT * FROM livro";
            
            $resultado = $mysqli->query($sql);
            while($row = $resultado->fetch_object())
            {
                print "<option value='".$row->id_livro."'>";
                print $row->titulo_livro."</option>";
            }
        
            ?>
        </select>
    </div>
    <div class="mb-3">
        <label>Usuario</label>
        <select name="usuario_id_usuario" class="form-control" required>
        <option value="">Selecione o usuario</option>
            <?php 
            
            $sql = "SELECT * FROM usuario";
            
            $resultado = $mysqli->query($sql);
            while($row = $resultado->fetch_object())
            {
                print "<option value='".$row->id_usuario."'>";
                print $row->nome_usuario."</option>";
            }
        
            ?>
        </select>
    </div>
    <div class="mb-3">
        <label>Atendente</label>
        <select name="atendente_id_atendente" class="form-control" required>
        <option value="">Selecione o atendente</option>
            <?php 
            
            $sql = "SELECT * FROM atendente";
            
            $resultado = $mysqli->query($sql);
            while($row = $resultado->fetch_object())
            {
                print "<option value='".$row->id_atendente."'>";
                print $row->nome_atendente."</option>";
            }
        
            ?>
        </select>
    </div>
        </select>
    </div>
    <div class="mb-3">
        <label>Data do Emprestimo</label>
        <input type="date" name="dt_emprestimo" class="form-control" min="2022-01-01" required>
    </div>
    <div class="mb-3">
        <label>Data de Devolução</label>
        <input type="date" name="dt_devolucao" class="form-control" required>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>
