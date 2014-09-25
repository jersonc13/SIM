$(function() {
    listarproductospedido();
    $("#frmProductoPedido").validate({
        errorElement: 'span',
        errorClass: 'help-block',
        submitHandler: function(form) {
            var botonEnviar = document.getElementById('btnregistrar');
            botonEnviar.disabled = true;
            $.ajax({
                type: "POST",
                url: "productopedido/registrarProductoPedido",
                data: $(form).serialize(),
                success: function(data) {
                    if (data == '1') {
                        alert("Datos ingresados correctamente");
                        botonEnviar.disabled = false;
                        listarproductospedido();
                    } else {
                        alert("Error al ingresar los datos");
                        botonEnviar.disabled = false;
                    }
                },
                error: function(data) {
                    alert("Error al ingresar los datos");
                }
            });
        },
        rules: {
            cbo_productoempresa: {
                required: true
            },
            txtcantidad: {
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
function listarproductospedido() {
    msgLoading("#mostrar_qry");
    $.ajax({
        type: "POST",
        url: "productopedido/listarProductopedido",
        cache: false,
        success: function(data) {
            $("#mostrar_qry").html(data);
        },
        error: function() {
            alert("Ha ocurrido un error, vuelva a intentarlo.");
        }
    });
}

function estadoPersona(nidvalor) {
    if (confirm('Esta seguro de editar este registro?')) {
        msgLoading("#mostrar_qry");
        $.ajax({
            type: "POST",
            url: "personanatural/estadoPersona",
            cache: false,
            data: {
                nidvalor: nidvalor
            },
            success: function(data) {
                switch (data) {
                    case "0":
                        alert("Ha ocurrido un error, vuelva a intentarlo.");
                        break;
                    case "1":
                        listarPersonas();
                        break;
                }
            },
            error: function() {
                alert("Ha ocurrido un error, vuelva a intentarlo.");
            }
        });
    }
}
