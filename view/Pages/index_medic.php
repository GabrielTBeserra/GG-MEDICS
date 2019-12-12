<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="view/Styles/style.css">
    <title>Seja bem vindo</title>
</head>

<body>
    <div class="main-content">
        <div class="menu-bar">
            <nav id="menu-itens">
                <ul>
                <li><a href="/Web/">Inicio</a></li>
                    <li><a href="/Web/search.php">Buscar</a></li>
                    <li><a href="/Web/profile.php">Perfil</a></li>
                </ul>
            </nav>
            <div class="logged-info">
                <p>Ola #{nome.paciente}! <a class="logout-button" href="controllers/logout.php">Logout</a></p>
            </div>
        </div>

        <div class="page-content">
            <div class="main-page-charts">
                <table class="tableList">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>CPF</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        #{itens.acom}
                    </tbody>
                </table>

            </div>

            

        </div>

    </div>


    <script src="view/scripts/redirect.js"></script>
</body>

</html>