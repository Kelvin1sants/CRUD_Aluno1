<php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    $stmt = $pdo->prepare('INSERT INTO alunos (nome, email) VALUES (:nome, :email)');
}