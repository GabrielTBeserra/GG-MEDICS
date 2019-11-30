<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
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
                    <li><a href="/Web/profile.php">Perfil</a></li>
                </ul>
            </nav>

            <div class="logged-info">
                <p>Ola #{nome.paciente}! <a href="controllers/logout.php">Logout</a></p>
            </div>
        </div>

        <div class="page-content">
            <div class="main-page-charts">
                <h3>Suas medidas de glicose</h3>
                <table style="width:100%">
                    <thead>
                        <tr>
                            <th>Valor</th>
                            <th>Data</th>
                        </tr>
                    </thead>
                    <tbody>
                        #{itens.diabete}
                    </tbody>
                </table>
            </div>

            <div class="main-page-resume">
                <h3>Suas medidas de pressao</h3>
                <table style="width:100%">
                    <thead>
                        <tr>
                            <th>Sistolico</th>
                            <th>Diastolico</th>
                            <th>Data Medicao</th>
                        </tr>
                    </thead>
                    <tbody>
                        #{itens.pressao}
                    </tbody>
                </table>
            </div>



        </div>

    </div>

</body>

</html>