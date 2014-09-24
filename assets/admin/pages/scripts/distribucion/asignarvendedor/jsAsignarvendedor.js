$(function() {
    asignarvendedor();
    $("#frmVendedorxEmpresa").validate({
        errorElement: 'span',
        errorClass: 'help-block',
        submitHandler: function(form) {
            $.ajax({
                type: "POST",
                url: "asignarvendedor/registrarVendedorxEmpresa",
                data: $(form).serialize(),
                success: function(data) {
                   switch (data) {
                        case "1":
                            alert("Datos ingresados correctamente");
                            asignarvendedor();
                            break;
                        case "2":
                            alert("La empresa ya cuenta con el vendedor");
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
            cbo_vendedor: {
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
function asignarvendedor() {
    msgLoading("#mostrar_qry");
    $.ajax({
        type: "POST",
        url: "asignarvendedor/listarVendedorxEmpresas",
        cache: false,
        success: function(data) {
            $("#mostrar_qry").html(data);
        },
        error: function() {
            alert("Ha ocurrido un error, vuelva a intentarlo.");
        }
    });
}


function estadoVendedor(nidvalor) {
    if (confirm('Esta seguro de editar este registro?')) {
        msgLoading("#mostrar_qry");
        $.ajax({
            type: "POST",
            url: "asignarvendedor/estadoVendedor",
            cache: false,
            data: {
                nidvalor: nidvalor
            },
            success: function(data) {
                switch (data) {
                    case "2":
                        alert("Vendedor ya está asignado a la misma empresa");
                        asignarvendedor();
                        break;
                    case "1":
                        asignarvendedor();
                        break;
                }
            },
            error: function() {
                alert("Ha ocurrido un error, vuelva a intentarlo.");
            }
        });
    }
}
