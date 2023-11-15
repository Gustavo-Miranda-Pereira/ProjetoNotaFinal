<?php
    $email = $_POST['email'];
    $senha = $_POST['sen'];    

    $conexao = mysqli_connect('localhost', 'root', '', 'novousuario');

    $sql = "INSERT INTO usuarios (email, senha) VALUES ('".$email."','".$senha."')";

    if(mysqli_query($conexao, $sql)){
        echo "Dados gravados com sucesso!";
    }else{
        echo "Ocorreu um erro ao gravar os dados";
    }

    mysqli_close($conexao);
?>
<a href="../index.html">Voltar</a>