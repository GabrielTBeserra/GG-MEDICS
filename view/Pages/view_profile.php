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
                <button class="button-voltar" onclick="location.href = document.referrer;">Voltar</button>
                </ul>
            </nav>
        </div>



        <div class="page-content"> 
            <div class="main-page-charts">
                <div class="charts-canvas">
                <p>Nome: #{nome.paciente}</p>
                <p>Tipo De Diabetes: #{diabete.paciente}</p>
                <p>#{hipertenso.paciente}</p>
                <p>Data de nascimento: #{dataNasci.paciente} (Idade: #{idade.paciente})</p><p></p>
                </div>
                
            </div>

            <div class="main-page-charts">
            <h3 class="charts-title">Niveis de diabetes</h3>
                <div class="charts-canvas" id="chart-container">
                    <canvas  id="graficoDiabete"></canvas>
                </div>
            </div>

            

            <div class="main-page-charts">
            <h3 class="charts-title">Niveis de pressao</h3>
                <div class="charts-canvas" id="chart-container">
                    <canvas  id="graficoPressao"></canvas>
                </div>
            </div>

            

        </div>

    </div>
    <script src="view/scripts/GraficosView.js"></script>
</body>

</html>