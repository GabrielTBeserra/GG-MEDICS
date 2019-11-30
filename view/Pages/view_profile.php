<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
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
                <div id="chart-container">
                    <canvas id="graficoDiabete"></canvas>
                </div>
            </div>

            

            <div class="main-page-charts">
                <div id="chart-container">
                    <canvas id="graficoPressao"></canvas>
                </div>
            </div>

            

        </div>

    </div>
    <script src="view/scripts/GraficosView.js"></script>
</body>

</html>