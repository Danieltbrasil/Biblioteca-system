<?php 
    switch ($_REQUEST['acao']) {
        case 'cadastrar':
            $sql = "INSERT INTO emprestimo(
                                livro_id_livro,
                                usuario_id_usuario,
                                atendente_id_atendente,
                                data_emprestimo,
                                data_devolucao
                                ) 
                                VALUES (
                                    '".$_POST["livro_id_livro"]."',
                                    '".$_POST["usuario_id_usuario"]."',
                                    '".$_POST["atendente_id_atendente"]."',
                                    '".$_POST["dt_emprestimo"]."',
                                    '".$_POST["dt_devolucao"]."'
                                )";
            $resultado = $mysqli->query($sql);
        
            if($resultado==true)
            {
                print "<script>alert('Cadastro Efetuado');</script>";
                print "<script>location.href='?page=emprestimo-listar'</script>";
            }
            else
            {
                print "<script>alert('Falha no cadastro')</script>";
                print "<script>location.href='?page=emprestimo-listar'</script>";
            }                        
            break;
        
        case 'editar':
            $idlivro = $_POST['livro_id_livro'];
            $idusuario = $_POST['usuario_id_usuario'];
            $idatendente = $_POST['atendente_id_atendente'];
            $dtemprestimo = $_POST['dt_emprestimo'];
            $dtdevolucao = $_POST['dt_devolucao'];


            $sql = "UPDATE emprestimo 
                    INNER JOIN livro AS l
                        ON emprestimo.livro_id_livro = l.id_livro
                    INNER JOIN usuario AS u
                        ON emprestimo.usuario_id_usuario = u.id_usuario
                    INNER JOIN atendente AS aten
                        ON emprestimo.atendente_id_atendente = aten.id_atendente
                    SET 
                        livro_id_livro = '{$idlivro}',
                        usuario_id_usuario = '{$idusuario}',
                        atendente_id_atendente = '{$idatendente}', 
                        data_emprestimo = '{$dtemprestimo}', 
                        data_devolucao = '{$dtdevolucao}'
                    WHERE 
                        livro_id_livro = " . $_REQUEST['id_livro'] . " AND usuario_id_usuario = " . $_REQUEST['id_usuario'] . " AND atendente_id_atendente = " . $_REQUEST['id_atendente'];
                            
            
            $resultado = $mysqli->query($sql);
            
            if($resultado==true)
            {
                print "<script>alert('Editado com sucesso');</script>";
                print "<script>location.href='?page=emprestimo-listar'</script>";
            }
            else
            {
                print "<script>alert('Falha ao editar')</script>";
                print "<script>location.href='?page=emprestimo-listar'</script>";

            }
            break;
    
        case 'excluir':
                $sql = "DELETE FROM emprestimo 
                            WHERE livro_id_livro = " . $_REQUEST['id_livro'] . " AND usuario_id_usuario = " . $_REQUEST['id_usuario'] . " AND atendente_id_atendente = " . $_REQUEST['id_atendente'];

            $resultado = $mysqli->query($sql);

            if($resultado==true)
            {
                print "<script>alert('Excluido com sucesso');</script>";
                print "<script>location.href='?page=emprestimo-listar'</script>";
            }
            else
            {
                print "<script>alert('Falha ao Excluir')</script>";
                print "<script>location.href='?page=emprestimo-listar'</script>";
            }
            break;
    }
?>