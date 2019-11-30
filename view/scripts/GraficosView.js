var vars = {};

$(document).ready(function () {

    var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function (m, key, value) {
        vars[key] = value;
    });

    console.log(vars['id']);
    showGraph();
});


function showGraph() {
    $.ajax({
        url: "controllers/NiveisDiabetes.php",
        type: "POST",
        data: {
            id: vars['id']
        },
        dataType: "html"

    }).done(function (resposta) {
        resposta = JSON.parse(resposta);

        var name = [];
        var marks = [];

        for (var i in resposta) {
            name.push(resposta[i].dataMedicao);
            marks.push(resposta[i].valorMedido);
        }

        var chartdata = {
            labels: name,
            datasets: [
                {
                    label: 'Nivel glicose',
                    backgroundColor: '#49e2ff',
                    borderColor: '#9f34eb',
                    hoverBackgroundColor: '#CCCCCC',
                    hoverBorderColor: '#666666',
                    data: marks,
                    fill: false
                }
            ]
        };

        var graphTarget = $("#graficoDiabete");

        var barGraph = new Chart(graphTarget, {
            type: 'line',
            data: chartdata
        });

    }).fail(function (jqXHR, textStatus) {
        console.log("Request failed: " + textStatus);

    }).always(function () {
        console.log("completou");
    });



    /*

    */
    $.ajax({
        url: "controllers/NiveisPressao.php",
        type: "POST",
        data: {
            id: vars['id']
        },
        dataType: "html"

    }).done(function (resposta) {
        resposta = JSON.parse(resposta);

        var name = [];
        var marks = [];
        var values = [];

        for (var i in resposta) {
            name.push(resposta[i].dataMedicao);

            marks.push(resposta[i].valorSistolico);

            values.push(resposta[i].valorDiastolico);
        }

        var chartdata = {
            labels: name,
            datasets: [
                {
                    label: 'Valor Sistolico',
                    backgroundColor: '#49e2ff',
                    borderColor: '#46d5f1',
                    hoverBackgroundColor: '#CCCCCC',
                    hoverBorderColor: '#666666',
                    data: marks,
                    fill: false
                }, {
                    label: 'Valor Diastolico',
                    backgroundColor: '#eb4034',
                    borderColor: '#46d5f1',
                    hoverBackgroundColor: '#CCCCCC',
                    hoverBorderColor: '#666666',
                    data: values,
                    fill: false
                }
            ]
        };

        var graphTarget = $("#graficoPressao");

        var barGraph = new Chart(graphTarget, {
            type: 'bar',
            data: chartdata
        });

    }).fail(function (jqXHR, textStatus) {
        console.log("Request failed: " + textStatus);

    }).always(function () {
        console.log("completou");
    });
}
