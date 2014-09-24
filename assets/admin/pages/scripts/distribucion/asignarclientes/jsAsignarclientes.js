$(function() {
    asignarclientes();
    $("#frmClientesxEmpresa").validate({
        errorElement: 'span',
        errorClass: 'help-block',
        submitHandler: function(form) {
            $.ajax({
                type: "POST",
                url: "asignarclientes/registrarClientesxEmpresa",
                data: $(form).serialize(),
                success: function(data) {
                    switch (data) {
                        case "1":
                            alert("Datos ingresados correctamente");
                            asignarclientes();
                            break;
                        case "2":
                            alert("La empresa ya cuenta con el cliente");
                            break;
                    }
                },
                error: function(data) {
                    alert("Error al ingresar los datos");
                }
            });
        },
        rules: {
            cbo_empresa: {
                required: true
            },
            cbo_cliente: {
                required: true
            }
        },
        highlight: function(element) { // hightlight error inputs
            $(element)
                    .closest('.form-group').removeClass('has-success').addClass('has-error'); // set error class to the control group
        },
        unhighlight: function(element) { // revert the change done by hightlight
            $(element)
                    .closest('.form-group').removeClass('has-error'); // set error class to the control group
        }
    });
});
function asignarclientes() {
    msgLoading("#mostrar_qry");
    $.ajax({
        type: "POST",
        url: "asignarclientes/listarClientesxEmpresas",
        cache: false,
        success: function(data) {
            $("#mostrar_qry").html(data);
        },
        error: function() {
            alert("Ha ocurrido un error, vuelva a intentarlo.");
        }
    });
}

function buscarDNI() {
    $.ajax({
        type: "POST",
        url: "personanatural/buscarDNI",
        cache: false,
        data: {
            txtDetalleDNI: $('#txtDetalleDNI').val()
        },
        success: function(data) {
            $("#detalle_lista").html(data);
//            alert(data);
        },
        error: function() {
            alert("Ha ocurrido un error, vuelva a intentarlo.");
        }
    });
}

function estadoCliente(nidvalor) {
    if (confirm('Esta seguro de editar este registro?')) {
        msgLoading("#mostrar_qry");
        $.ajax({
            type: "POST",
            url: "asignarclientes/estadoCliente",
            cache: false,
            data: {
                nidvalor: nidvalor
            },
            success: function(data) {
                switch (data) {
                    case "2":
                        alert("Cliente ya está asignado a la misma empresa");
                        asignarclientes();
                        break;
                    case "1":
                        asignarclientes();
                        break;
                }
            },
            error: function() {
                alert("Ha ocurrido un error, vuelva a intentarlo.");
            }
        });
    }
}
