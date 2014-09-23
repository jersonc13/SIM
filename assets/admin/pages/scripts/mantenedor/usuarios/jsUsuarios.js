$(function() {
    listarUsuarios();
});

function registrarUsuarios() {
    contrasena = new String(txtcontrasena.value);
    var rootNode = $("#listPermisos").dynatree("getRoot");
    console.log(rootNode.data.key);
    var selNodes = rootNode.tree.getSelectedNodes();
    var selKeys = $.map(selNodes, function(node1){
        if(node1.parent.data.key != '_1'){
            return node1.data.key;
        }
    });

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
                txtcontrasena: $('#txtcontrasena').val(),
                ids:selKeys
            },
            success: function(data) {
                alert("Datos ingresados correctamente");
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
        url: "usuarios/buscarPersona",
        cache: false,
        data: {
            txtPersona: $('#txtPersona').val()
        },
        success: function(data) {
            $("#detalle_lista").html(data);

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
        url: "permisos/getPermisos",
        cache: false,
        data: {
            nidvalor: nidvalor
        },
        success: function(data) {
            if ( data == '3' ) {
                alert("Debe registrar usuario!!");
                buscarPersona();
            }else{
                $("#detalle_lista").html(data);                
            }
        },
        error: function() {
            alert("Ha ocurrido un error, vuelva a intentarlo.");
        }
    });

}

function estadoUsuarios(nidvalor) {
    if (confirm('Esta seguro de editar este registro?')) {
        msgLoading("#mostrar_qry");
        $.ajax({
            type: "POST",
            url: "usuarios/estadoUsuarios",
            cache: false,
            data: {
                nidvalor: nidvalor
            },
            success: function(data) {
                switch (data) {
                    case "0":
                    alert("la persona ya tiene usuario");
                    break;
                    case "1":
                    listarUsuarios();
                    break;
                    case "2":
                    alert("Ya existe otra persona con el mismo usuario");
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
        },
        error: function() {
            alert("Ha ocurrido un error, vuelva a intentarlo.");
        }
    });
}

function registrarPermisos() {
    var rootNode = $("#listPermisos").dynatree("getRoot");
    console.log(rootNode.data.key);
    var selNodes = rootNode.tree.getSelectedNodes();
    var selKeys = $.map(selNodes, function(node1){
        if(node1.parent.data.key != '_1'){
            return node1.data.key;
        }
    });


    $.ajax({
        url:'permisos/setPermisosIns',
        type:'POST',
        cache:false,
        data: {
            ids:selKeys,
            pid:$("#txtpid").val()
        },
        success: function(data) {
            console.log(data);
            $("#detalle_lista").html(data);
            if (data=="1") {
                alert("Se han aplicado las condiciones de configuración con éxito");
                buscarPersona();
            } else{
                alert("Hubo un inconveniente al guardar su configuración");
            }            
        },
        error: function() {
            alert("Error al ingresar los datos");
        }
    });

}

