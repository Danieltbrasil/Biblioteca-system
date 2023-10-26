<?php 
    switch ($_REQUEST['acao']) {
        case 'cadastrar':
            $nome = $_POST['nome'];
            $cpf = $_POST['cpf'];
            $email = $_POST['email'];
            $telefone = $_POST['telefone'];

            $sql = "INSERT INTO atendente(nome_atendente, cpf_atendente, email_atendente, fone_atendente) VALUES('{$nome}', '{$cpf}', '{$email}', '{$telefone}')";

            $resultado = $mysqli->query($sql);

            if($resultado==true)
            {
                print "<script>alert('Cadastro Efetuado');</script>";
                print "<script>location.href='?page=atendente-listar'</script>";
            }
            else
            {
                print "<script>alert('Falha no cadastro')</script>";
                print "<script>location.href='?page=atendente-listar'</script>";

            }
            break;
        case 'editar':
            $nome = $_POST['nome'];
            $cpf = $_POST['cpf'];
            $email = $_POST['email'];
            $telefone = $_POST['telefone'];

            $sql = "UPDATE atendente SET
                        nome_atendente = '{$nome}',
                        cpf_atendente = '{$cpf}',
                        email_atendente = '{$email}',
                        fone_atendente = '{$telefone}' 
                    WHERE
                        id_atendente = ".$_REQUEST['id'];
            $resultado = $mysqli->query($sql);

            if($resultado==true)
            {
                print "<script>alert('Editado com sucesso');</script>";
                print "<script>location.href='?page=atendente-listar'</script>";
            }
            else
            {
                print "<script>alert('Falha ao editar')</script>";
                print "<script>location.href='?page=atendente-listar'</script>";

            }
            break;
        case 'excluir':
                $sql = "DELETE FROM atendente WHERE id_atendente=".$_REQUEST['id'];

                $resultado = $mysqli->query($sql);

            if($resultado==true)
            {
                print "<script>alert('Excluido com sucesso');</script>";
                print "<script>location.href='?page=atendente-listar'</script>";
            }
            else
            {
                print "<script>alert('Falha ao Excluir')</script>";
                print "<script>location.href='?page=atendente-listar'</script>";
            }
            break;
    }

?>