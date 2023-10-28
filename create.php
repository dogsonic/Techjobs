<!doctype html>
<html lang="pt-br">

<head>
    <!-- Meta tags obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Estilos CSS -->
    <link rel="stylesheet" href="../../assets/css/usuario.css">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet"
          href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
          crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <title>Tech Jobs - Candidato</title>
</head>

<body>
<header class="main-header">

    <nav class="main-header-content">

        <div class="logo">
            <a href="../../index.php">TechJobs</a>
        </div>

        <nav class="menu">

            <ul>
                <li class="item-menu">
                    <a href="../../index.php">
                        <span class="icon"><i class="bi bi-house-door"></i></span>
                        <span class="txt-link">Home</span>
                    </a>
                </li>
                <li class="item-menu">
                    <a style="color: coral" href="../../auth/index.php">
                        <span class="icon"><i class="bi bi-box-arrow-in-right"></i></span>
                        <span class="txt-link">Login</span>
                    </a>
                </li>
            </ul>
        </nav>
    </nav>
</header>

<main class="main-candidato">
    <div class="card-candidato">
        <h2>Criar uma nova conta de usuário</h2>

        <form action="save.php" method="post">
            <div class="container">
                <div class="row text">
                    <div class="col-md-12">
                        <div class="card-body font-weight-bold">
                            <div class="form-group card-candidato-content">
                                <label for="name">Nome *</label>
                                <input name="name" type="text" class="form-control" id="name" placeholder="Nome" required>

                                <label for="email">Email *</label>
                                <input name="email" type="email" class="form-control" id="email" placeholder="E-mail" required>

                                <label for="cpf">CPF *</label>
                                <input name="cpf" type="text" class="form-control" id="cpf" placeholder="00-000-000-00" required>

                                <div class="card-candidato-content-row">
                                    <label for="ddd">DDD</label>
                                    <input name="ddd" type="text" class="form-control" id="ddd" placeholder="00" required>

                                    <label for="telefone">Telefone</label>
                                    <input name="telefone" type="number" class="form-control" id="telefone" placeholder="00000-0000" required>
                                </div>

                                <label for="senha">Senha</label>
                                <input name="senha" type="password" class="form-control" id="senha" placeholder="Senha" required>

                                <label for="senha2">Confirmar Senha</label>
                                <input name="senha2" type="password" class "form-control" id="senha2" placeholder="Confirme a senha" required>

                                <input type="hidden" id="perfil" name="perfil" value="2">
                            </div>
                        </div>
                    </div>
                    <?php if (isset($_GET['cadastro']) && $_GET['cadastro'] == 'erro') { ?>
                        <div style="color: darkred; font-size: 1.2rem"> Erro ao fazer o cadastro
                        </div>
                    <?php } ?>

                    <button type="submit" class="btn btn-primary btn-lg btn-login">Cadastrar</button>
                    <p class="text"><a href="../../auth/index.php">Já tem uma conta?</a></p>
                </div>
            </div>
        </form>
    </div>
</main>
</body>
</html>
