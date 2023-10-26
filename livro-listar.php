<h1>Lista de livros</h1>
<?php 
    $sql = "SELECT * FROM livro AS l
            INNER JOIN categoria AS c
                ON l.categoria_id_categoria = c.id_categoria";

    $resultado = $mysqli->query($sql);

    $qnt = $resultado->num_rows;

    if($qnt > 0)
    {
        print "<table class='table table-hover table-striped table-bordered'>";
        print "<tr>";
        print "<th>#</th>";   
        print "<th>Título</th>"; 
        print "<th>Categoria</th>"; 
        print "<th>Autor</th>"; 
        print "<th>Editora</th>";
        print "<th>Edição</th>";
        print "<th>Localidade</th>";
        print "<th>Ano</th>";
        print "<th>Ações</th>";
        print "</tr>";
        while($row = $resultado->fetch_object())
        {
            print "<tr>";
            print "<td>$row->id_livro</th>";   
            print "<td>$row->titulo_livro</td>";  
            print "<td>$row->nome_categoria</td>";  
            print "<td>$row->autor_livro</td>"; 
            print "<td>$row->editora_livro</td>";
            print "<td>$row->edicao_livro</td>";
            print "<td>$row->localidade_livro</td>";
            print "<td>$row->ano_livro</td>";
            print "<td>
                    <button onclick=\"location.href='?page=livro-editar&id=".$row->id_livro."';\" class='btn btn-success'>Editar</button>
                    <button onclick=\"if(confirm('Tem certeza que deseja excluir?'))
                                        {
                                            location.href='?page=livro-salvar&acao=excluir&id=".$row->id_livro."';
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
        print "<p class='alert alert-danger'>Nenhum resultado encontrado";
    }
?>