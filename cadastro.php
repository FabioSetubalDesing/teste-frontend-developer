<!--Sintaxe PHP-->
<style>
    h1{
        text-align: center;
    }
    p{
        text-align: center;
    }
    a{
        margin-top:1%;
        text-decoration: none;
        background-color: green;
        color:white;
        border-radius: 5px;
        padding: 5px;
    }

    a:hover{
        opacity: 0.5;
    }
</style>
<?php
    //incluindo conexão.php
    include("conexao.php");
    
    //criando variaveis
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $texto = $_POST['message'];

//é uma linha de codigo só
//novos é o nome da tabela
//nomes das colunas da tabela
//em seguida nome das variaveis  criadas aqui
$sql ="INSERT INTO cliente(`nome`, `email`, `telefone`, `pedido`)
 VALUES ('$nome','$email','$telefone','$texto')";

//para verificar se usuario foi cadastrado
    if(mysqli_query($conexao, $sql)){
        echo "<h1>Pedido enviado com sucesso!</h1>";
        echo "<p>Você receberá uma mensagem no seu Whatszap em menos de 24hrs!</p>";
        echo" <h1><a href='index.html'>Voltar</a></h1>";
    }else{
        echo "<h1>Pedido não enviado</h1>".mysqli_connect_errno($conexao);
    }

//encerra conexao  mysqli apos os cadastros, para não trava o banco de dados
    mysqli_close($conexao);

?>
