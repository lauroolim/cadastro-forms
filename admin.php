<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2>Lista de Usuários</h2>
            <a href="index.php" class="btn btn-primary">Adicionar Usuário</a>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Senha</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
                try {
                    // Conectando ao banco de dados SQLite
                    $pdo = new PDO('sqlite:user.db');
                    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                    // Consultando os dados dos usuários
                    $stmt = $pdo->query('SELECT name, email, password FROM users');

                    // Exibindo os dados na tabela
                    while ($user = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        echo "<tr>";
                        echo "<td>{$user['name']}</td>";
                        echo "<td>{$user['email']}</td>";
                        echo "<td>{$user['password']}</td>";
                        echo "<td>";
                        echo "<a href='edit_user.php?id={$user['id']}' class='btn btn-warning btn-sm me-2'>Editar</a>";
                        echo "<a href='delete_user.php?id={$user['id']}' class='btn btn-danger btn-sm'>Excluir</a>";
                        echo "</td>";
                        echo "</tr>";
                    }
                } catch (PDOException $e) {
                    echo "Erro ao conectar ao banco de dados: " . $e->getMessage();
                }
                ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>