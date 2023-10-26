<h1>Listar Emprestimos</h1>
<?php 
    $sql = "SELECT * FROM emprestimo AS e
            INNER JOIN livro AS l
                ON e.livro_id_livro = l.id_livro
            INNER JOIN usuario AS u
                ON e.usuario_id_usuario = u.id_usuario
            INNER JOIN atendente AS aten
                ON e.atendente_id_atendente = aten.id_atendente";

    $resultado = $mysqli->query($sql);

    $qnt = $resultado->num_rows;

    if($qnt > 0)
    {
        print "<table class='table table-hover table-striped table-bordered'>";
        print "<tr>";
        print "<th>Nome do Livro</th>";
        print "<th>Nome do Usuário</th>";
        print "<th>Nome do Atendente</th>";
        print "<th>Data de Empréstimo</th>";
        print "<th>Data de Devolução</th>";
        print "<th>Ações</th>";
        print "</tr>";
        while($row = $resultado->fetch_object())
        {
            print "<tr>";
            print "<td>$row->titulo_livro</td>";
            print "<td>$row->nome_usuario</td>";
            print "<td>$row->nome_atendente</td>";
            print "<td>$row->data_emprestimo</td>";
            print "<td>$row->data_devolucao</td>";
            print "<td>
            <button onclick=\"location.href='?page=emprestimo-editar&livro_id_livro=".$row->id_livro."&usuario_id_usuario=".$row->id_usuario."&atendente_id_atendente=".$row->id_atendente."';\" class='btn btn-success'>Editar</button>
            <button onclick=\"if(confirm('Tem certeza que deseja excluir?'))
                                {
                                    location.href='?page=emprestimo-salvar&acao=excluir&id_livro=".$row->livro_id_livro."&id_usuario=".$row->usuario_id_usuario."&id_atendente=".$row->atendente_id_atendente."';
                                }
                                else
                                {
                                    false;
                                }
                            \" class='btn btn-danger'>Excluir</button>
           </td>";
            print "</tr>";
        }
    }
    else
    {
        print "<p class='alert alert-danger'>Nenhum resultado encontrado</p>";
    }
?>