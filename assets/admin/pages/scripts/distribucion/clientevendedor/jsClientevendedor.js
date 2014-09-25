$(function() {
    clientevendedor();
    $("#frmClientesxVendedor").validate({
        errorElement: 'span',
        errorClass: 'help-block',
        submitHandler: function(form) {
            $.ajax({
                type: "POST",
                url: "clientevendedor/registrarClientesxVendedor",
                data: $(form).serialize(),
                success: function(data) {
                    if (data == '1') {
                        alert("Datos ingresados correctamente");
                    } else {
                        alert("Error al ingresar los datos");
                    }
                },
                error: function(data) {
                    alert("Error al ingresar los datos");
                }
            });
        },
        rules: {
            cbo_vendedor: {
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
function clientevendedor() {
    msgLoading("#mostrar_qry");
    $.ajax({
        type: "POST",
        url: "clientevendedor/listarClientesxVendedor",
        cache: false,
        success: function(data) {
            $("#mostrar_qry").html(data);
        },
        error: function() {
            alert("Ha ocurrido un error, vuelva a intentarlo.");
        }
    });
}

function estadoClientevendedor(nidvalor) {
    if (confirm('Esta seguro de editar este registro?')) {
        msgLoading("#mostrar_qry");
        $.ajax({
            type: "POST",
            url: "clientevendedor/estadoClientevendedor",
            cache: false,
            data: {
                nidvalor: nidvalor
            },
            success: function(data) {
                switch (data) {
                    case "0":
                        alert("Ha ocurrido un error, vuelva a intentarlo.");
                        clientevendedor();
                        break;
                    case "1":
                        clientevendedor();
                        break;
                }
            },
            error: function() {
                alert("Ha ocurrido un error, vuelva a intentarlo.");
            }
        });
    }
}
