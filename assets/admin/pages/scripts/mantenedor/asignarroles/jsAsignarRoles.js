$(function() {
    listarUsuarios();
});

function registrarPermisos() {
    $.ajax({
        type: "POST",
        url: "asignarroles/registrarUsuarios",
        cache: false,
        data: {
            txtnperid: $('#txtnperid').val(),
//            txtusuario: $('#txtusuario').val(),
//            txtcontrasena: $('#txtcontrasena').val(),
            cbo_tipousuarios: $('#cbo_tipousuarios').val()
        },
        success: function(data) {
            alert("Datos ingresados correctamente");
//            alert(data);
        },
        error: function() {
            alert("Error al ingresar los datos");
        }
    });
}

function buscarPersona() {
    $.ajax({
        type: "POST",
        url: "asignarroles/buscarPersona",
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


function listarUsuarios() {
    msgLoading("#mostrar_qry");
    $.ajax({
        type: "POST",
        url: "usuarios/listarUsuarios",
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
        url: "asignarroles/vista_crearusuario",
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

function estadoUsuarios(nidusuarios) {
    if (confirm('Esta seguro de editar este registro?')) {
        msgLoading("#mostrar_qry");
        $.ajax({
            type: "POST",
            url: "usuarios/estadoUsuarios",
            cache: false,
            data: {
                nidusuarios: nidusuarios
            },
            success: function(data) {
                switch (data) {
                    case "0":
                        alert("Ha ocurrido un error, vuelva a intentarlo.");
                        break;
                    case "1":
                        listarAreas();
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

