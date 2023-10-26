<h1>Lista de usuários</h1>
<?php 
    $sql = "SELECT * FROM usuario";

    $resultado = $mysqli->query($sql);

    $qnt = $resultado->num_rows;

    if($qnt > 0)
    {
        print "<table class='table table-hover table-striped table-bordered'>";
        print "<tr>";
        print "<th>#</th>";
        print "<th>Nome</th>";
        print "<th>Email</th>";
        print "<th>Telefone</th>";
        print "<th>CPF</th>";
        print "<th>Data de nascimento</th>";
        print "<th>Ações</th>";
        while($row = $resultado->fetch_object())
        {
            print "<tr>";
            print "<td></th>";
            print "<td>$row->nome_usuario</td>";
            print "<td>$row->email_usuario</td>";
            print "<td>$row->fone_usuario</td>";
            print "<td>$row->cpf_usuario</td>";
            print "<td>$row->dt_nasc_usuario</td>";
            print "<td>
                    <button onclick=\"location.href='?page=usuario-editar&id=".$row->id_usuario."';\" class='btn btn-success'>Editar</button>
                    <button onclick=\"if(confirm('Tem certeza que deseja excluir?'))
                                        {
                                            location.href='?page=usuario-salvar&acao=excluir&id=".$row->id_usuario."';
                                        }
                                        else
                                        {
                                            false;
                                        }
                                    \" class='btn btn-danger'>Excluir</button>
                   </td>";
        }
    }
    else
    {
        print "<p class='alert alert-danger'>Nenhum resultado encontrado</p>";
    }
?>