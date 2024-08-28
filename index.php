<?php
$servername = "db";
$username = "usuario";
$password = "senha123";
$dbname = "livros_db";

// Cria a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Consulta os livros
$sql = "SELECT id, titulo, autor FROM livros";
$result = $conn->query($sql);

echo "<h1>Lista de Livros</h1>";
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"]. " - Título: " . $row["titulo"]. " - Autor: " . $row["autor"]. "<br>";
    }
} else {
    echo "0 resultados";
}
$conn->close();
?>
