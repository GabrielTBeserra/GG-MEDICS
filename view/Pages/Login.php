<html>

<head>
    <link rel="stylesheet" type="text/css" href="view/Styles/login.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>

<body>
    <section>
        <div class="form-new" id="teste">
            <form method="POST">
                <h4 id="incorreto" style="display: none;">Usuario ou senha incorretos!</h4>

                <label for="client-code">Email</label>
                <input id="user" class="input-form" name="user" type="text" required>
                <br />
                <label for="file-name">Senha</label>
                <input id="password" class="input-form" name="password" type="password" required>
                <div class="buttons">
                    <a class="singup-button" href="singup.php">Cadastre-se</a>
                    <button type="button" onclick="singin();" class="login-button">Entrar</button>
                </div>
            </form>
        </div>
    </section>

    <script src="view/scripts/singin.js"></script>
</body>

</html>