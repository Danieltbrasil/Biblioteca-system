<h1>Lista de Atendentes</h1>
<?php 
    $sql = "SELECT * FROM atendente";

    $resultado = $mysqli->query($sql);

    $qnt = $resultado->num_rows;

    if($qnt > 0)
    {
        print "<table class='table table-hover table-striped table-bordered'>";
        print "<tr>";
        print "<th>#</th>";
        print "<th>Nome</th>";
        print "<th>E-mail</th>";
        print "<th>CPF</th>";
        print "<th>Telefone</th>";
        print "<th>Ações</th>";
        while($row = $resultado->fetch_object())
        {
            print "<tr>";
            print "<td>$row->id_atendente</td>";
            print "<td>$row->nome_atendente</td>";
            print "<td>$row->email_atendente</td>";
            print "<td>$row->cpf_atendente</td>";
            print "<td>$row->fone_atendente</td>";
            print "<td>
                    <button onclick=\"location.href='?page=atendente-editar&id=".$row->id_atendente."';\" class='btn btn-success'>Editar</button>
                    <button onclick=\"if(confirm('Tem certeza que deseja excluir?'))
                                        {
                                            location.href='?page=atendente-salvar&acao=excluir&id=".$row->id_atendente."';
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