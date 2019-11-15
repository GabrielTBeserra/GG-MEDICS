<html>

<head>
    <link rel="stylesheet" type="text/css" href="view/Styles/login.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<body>
    <section>
        <div class="form-new">
            <form method="POST" id="singup-form">
                <h4 id="incorreto" style="display: none;">Email ou cpf/crm ja cadastrado!</h4>
                <h4 id="preencha" style="display: none;">Preencha todos dados necessarios!</h4>
                <label for="name">Nome</label>
                <input id="name" class="input-form" name="name" type="text" required>
                <label for="email">Email</label>
                <input id="email" class="input-form" name="email" type="email" required>
                <label for="data">Data de Nascimento</label>
                <input id="data" class="input-form" name="data" type="date">

                <label for="tipoDiabete">Tipo de diabete que voce tem</label>
                <select id="tipoDiabete" name="tipoDiabete" class="input-form">
                    <option value="4" selected>Nao diabetico</option>
                    <option value="1">Tipo 1</option>
                    <option value="2">Tipo 2</option>
                    <option value="3">Gestacional</option>
                </select>

                <label for="hiper">Hipertenso ?</label>
                <input id="hiper" name="hiper" type="checkbox" class="input-form-ch">

                <label for="sexo">Sexo</label>
                <br />
                <input type="radio" name="sexo" id="sexo" value="M" class="input-form-rad" checked>Masculino<br>
                <input type="radio" name="sexo" id="sexo" value="F" class="input-form-rad">Feminino<br>


                <label for="medic">Medico ?</label>
                <input id="medic" name="medic" type="checkbox" class="input-form-ch">

                <label for="cpf">CPF OU CRM</label>
                <input id="cpf" class="input-form" name="cpf" type="text" required>
                <label for="file-name">Senha</label>
                <input id="password" class="input-form" name="password" type="password" required>
                <button type="button" onclick="singup();" class="submit-button-cad">Cadastrar</button>
            </form>
        </div>
    </section>


    <script src="view/scripts/singup.js"></script>
</body>

</html>