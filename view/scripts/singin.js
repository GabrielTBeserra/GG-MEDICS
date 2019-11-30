function singin() {
    let user = document.querySelector("#user").value;
    let password = document.querySelector("#password").value;


    user = user.trim();
    password = password.trim();

    if (user === "" || password === "") {
        incorrect();
        return;
    }

    $.ajax({
        url: "controllers/LoginController.php",
        type: "POST",
        data: {
            user: user,
            password: password
        },
        dataType: "html"

    }).done(function(resposta) {

        console.log(resposta);

        if (resposta === "true") {
            location.href = "/Web";
            location.reload();
        } else {
            incorrect();
        }


    }).fail(function(jqXHR, textStatus) {
        console.log("Request failed: " + textStatus);

    }).always(function() {
        console.log("Request complete");
    });
}



function incorrect() {
    let incorreto = document.querySelector("#incorreto");
    let user = document.querySelector("#user");
    let password = document.querySelector("#password");

    $("#teste").effect("shake");

    incorreto.style.marginBottom = "15px";


    incorreto.style.display = "block";


    user.style.borderColor = "red";
    password.style.borderColor = "red";

    setTimeout(function() {
        incorreto.style.display = "none";
    }, 5000);



}