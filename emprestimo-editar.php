<h1>Editar Emprestimo</h1>
<?php 
    $sql = "SELECT * FROM emprestimo AS e
            INNER JOIN livro AS l
                ON e.livro_id_livro = l.id_livro
            INNER JOIN usuario AS u
                ON e.usuario_id_usuario = u.id_usuario
            INNER JOIN atendente AS aten
                ON e.atendente_id_atendente = aten.id_atendente 
            WHERE e.livro_id_livro = l.id_livro AND e.usuario_id_usuario = u.id_usuario AND e.atendente_id_atendente = aten.id_atendente ;";

    $resultado = $mysqli->query($sql);

    $row = $resultado->fetch_object();
?>
<form action="?page=emprestimo-salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id_livro" value="<?php print $row->id_livro ?>">
    <input type="hidden" name="id_usuario" value="<?php print $row->id_usuario ?>">
    <input type="hidden" name="id_atendente" value="<?php print $row->id_atendente ?>">
    <div class="mb-3">
        <label>Livro</label>
        <select name="livro_id_livro" class="form-control" required>
        selected <option value="">Selecione o novo livro</option required>
            <?php 
            
            $sql = "SELECT * FROM livro";
            
            $resultado = $mysqli->query($sql);
            while($rows = $resultado->fetch_object())
            {
                print "<option value='".$rows->id_livro."'>";
                print $rows->titulo_livro."</option>";
            }
        
            ?>
        </select>
    </div>
    <div class="mb-3">
        <label>Usuario</label>
        <select name="usuario_id_usuario" class="form-control" required>
        selected <option value="">Selecione o novo usuario</option required>
            <?php 
            
            $sql = "SELECT * FROM usuario";
            
            $resultado = $mysqli->query($sql);
            while($ro = $resultado->fetch_object())
            {
                print "<option value='".$ro->id_usuario."'>";
                print $ro->nome_usuario."</option>";
            }
        
            ?>
        </select>
    </div>
    <div class="mb-3">
        <label>Atendente</label>
        <select name="atendente_id_atendente" class="form-control" required>
        selected <option value="">Selecione o novo atendente</option required>
            <?php 
            
            $sql = "SELECT * FROM atendente";
            
            $resultado = $mysqli->query($sql);
            while($rown = $resultado->fetch_object())
            {
                print "<option value='".$rown->id_atendente."'>";
                print $rown->nome_atendente."</option>";
            }
        
            ?>
        </select>
    </div>
        </select>
    </div>
    <div class="mb-3">
        <label>Data do Emprestimo</label>
        <input type="date" name="dt_emprestimo" class="form-control" value="<?php print $row->data_emprestimo ?>" required>
    </div>
    <div class="mb-3">
        <label>Data de Devolução</label>
        <input type="date" name="dt_devolucao" class="form-control" value="<?php print $row->data_devolucao ?>" required>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>