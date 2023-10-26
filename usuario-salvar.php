<?php 
    switch ($_REQUEST['acao']) {
        case 'cadastrar':
            $nome = $_POST['nome'];
            $cpf = $_POST['cpf'];
            $email = $_POST['email'];
            $telefone = $_POST['telefone'];
            $dt_nasc = $_POST['dt_nasc'];

            $sql = "INSERT INTO usuario(nome_usuario, email_usuario, fone_usuario, cpf_usuario, dt_nasc_usuario) VALUES('{$nome}', '{$email}', '{$telefone}', '{$cpf}', '{$dt_nasc}')";

            $resultado = $mysqli->query($sql);

            if($resultado==true)
            {
                print "<script>alert('Cadastro Efetuado');</script>";
                print "<script>location.href='?page=usuario-listar'</script>";
            }
            else
            {
                print "<script>alert('Falha no cadastro')</script>";
                print "<script>location.href='?page=usuario-listar'</script>";

            }
            break;
        case 'editar':
            $nome = $_POST['nome'];
            $cpf = $_POST['cpf'];
            $email = $_POST['email'];
            $telefone = $_POST['telefone'];
            $dt_nasc = $_POST['dt_nasc'];

            $sql = "UPDATE usuario SET
                        nome_usuario = '{$nome}',
                        cpf_usuario = '{$cpf}',
                        email_usuario = '{$email}',
                        fone_usuario = '{$telefone}',
                        dt_nasc_usuario = '{$dt_nasc}'
                    WHERE
                        id_usuario=".$_REQUEST['id'];

            $resultado = $mysqli->query($sql);

            if($resultado==true)
            {
                print "<script>alert('Editado com sucesso');</script>";
                print "<script>location.href='?page=usuario-listar'</script>";
            }
            else
            {
                print "<script>alert('Falha editar')</script>";
                print "<script>location.href='?page=usuario-listar'</script>";

            }
            break;
        case 'excluir':
            $sql = "DELETE FROM usuario WHERE id_usuario=".$_REQUEST['id'];

            $resultado = $mysqli->query($sql);

            if($resultado==true)
            {
                print "<script>alert('Excluido com sucesso');</script>";
                print "<script>location.href='?page=usuario-listar'</script>";
            }
            else
            {
                print "<script>alert('Falha ao excluir')</script>";
                print "<script>location.href='?page=usuario-listar'</script>";

            }
            break;
    }

?>