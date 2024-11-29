<?php

$nome = $_POST['nome_cliente'];
$email = $_POST['email_cliente'];
$telefone = $_POST['telefone_cliente'];

$conn = new mysqli("localhost", "root", "", "SistemaChamadosPedro");

if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}
$sql = "INSERT INTO Clientes (nome_cliente, email_cliente, telefone_cliente) 
        VALUES ('$nome', '$email', '$telefone')";
if ($conn->query($sql) === TRUE) {
    echo "Cliente cadastrado!";
} else {
    echo "Erro: " . $conn->error;
}
$conn->close();
?>
