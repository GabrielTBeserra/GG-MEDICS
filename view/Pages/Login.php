<html>

<head>
    <link rel="stylesheet" type="text/css" href="view/Styles/login.css" />
</head>

<body>
    <section>
        <div class="form-new">
            <form method="POST" action="controllers/LoginController.php">
                <label for="client-code">Usuario</label>
                <input id="user" class="input-form" name="user" type="text" required>
                <br />
                <label for="file-name">Senha</label>
                <input id="password" class="input-form" name="password" type="password" required>
                <a href="singup.php">Cadastre-se</a>
                <button type="submit" class="submit-button" onclick="submitform();">Submit</button>
            </form>
        </div>
    </section>
</body>

</html>