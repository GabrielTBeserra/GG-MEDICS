function atualizar() {
  var emailVal = document.querySelector("#email").value;
  var senhaVal = document.querySelector("#senha").value;

  console.log(emailVal);
  console.log(senhaVal);
  if (senhaVal.trim() != "") {
    senha(senhaVal);
  }
  if (emailVal.trim() != "") {
    email(emailVal);
  }
}

function email(emailVal) {
  $.ajax({
    url: "controllers/AtualizarEmail.php",
    type: "POST",
    data: {
      email: emailVal
    },
    dataType: "html"
  })
    .done(function(resposta) {
      if (resposta != "") {
        errorEmail();
      } else {
        alert("Alterado com sucesso!");
        location.reload();
      }
    })
    .fail(function(jqXHR, textStatus) {
      console.log("Request failed: " + textStatus);
    })
    .always(function() {
      console.log("completou");
    });
}

function senha(senhaVal) {
  $.ajax({
    url: "controllers/AtualizarSenha.php",
    type: "POST",
    data: {
      senha: senhaVal
    },
    dataType: "html"
  })
    .done(function(resposta) {
      console.log(resposta);
    })
    .fail(function(jqXHR, textStatus) {
      console.log("Request failed: " + textStatus);
    })
    .always(function() {
      console.log("completou");
    });
}

function errorEmail() {
  alert("Esse email ja esta cadastrado!");
}
