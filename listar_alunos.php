<?php
include 'db.php';

$query = $pdo->query("SELECT* FROM alunos");
$query = $query->fetchALL(PDO::FETCH_ASSOC);
?>

<h2>Lista de Alunos</h2>
<a href+"adicionar_aluno.php">Adicionar Novo Aluno</a>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Ações</th>
    </tr>
    <?php foreach ($alunos as $aluno): ?>
        <tr>
            <td><?php echo $alunos['id']; ?></td>
            <td><?php echo $alunos['nome']; ?></td>
            <td><?php echo $alunos['email']; ?></td>
            <td>
                <a href="editar_aluno.php?id=<?php echo $aluno['id']; ?>">Editar<?a>
                <a href="editar_aluno.php?id=<?php echo $aluno['id']; ?>">Excluir<?a>
            </td>
        </tr>
    <?php endForeach; ?>
</table>