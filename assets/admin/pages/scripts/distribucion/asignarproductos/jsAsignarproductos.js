$(function() {
    asignarproductos();
    $("#frmProductoxEmpresa").validate({
        errorElement: 'span',
        errorClass: 'help-block',
        submitHandler: function(form) {
            $.ajax({
                type: "POST",
                url: "asignarproductos/registrarproductoxempresa",
                data: $(form).serialize(),
                success: function(data) {
                    switch (data) {
                        case "1":
                            alert("Datos ingresados correctamente");
                            asignarproductos();
                            break;
                        case "2":
                            alert("La empresa ya cuenta con el producto");
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
            cbo_producto: {
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
function asignarproductos() {
    msgLoading("#mostrar_qry");
    $.ajax({
        type: "POST",
        url: "asignarproductos/listarProductosEmpresas",
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


function estadoProducto(nidvalor) {
    if (confirm('Esta seguro de editar este registro?')) {
        msgLoading("#mostrar_qry");
        $.ajax({
            type: "POST",
            url: "asignarproductos/estadoProducto",
            cache: false,
            data: {
                nidvalor: nidvalor
            },
            success: function(data) {
                switch (data) {
                    case "0":
                        alert("Ha ocurrido un error, vuelva a intentarlo.");
                        asignarproductos();
                        break;
                    case "1":
                        asignarproductos();
                        break;
                    case "2":
                        alert("La empresa ya cuenta con el producto");
                        asignarproductos();
                        break;
                }
            },
            error: function() {
                alert("Ha ocurrido un error, vuelva a intentarlo.");
            }
        });
    }
}
