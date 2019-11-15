$("#termo").keyup(function() {

    var termo = document.querySelector("#termo").value;

    termo = termo.trim();

    if (isNaN(termo) || termo === "") {
        termo = termo.replace(/ /g, "%");
        termo = "%" + termo + "%";
    } else {
        termo = termo + "%";
    }


    $.ajax({
        url: "models/select_patient.php",
        type: "POST",
        data: {
            termo: termo
        },
        dataType: "html"

    }).done(function(resposta) {
        console.log(resposta);
        let jsonList = JSON.parse(resposta);
        populate_table(jsonList);


    }).fail(function(jqXHR, textStatus) {
        console.log("Request failed: " + textStatus);

    }).always(function() {
        console.log("completou");
    });


});


$(document).ready(function() {

    $.ajax({
        url: "models/select_patient.php",
        type: "POST",
        data: {
            termo: "%%"
        },
        dataType: "html"

    }).done(function(resposta) {
        console.log(resposta);
        let jsonList = JSON.parse(resposta);
        populate_table(jsonList);


    }).fail(function(jqXHR, textStatus) {
        console.log("Request failed: " + textStatus);

    }).always(function() {
        console.log("completou");
    });

});



function populate_table(list) {
    var table = document.querySelector("#lista");

    table.innerHTML = '';

    list.forEach(function(data, index) {
        let tr = document.createElement("tr");
        let td1 = document.createElement("td");
        let td2 = document.createElement("td");
        let td3 = document.createElement("td");
        let td4 = document.createElement("td");

        let userId = document.createTextNode(data.idUsuario);
        let nome = document.createTextNode(data.nome);
        let cpf = document.createTextNode(data.cpfPaciente);
        let Buttonname = document.createTextNode("Acompanhar");
        let button = document.createElement("button");
        button.appendChild(Buttonname);
        button.setAttribute("id", data.idUsuario);
        button.setAttribute("name", data.idUsuario);
        button.setAttribute("onclick", "acompanhar(" + data.idUsuario + ")");


        td1.appendChild(userId);
        td2.appendChild(nome);
        td3.appendChild(button);
        td4.appendChild(cpf);
        tr.appendChild(td1);
        tr.appendChild(td2);

        tr.appendChild(td4);
        tr.appendChild(td3);
        table.appendChild(tr);


    });


}

function reload() {
    $.ajax({
        url: "models/select_patient.php",
        type: "POST",
        data: {
            termo: "%%"
        },
        dataType: "html"

    }).done(function(resposta) {
        console.log(resposta);
        let jsonList = JSON.parse(resposta);
        populate_table(jsonList);


    }).fail(function(jqXHR, textStatus) {
        console.log("Request failed: " + textStatus);

    }).always(function() {
        console.log("completou");
    });
}

function acompanhar(id) {
    $.ajax({
        url: "models/insert_acom.php",
        type: "POST",
        data: {
            idPat: id
        },
        dataType: "html"

    }).done(function(resposta) {
        console.log(resposta);
    }).fail(function(jqXHR, textStatus) {
        console.log("Request failed: " + textStatus);

    }).always(function() {
        console.log("completou");
    });

    reload();
}