<?php 

include_once("conexao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$profissao = $_POST['profissao'];

$sql = "insert into usuarios (nome,email,profissao) values ('$nome','$email','$profissao')";
$salvar = mysqli_query($conexao,$sql);

$linhas = mysqli_affected_rows($conexao);

mysqli_close($conexao);

?>

<!DOCTYPE html>
<html lang="pt-br">
<hedad>
    <meta charset="utf-8">
    <title> Sistema de Cadastro</title>
    <link rel="stylesheet" href="_css/estilo.css">
    </hedad>
    <body>
        <div class="container">
            <nav>
                <ul class="menu">
                    <a href="index.php"><li>Cadastro</li></a>
                    <a href="consultas.php"><li>Consultas</li></a>
                </ul>
            </nav>
            <section>
                <hi>Confirmação de Cadastro</hi>
                <hr><br><br>

                <?php
                
                if($linhas == 1){
                    echo "Cadastro efetuado com sucesso!";
                }else{
                    echo "Cadastro não efetuado.<br> Já existe um usuario com este email!";
                }
                
                ?>


            </section>
        </div>
    </body>
</html>