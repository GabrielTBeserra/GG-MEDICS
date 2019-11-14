function validate_diabetes() {
    const valor = document.querySelector("#valor_dia").value;
    const data = document.querySelector("#data_dia").value;
    const horario = document.querySelector("#horario_dia").value;


    if (valor.trim() === "" || data.trim() === "" || horario.trim() === "") {
        alert("Preencha todos os campos!");
        return false;
    } else {
        return true;
    }
}

function validate_pressao() {
    const sistolico = document.querySelector("#sistolico_press").value;
    const diastolico = document.querySelector("#diastolico_press").value;
    const data = document.querySelector("#data_press").value;
    const horario = document.querySelector("#horario_press").value;



    if (diastolico.trim() === "" || sistolico.trim() === "" || data.trim() === "" || horario.trim() === "") {
        alert("Preencha todos os campos!");
        return false;
    } else {
        return true;
    }
}