function checkIfRegistered() {
    var contenedor = document.getElementById("duplicatedDNI");
    var dni = document.getElementById("dni").value;

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    
    var request = $.ajax({
        
        type: "POST",
        url: "{{ ('courses.checkIfRegistered') }}",
        data:  { 'dni' : dni },
        dataType: "json" ,
        contentType: false,
        cache: false,
        processData: false,
    });

    request.done(function(data) {
        if(data.includes("Registro encontrado")) {
            contenedor.style.visibility = "visible";
        }
    });

    request.fail(function(jqXHR,textStatus) {
        $(contenedor).fadeIn(1000).html("Hubo un error: " + textStatus);
    });
}