<html>

<head>
    <link rel="stylesheet" type="text/css" href="view/Styles/login.css" />
</head>

<body>
    <section>
        <div class="form-new">
            <form method="POST" id="singup-form" action="controllers/SingUp.php">
                <label for="name">Nome</label>
                <input id="name" class="input-form" name="name" type="text" required>
                <label for="email">Email</label>
                <input id="email" class="input-form" name="email" type="email" required>
                <label for="data">DataNascimento</label>
                <input id="data" class="input-form" name="data" type="date">
                <br />
                <select name="tipoDiabete">
                    <option value="nao" selected>Nao diabetico</option>
                    <option value="1">Tipo 1</option>
                    <option value="2">Tipo 2</option>
                    <option value="3">Gestacional</option>
                </select>
                <br />
                <label for="hiper">Hipertenso ?</label>
                <br />
                <input id="hiper" name="hiper" type="checkbox">
                <br />
                <label>Sexo</label>
                <br />
                <input type="radio" name="sexo" value="m">Masculino<br>
                <input type="radio" name="sexo" value="f">Feminino<br>

                <br />
                <label for="medic">Medico ?</label>
                <br />
                <input id="medic" name="medic" type="checkbox">
                <br />
                <label for="cpf">CPF OU CRM</label>
                <input id="cpf" class="input-form" name="cpf" type="text" required>
                <label for="file-name">Senha</label>
                <input id="password" class="input-form" name="password" type="password" required>
                <button type="submit" class="submit-button">Submit</button>
            </form>
        </div>
    </section>


    <script src="view/scripts/singup.js"></script>
</body>

</html>