var identifierInput = document.getElementById("person_person_identifier");;
var activities = document.getElementById("person_person_type");
var identifier = document.getElementsByTagName("label")[1];
var nameLabel = document.getElementsByTagName("label")[2];

const masks = {
    cpf(value) {
        return value
            .replace(/\D/g, '')
            .replace(/(\d{3})(\d)/, '$1.$2')
            .replace(/(\d{3})(\d)/, '$1.$2')
            .replace(/(\d{3})(\d{1,2})/, '$1-$2')
            .replace(/(-\d{2})\d+?$/, '$1')
    },
    cnpj(value) {
        return value
            .replace(/\D/g, '')
            .replace(/(\d{2})(\d)/, '$1.$2')
            .replace(/(\d{3})(\d)/, '$1.$2')
            .replace(/(\d{3})(\d)/, '$1/$2')
            .replace(/(\d{4})(\d{1,2})/, '$1-$2')
            .replace(/(-\d{2})\d+?$/, '$1')
    }
}

activities.addEventListener("click", function() {
    var options = activities.querySelectorAll("option");
    var count = options.length;
    var text = options.value;
});

activities.addEventListener("change", function() {

    if(activities.value == "F")
    {
        identifier.innerHTML = "CPF: ";
        nameLabel.innerHTML = "Nome Próprio: "
        identifierInput.setAttribute("data-js", "cpf");
    }
    else if (activities.value == "J")
    {
        identifier.innerHTML = "CNPJ: ";
        nameLabel.innerHTML = "Razão Social: "
        identifierInput.setAttribute("data-js", "cnpj");
    }

    identifierInput.addEventListener('input', updateValue);

});


function updateValue(event) {
    identifierInput.value = masks[identifierInput.dataset.js](event.target.value);
}

