<?php 
    //CONECTANDO COM O BANCO DE DADOS
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $dbname = "cfp";

    $conexao = mysqli_connect($servidor, $usuario, $senha, $dbname);
    if($conexao ->connect_error){
        echo "Erro na conexão";
    }else{
        echo "Conectado com sucesso";
    }
                
    //INICIALIZANDO AS VARIÁVEIS
    $id = intval($_GET['id']);
    
                
    //ENVIANDO A QUERY PARA O BANCO DE DADOS
    $query = "DELETE FROM professores WHERE id='$id'";
    
    //VERIFICANDO SE OS DADOS FORAM INSERIDOS COM SUCESSO
    if($conexao->query($query)=== TRUE){
        header("Location: Desligar-Funcionario.php");
    }else{
        echo "Erro ao Deletar";
    }

    //ENCERRANDO A CONEXÃO
    $conexao->close();
?>