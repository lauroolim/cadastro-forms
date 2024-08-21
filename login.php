<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="ce-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivrutf-8">
    <meta name="viewport" content="width=devi.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    <div class="container col-md-6 mt-5">
        <div class="card shadow">
            <div class="card-header">
                <h5 class="card-title mb-0">Login</h5>
            </div>
            <div class="card-body">
                <form method="post" action="">
                    <div class="mb-3">
                        <label for="username" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Senha</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary" name="Login">Entrar</button>
                </form>

                <?php
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $email = $_POST['email'];
                    $password = $_POST['password'];

                        $adminEmail = 'admin.@mail.com';
                        $adminSenha = password_hash('12345678', PASSWORD_DEFAULT);

                            // Verifica se o usuário foi encontrado e se a senha está correta
                            if ($email === $adminEmail && password_verify($password, $adminSenha)) {
                                // Redireciona para a página de administração
                                header("Location: admin.php");
                                exit();
                            } else {
                                echo "<p>Email ou senha estão errados.</p>";
                            }
                        }
                ?>
            </div>
        </div>
    </div>
</body>
</html>
