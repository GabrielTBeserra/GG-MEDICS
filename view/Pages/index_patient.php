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

            <div class="main-page-charts">
                <h4>Inserir nova diabete</h4>
                <form method="post" action="models/inserirDiabete.php">
                    <label for="valor">Valor da diabete</label>
                    <input type="number" id="valor" name="valor">
                    <label for="data">Data da Medicao</label>
                    <input type="date" id="data" name="data">
                    <label for="horario">Hora de medicao</label>
                    <input type="time" id="horario" name="horario">
                    <button>Inserir</button>
                </form>
            </div>

            <div class="main-page-resume">
                <h4>Inserir nova pressao</h4>
                <form method="post" action="models/inserirPressao.php">
                    <label for="sistolico">Valor Sistolico</label>
                    <input type="number" id="sistolico" name="sistolico">
                    <label for="diastolico">Valor Diastolico</label>
                    <input type="number" id="diastolico" name="diastolico">
                    <label for="data">Data da Medicao</label>
                    <input type="date" id="data" name="data">
                    <label for="horario">Hora de medicao</label>
                    <input type="time" id="horario" name="horario">
                    <button>Inserir</button>
                </form>
            </div>

        </div>

    </div>
</body>

</html>