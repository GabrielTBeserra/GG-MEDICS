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