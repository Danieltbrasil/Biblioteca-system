<?php 
    switch ($_REQUEST['acao']) {
        case 'cadastrar':
            $sql = "INSERT INTO livro(
                                categoria_id_categoria,
                                titulo_livro, 
                                autor_livro, 
                                editora_livro, 
                                edicao_livro, 
                                localidade_livro, 
                                ano_livro
                                ) 
                                VALUES(
                                    ".$_POST['categoria_id_categoria'].", 
                                    '".$_POST['titulo']."', 
                                    '".$_POST['autor']."', 
                                    '".$_POST['editora']."', 
                                    ".$_POST['edicao'].", 
                                    '".$_POST['localidade']."', 
                                    ".$_POST['ano'].")";

            $resultado = $mysqli->query($sql);

            if($resultado==true)
            {
            print "<script>alert('Cadastro Efetuado');</script>";
            print "<script>location.href='?page=livro-listar'</script>";
            }
            else
            {
            print "<script>alert('Falha no cadastro')</script>";
            print "<script>location.href='?page=livro-listar'</script>";

            }
            break;
        
        case 'editar':
            $idcategoria = $_POST['categoria_id_categoria'];
            $titulo = $_POST['titulo'];
            $autor = $_POST['autor'];
            $editora = $_POST['editora'];
            $edicao = $_POST['edicao'];
            $localidade = $_POST['localidade'];
            $ano = $_POST['ano'];

            $sql = "UPDATE livro SET
                        categoria_id_categoria = '{$idcategoria}',
                        titulo_livro = '{$titulo}',
                        autor_livro = '{$autor}', 
                        editora_livro = '{$editora}', 
                        edicao_livro = '{$edicao}', 
                        localidade_livro = '{$localidade}', 
                        ano_livro = '{$ano}'
                        WHERE id_livro = ".$_REQUEST['id'];
                        
            
            $resultado = $mysqli->query($sql);
            
            if($resultado==true)
            {
                print "<script>alert('Editado com sucesso');</script>";
                print "<script>location.href='?page=livro-listar'</script>";
            }
            else
            {
                print "<script>alert('Falha ao editar')</script>";
                print "<script>location.href='?page=livro-listar'</script>";
            }
            break;
    
        case 'excluir':
                $sql = "DELETE FROM livro WHERE id_livro=".$_REQUEST['id'];

                $resultado = $mysqli->query($sql);

            if($resultado==true)
            {
                print "<script>alert('Excluido com sucesso');</script>";
                print "<script>location.href='?page=livro-listar'</script>";
            }
            else
            {
                print "<script>alert('Falha ao Excluir')</script>";
                print "<script>location.href='?page=livro-listar'</script>";
            }
            break;
    }
    
?>