<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "PureTorta";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$pais = $_POST['pais'];
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$empresa = $_POST['empresa'];
$endereco = $_POST['endereco'];
$complemento = $_POST['complemento'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$cep = $_POST['cep'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];


$sql = "INSERT INTO CadastroCliente (Pais, Nome, Sobrenome, Empresa, Endereco, Complemento, Bairro, Cidade, Estado, CEP, Email, Telefone)
VALUES ('$pais', '$nome', '$sobrenome', '$empresa', '$endereco', '$complemento', '$bairro', '$cidade', '$estado', '$cep', '$email', '$telefone')";

if ($conn->query($sql) === TRUE) {
    echo "Cadastro realizado com sucesso!";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>