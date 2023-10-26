<?php 
    switch ($_REQUEST['acao']) {
        case 'cadastrar':
            $categoria = $_POST['categoria'];

            $sql = "INSERT INTO categoria (nome_categoria) VALUES ('{$categoria}')";

            $resultado = $mysqli->query($sql);
            
            if($resultado==true)
            {
                print "<script>alert('Cadastro Efetuado');</script>";
                print "<script>location.href='?page=categoria-listar'</script>";
            }
            else
            {
                print "<script>alert('Falha no cadastro')</script>";
                print "<script>location.href='?page=categoria-listar'</script>";

            }
            break;
        
        case 'editar':
            $categoria = $_POST['categoria'];
            $sql ="UPDATE categoria SET
                        nome_categoria = '{$categoria}'
                    WHERE
                        id_categoria = ".$_REQUEST['id'];
            $resultado = $mysqli->query($sql);

            if($resultado==true)
            {
                print "<script>alert('Editado com sucesso');</script>";
                print "<script>location.href='?page=categoria-listar'</script>";
            }
            else
            {
                print "<script>alert('Falha editar')</script>";
                print "<script>location.href='?page=categoria-listar'</script>";

            }
            break;
        case 'excuir':
            $sql = "DELETE FROM categoria WHERE id_categoria = ".$_REQUEST['id'];
            
            $resultado = $mysqli->query($sql);

            if($resultado==true)
            {
                print "<script>alert('Excluido com sucesso');</script>";
                print "<script>location.href='?page=categoria-listar'</script>";
            }
            else
            {
                print "<script>alert('Falha ao excluir')</script>";
                print "<script>location.href='?page=categoria-listar'</script>";

            }
            break;
    }
?>