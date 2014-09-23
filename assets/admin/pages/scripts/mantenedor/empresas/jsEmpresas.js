$(function() {
    listarEmpresas();
});

function registrarUsuarios() {
    contrasena = new String(txtcontrasena.value);
    if ($('#txtusuario').val() == '' || $('#txtcontrasena').val() == '' || contrasena.length<8) {
        alert("debe llenar todos los campos requeridos");
    }
    else {
        $.ajax({
            type: "POST",
            url: "usuarios/registrarUsuarios",
            cache: false,
            data: {
                txtnperid: $('#txtnperid').val(),
                txtusuario: $('#txtusuario').val(),
                txtcontrasena: $('#txtcontrasena').val()
            },
            success: function(data) {
                alert("Datos ingresados correctamente");
//            alert(data);
            },
            error: function() {
                alert("Error al ingresar los datos");
            },
        });
    }
}

function buscarPersona() {
    $.ajax({
        type: "POST",
        url: "empresas/buscarPersona",
        cache: false,
        data: {
            txtPersona: $('#txtPersona').val()
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


function listarEmpresas() {
    msgLoading("#mostrar_qry");
    $.ajax({
        type: "POST",
        url: "empresas/listarEmpresas",
        cache: false,
        success: function(data) {
            $("#mostrar_qry").html(data);
        },
        error: function() {
            alert("Ha ocurrido un error, vuelva a intentarlo.");
        }
    });
}

function crearusuario(nidvalor) {
    msgLoading("#detalle_lista");
    $.ajax({
        type: "POST",
        url: "usuarios/vista_crearusuario",
        cache: false,
        data: {
            nidvalor: nidvalor
        },
        success: function(data) {
            if (data == '2') {
                alert("Ya cuenta con usuario");
                buscarPersona()
            } else {
                $("#detalle_lista").html(data);
            }


        },
        error: function() {
            alert("Ha ocurrido un error, vuelva a intentarlo.");
        }
    });

}

function asignarPermisos(nidvalor) {
    msgLoading("#detalle_lista");
    $.ajax({
        type: "POST",
        url: "permisos/opciones",
        cache: false,
        data: {
            nidvalor: nidvalor
        },
        success: function(data) {
            $("#detalle_lista").html(data);
        },
        error: function() {
            alert("Ha ocurrido un error, vuelva a intentarlo.");
        }
    });

}

function estadoEmpresas(nidvalor) {
    if (confirm('Esta seguro de editar este registro?')) {
        msgLoading("#mostrar_qry");
        $.ajax({
            type: "POST",
            url: "empresas/estadoEmpresas",
            cache: false,
            data: {
                nidvalor: nidvalor
            },
            success: function(data) {
                switch (data) {
                    case "0":
                        alert("la persona ya tiene usuario");
//                        listarUsuarios();
                        break;
                    case "1":
                        listarUsuarios();
                        break;
                    case "2":
                        alert("Ya existe otra persona con el mismo usuario");
//                        listarUsuarios();
                        break;
                }
            },
            error: function() {
                alert("Ha ocurrido un error, vuelva a intentarlo.");
            }
        });
    }
}

function buscarUsuarios() {
    $.ajax({
        type: "POST",
        url: "usuarios/buscarUsuarios",
        cache: false,
        data: {
            txtbuscarArea: $('#txtbuscarArea').val()
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

