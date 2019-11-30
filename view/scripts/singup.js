const isMedic = document.querySelector("#medic");
const dataInput = document.querySelector("#data");
const hiper = document.querySelector("#hiper");
const tipoDia = document.querySelector("#tipoDiabete");

isMedic.addEventListener("change", (el) => {
    if (isMedic.checked) {
        dataInput.disabled = true;
        hiper.disabled = true;
        tipoDia.disabled = true;

    } else {
        dataInput.disabled = false;
        hiper.disabled = false;
        tipoDia.disabled = false;
    }
});

isMedic.dispatchEvent(new Event("change"));




function singup() {
    const isMedic = document.querySelector("#medic").checked;
    const dataInput = document.querySelector("#data").value;
    const hiper = document.querySelector("#hiper").checked;
    const nome = document.querySelector("#name").value;
    const cpf = document.querySelector("#cpf").value;
    const sexo = document.querySelector("input[name='sexo']:checked").value;
    const email = document.querySelector("#email").value;
    const password = document.querySelector("#password").value;
    const tipoDiabete = document.querySelector("#tipoDiabete").value;


    if (isMedic === true) {
        if (nome.trim() == "" || email.trim() == "" || password.trim() == "" || sexo == "") {
            preencha();
            return;
        };
    } else {
        if (dataInput.trim() == "" || nome.trim() == "" || email.trim() == "" || password.trim() == "" || sexo == "") {
            preencha();
            return;
        };
    }


    $.ajax({
        url: "controllers/SingUp.php",
        type: "POST",
        data: {
            password: password,
            medic: isMedic,
            sexo: sexo,
            cpf: cpf,
            hiper: hiper,
            name: nome,
            data: dataInput,
            email: email,
            tipoDiabete: tipoDiabete
        },
        dataType: "html"

    }).done(function(resposta) {
        console.log(resposta);
        if (resposta === "") {
            alert("Cadastrado com sucesso!");
            location.href = "/Web";
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

    incorreto.style.marginBottom = "15px";

    incorreto.style.display = "block";


    setTimeout(function() {
        incorreto.style.display = "none";
    }, 5000);



}

function preencha() {
    let preencha = document.querySelector("#preencha");

    preencha.style.marginBottom = "15px";

    preencha.style.display = "block";


    setTimeout(function() {
        preencha.style.display = "none";
    }, 5000);



}