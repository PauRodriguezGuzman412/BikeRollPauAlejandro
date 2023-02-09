function enableFederatedNumber(option) {
    var value = option.value;
    var federated_number = document.querySelector('[name="federated_num"]');
    if(value === "PRO") {
        federated_number.removeAttribute("disabled");
    federated_number.setAttribute("required","");
    return;
    }
    federated_number.removeAttribute("required");
    federated_number.setAttribute("disabled","");
    federated_number.value = "";
}

function checkBirthDate(input) {
    var inputDate = new Date(input.value);
    var maxDate = new Date(input.max);
    var today = new Date();
    if(inputDate > maxDate) {
        Swal.fire({
            title: '¡Error!',
            text: '¡Solo se permite el registro a mayores de 18 años!',
            icon: 'error',
            confirmButtonText: 'Entendido'
          })
          input.value ="";
    }
    
}

window.onload = function() {
    var input = document.querySelector('[name="date_of_birth"]');
    var inputYear = new Date(input.value).getFullYear();
    var today = new Date();
    input.setAttribute("max",((today.getFullYear() - 18) + '-' + ('0' + (today.getMonth()+ 1)).slice(-2)) + '-' + ('0' + (today.getDate())).slice(-2));
}