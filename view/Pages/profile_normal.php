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
                    <li><a href="/Web">Inicio</a></li>
                    <li><a href="/Web/profile.php">Perfil</a></li>
                </ul>
            </nav>

            <div class="logged-info">
                <p>Ola #{nome.paciente}! <a href="controllers/logout.php">Logout</a></p>
            </div>
        </div>

        <div class="page-content">
            <div class="profile-infos">
                <label for="nome">Nome</label>
                <input id="nome" type="text" name="nome" value="#{nome.paciente}">
                <label for="email">Email</label>
                <input id="email" type="email" name="email" value="#{email.paciente}">
                <label for="cpf">CPF</label>
                <input id="cpf" type="text" name="cpf" value="#{cpf.paciente}" readonly>
                <label for="sexo">Sexo</label>
                <input id="sexo" type="text" name="sexo" value="#{sexo.paciente}" readonly>
                <label for="dataNasc">Data Nascimento</label>
                <input id="dataNasc" type="date" name="dataNasc" value="#{dataNasc.paciente}">
            </div>
        </div>

    </div>
</body>

</html>