<h1>Categoria Listar</h1>
<?php 
    $sql = "SELECT * FROM categoria";

    $resultado = $mysqli->query($sql);
    
    $qtd = $resultado->num_rows;

    if($qtd > 0)
    {
        print "<table class='table table-hover table-striped table-bordered'>";
        print "<tr>";
        print "<th>#</th>";
        print "<th>Categoria</th>";
        print "<th>Ações</th>";
        while($row = $resultado->fetch_object())
        {
            print "<tr>";
            print "<td>$row->id_categoria</td>";
            print "<td>$row->nome_categoria</td>";
            print "<td>
                    <button onclick=\"location.href='?page=categoria-editar&id=".$row->id_categoria."';\" class='btn btn-success'>Editar</button>
                    <button onclick=\"if(confirm('Tem certeza que deseja excluir?'))
                                        {
                                            location.href='?page=categoria-salvar&acao=excluir&id=".$row->id_categoria."';
                                        }
                                        else
                                        {
                                            false;
                                        }
                                    \" class='btn btn-danger'>Excluir</button>
                   </td>";
            print "</tr>";
        }
        print "</table>";
    }
    else
    {
        print "<p class='alert alert-danger'>Nenhum resultado encontrado</p>";
    }
?>