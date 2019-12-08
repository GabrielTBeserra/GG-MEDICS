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
                <p>Ola #{nome.paciente}! <a class="logout-button" href="controllers/logout.php">Logout</a></p>
            </div>
        </div>

        <div class="page-content"> 
            <div class="main-page-charts">
                <div id="chart-container">
                    <canvas id="graficoDiabete"></canvas>
                </div>
            </div>

            <!-- Gera o grafico da diabetes -->
            <div class="main-page-charts">
                <h4 class="insert-title">Inserir nova diabete</h4>
                <form class="new-insert" method="post" action="controllers/InserirDiabetes.php" onsubmit="return validate_diabetes();">
                    <label for="valor_dia">Valor da diabete</label>
                    <input type="number" id="valor_dia" name="valor_dia">
                    <label for="data_dia">Data da Medicao</label>
                    <input type="date" id="data_dia" name="data_dia">
                    <label for="horario_dia">Hora de medicao</label>
                    <input type="time" id="horario_dia" name="horario_dia">
                    <button type="submit">Inserir</button>
                </form>
            </div>

            <div class="main-page-charts">
                <div id="chart-container">
                    <canvas id="graficoPressao"></canvas>
                </div>
            </div>

            <!-- Gera o grafico de pressao -->
            <div class="main-page-charts">
                <h4 class="insert-title" >Inserir nova pressao</h4>
                <form class="new-insert"  method="post" action="controllers/InserirPressao.php" onsubmit="return validate_pressao();">
                    <label for="sistolico_press">Valor Sistolico</label>
                    <input type="number" id="sistolico_press" name="sistolico_press">
                    <label for="diastolico_press">Valor Diastolico</label>
                    <input type="number" id="diastolico_press" name="diastolico_press">
                    <label for="data">Data da Medicao</label>
                    <input type="date" id="data_press" name="data_press">
                    <label for="horario">Hora de medicao</label>
                    <input type="time" id="horario_press" name="horario_press">
                    <button type="submit">Inserir</button>
                </form>
            </div>

        </div>

    </div>

    <script src="view/scripts/validation.js"></script>
    <script src="view/scripts/Graficos.js"></script>
</body>

</html>