function enableFederatedNumber(option) {
    var value = option.value;
    var federated_number = document.querySelector('[name="federated_num"]');
    if(value === "PRO") {
        federated_number.removeAttribute("disabled");
        return;
    }
    federated_number.setAttribute("disabled","");
    federated_number.value = "";
}

function checkBirthDate(input) {
    var inputYear = new Date(input.value).getFullYear();
    var today = new Date();
    input.setAttribute("max",('0' + today.getDate()).slice(-2) + '-' + ('0' + (today.getMonth()+1)).slice(-2) + '-' + (today.getFullYear() - 18));
    console.log(input.max);
    if(today.getFullYear() - inputYear < 18) {
        Swal.fire({
            title: '¡Error!',
            text: '¡Solo se permite el registro a mayores de 18 años!',
            icon: 'error',
            confirmButtonText: 'Entendido'
          })
          input.value ="";
    }
    
}