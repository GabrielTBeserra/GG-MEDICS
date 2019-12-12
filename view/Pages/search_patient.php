<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
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
            <div class="search-page">
                <label class="search-page-label" for="termo">Termo de busca (id ou nome)</label>
                <input class="search-page-termo" type="text" id="termo" name="termo">
            </div>



            <div class="search-page">
                <table class="tableList">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NOME</th>
                            <th>CPF</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody id="lista" name="lista">

                    </tbody>
                </table>
            </div>



        </div>

    </div>
    <script src="view/scripts/search.js"></script>
</body>

</html>