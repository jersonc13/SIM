function ValidaCKEditormini(IdTextArea){
    CKEDITOR.instances[IdTextArea].updateElement();
}
function NewCKEditormini(IdTextArea){
    var instance = CKEDITOR.instances[IdTextArea];
    if (instance) {
        CKEDITOR.remove(CKEDITOR.instances[IdTextArea]);
    }
    var config = {
        toolbar:
        [
        ['Bold', 'Italic', 'Underline', '-', 'NumberedList', 'BulletedList', '-', 'Undo', 'Redo', '-','JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock'],
        ]
    };
    ////
    $( '#'+IdTextArea ).ckeditor(config);

}
function ClearCKEditormini(IdTextArea){
    var editor = CKEDITOR.instances[IdTextArea];
    if (editor) {
        editor.destroy(true);
    }
    NewCKEditormini(IdTextArea)
}
function initEvtDel(funcion){ 
    $(".ui-icon-trash").on("click",function(e){
        e.preventDefault();
        var fila = $(this).parents('tr');
        var fn =""+funcion+"("+$(fila).attr('id')+")";                                    
        confirmar("Confirmar","¿Seguro que desea retirar el registro seleccionado?",fn);
    });
}
function initEvtConf(funcion){ 
    $(".ui-icon-check").on("click",function(e){
        e.preventDefault();
        var fila = $(this).parents('tr');
        var fn =""+funcion+"("+$(fila).attr('id')+")";                                    
        confirmar("Confirmar","¿Seguro que desea confirmar la operacion?",fn);
    });
}

function initEvtUpd(url,title,alto,ancho,func_close){              
    $('.ui-icon-pencil').each(function(){
        $("#"+this.id).click(function(e){
            e.preventDefault();
            var fila =$(this).parents('tr');
            set_popup(url+$(fila).attr('id'),title,alto,ancho,'',func_close);                                                  
        })
    });
}
function initEvtUpdChild(url,title,alto,ancho,func_close){              
    $('.ui-icon-pencil').each(function(){
        $("#"+this.id).click(function(e){
            e.preventDefault();
            var fila =$(this).parents('tr');
            set_popupChild(url+$(fila).attr('id'),title,alto,ancho,'',func_close);                                                  
        })
    });
}

function initEvtOpc(clase_icono,funcion){    
    $(".ui-icon-"+clase_icono).each(function(){
        $("#"+this.id).click(function(e){
            e.preventDefault();
            var fila =$(this).parents('tr');
            eval(funcion);
        })
    });    
}

function initEvtOpcId(clase_icono,funcion,parametros){ 
    /*
     *@parametros : solo aceptara datos con formato Objeto Json
     *@parametros : devolvera un objeto json (por el momento)
     */   
    $(".ui-icon-"+clase_icono).each(function(){
        $("#"+this.id).click(function(e){
            e.preventDefault();
            var fila =$(this).parents('tr');
            var idObj = $(fila).attr('id'); 
            var param;
            if (parametros != undefined && parametros != '') {
                param = new Object(parametros);
                param.cx = idObj;               
            }else{
                param = idObj;
            }
            if (funcion != undefined && funcion != '') {
                var fn =""+funcion+"("+param+")";                 
                eval(fn);
            }else{
                console.log("La Funcion No Se Encuentra Definida");
            }            
        })
    });    
}
/*Funcion para obtener datos seleccionados con check*/
function initEvtChk(){
    var i=0;
    var checks=new Array();
    $("input[type='checkbox']:checked").each(function(){
        checks[i]= this.id.substring();
        i++;
    });
    return checks;
}
//Inicializar Evento Con Opcion Popup Con Envio Id Como Parametro
function initEvtOpcPopupId(clase_icono,url,title,alto,ancho,func_close){
    $(".ui-icon-"+clase_icono).each(function(){
        $("#"+this.id).click(function(e){
            e.preventDefault();
            var fila =$(this).parents('tr');
            set_popup(url+$(fila).attr('id'),title,alto,ancho,'',func_close); 
        })
    });    
}
function initEvtOpcPopupIdTop(clase_icono,url,title,alto,ancho,func_close){
    $(".ui-icon-"+clase_icono).each(function(){
        $("#"+this.id).click(function(e){
            e.preventDefault();
            var fila =$(this).parents('tr');
            set_popup2(url+$(fila).attr('id'),title,alto,ancho,'',func_close); 
        })
    });    
}

function confirmar(title,msg,funcion){
    var a = 1;
    var b = 100;
    var randomnumber = (a+Math.floor(Math.random()*b));   
    $(".msgdlg" ).dialog( "destroy" );    
    $("body").append( "<div id='messageconfirma"+randomnumber+"' class='msgdlg' title='"+title+"'>"+msg+"</div>");
    if (funcion != undefined && funcion != '') {
        $("#messageconfirma"+randomnumber).dialog(
        {
            autoOpen: true,
            draggable: false,  
            height: 200,
            modal: true,
            position: 'center',
            resizable: false,            
            width: 300,
            buttons: {
                'Si': function() {
                    try{
                        eval(funcion);
                        $(this).dialog( 'close' );
                    }catch(er){
                        console.log(er);
                    }
                },
                'No': function() {
                    $(this).dialog( 'close' );
                }
            },
            close: function() {
                $(this).dialog('destroy').remove();
                $("#messageconfirma"+randomnumber).remove();
            }
        }
        );    
    }
}

function mensaje(msg,tip){
    if (tip=='e'){
        $.jGrowl(msg, {
            header:'¡EXITO!', 
            theme: 'mexito'
        });
    }
    else if (tip=='r') {
        $.jGrowl(msg, {
            header:'¡ERROR INESPERADO!', 
            theme: 'merror'
        });    
    } else if (tip=='a'){    
        $.jGrowl(msg, {
            header:'¡CUIDADO!', 
            theme: 'malerta2'
        });
    }    
}

function get_Busqueda(Url,div_name,accion,Parametros) {
    $(function(){        
        $('#'+Objcaja).keydown(function(event){
            if (event.keyCode == "13"){ 
                $.post(Url+Parametros, {        
                    accion:accion
                }, function(data){                     
                    $('#'+div_name).html(data);
                });
                
            }
        });    
    });        
}

function get_page(Url,div_name,parametro){
    var Rdn=(Math.floor(Math.random()*11));  
    $.post(Url, {
        Rdn:Rdn,        
        json:parametro    
    }, function(data){ 
        data = data.trim();  
        $('#'+div_name).html(data);       

    });
}

function get_pagex(Url,div_name){
    var Rdn=(Math.floor(Math.random()*11));  
    $.post(Url, {
        Rdn:Rdn        
        
    }, function(data){ 
        data = data.trim();  
        $('#'+div_name).html(data);       

    });
}

var y=0;
function set_popup(url,title,ancho,alto,parametro,func_close){
    var a = 1;
    var b = 100;
    var randomnumber = (a+Math.floor(Math.random()*b));
 
    //    $(".popedit" ).remove();
    //    $(".popedit" ).dialog( "destroy" ); 
    $("body").append("<div id='popupEdicion"+randomnumber+"' class='popedit' title='"+title+"'></div>");           
    $("#popupEdicion"+randomnumber).dialog({          
        autoOpen:false,      
        position: 1, //0=TOP        
        width:ancho,
        Height:'auto',
        minHeight:alto,
        zIndex : 2000,
        resizable: false,
        modal:true ,
        open: function(event,ui){
            get_page(url,this.id,parametro);
        },
        close: function(){      
            eval(func_close);
            $(this).dialog('destroy').remove();                        

        }
    });
    $("#popupEdicion"+randomnumber).dialog('open');
}
function set_popup2(url,title,ancho,alto,parametro,func_close){
    var a = 1;
    var b = 100;
    var randomnumber = (a+Math.floor(Math.random()*b));
 
    //    $(".popedit" ).remove();
    //    $(".popedit" ).dialog( "destroy" ); 
    $("body").append("<div id='popupEdicion"+randomnumber+"' class='popedit' title='"+title+"'></div>");           
    $("#popupEdicion"+randomnumber).dialog({          
        autoOpen:false,      
        position: 'top', //0=TOP        
        width:ancho,
        Height:'auto',
        minHeight:alto,
        zIndex : 2000,
        resizable: false,
        modal:true ,
        open: function(event,ui){
            get_page(url,this.id,parametro);
        },
        close: function(){      
            eval(func_close);
            $(this).dialog('destroy').remove();                        

        }
    });
    $("#popupEdicion"+randomnumber).dialog('open');
}
function set_popupChild(url,title,ancho,alto,parametro,func_close){
    var a = 1;
    var b = 100;
    var randomnumber = (a+Math.floor(Math.random()*b));
 
    //    $(".popedit" ).remove();
    //    $(".popedit" ).dialog( "destroy" ); 
    $("body").append("<div id='popupEdicion"+randomnumber+"' class='popedit2' title='"+title+"'></div>");           
    $("#popupEdicion"+randomnumber).dialog({          
        autoOpen:false,      
        position: 'top', //0=TOP        
        width:ancho,
        Height:'auto',
        minHeight:alto,
        zIndex : 2000,
        resizable: false,
        modal:true ,
        open: function(event,ui){
            get_page(url,this.id,parametro);
        },
        close: function(){      
            eval(func_close);
            $(this).dialog('destroy').remove();                        

        }
    });
    $("#popupEdicion"+randomnumber).dialog('open');
}

function set_Date(cNotFecha, tipo){
    if(tipo=='NA'){//El datepicker 
        var c = new Date();
    
        var year_actual=c.getFullYear();
        var year=year_actual + 20;
        $("#"+cNotFecha).datepicker({
            changeYear: true,
            changeMonth: true,
            closeText: 'Cerrar',
            prevText: '&#x3c;Ant',
            nextText: 'Sig&#x3e;',
            currentText: 'Hoy',
            monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
            monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
            dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
            dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
            dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá'],
            weekHeader: 'Sm',
            dateFormat: 'dd/mm/yy',
            yearRange: "1935:"+year+"",
            firstDay: 0,
            isRTL: false,
            showMonthAfterYear: false,
            yearSuffix: ''
        });
    }
    
    
    var f = new Date();
    
    var yearactual=f.getFullYear();
    $("#"+cNotFecha).datepicker({
        changeYear: true,
        changeMonth: true,
        closeText: 'Cerrar',
        prevText: '&#x3c;Ant',
        nextText: 'Sig&#x3e;',
        currentText: 'Hoy',
        monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
        monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
        dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
        dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
        dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá'],
        dateFormat: 'dd/mm/yy',
        firstDay: 0,
        yearRange: "1935:"+yearactual+"",
        isRTL: false,
        showMonthAfterYear: false,
        yearSuffix: ''
    });
    $("#"+cNotFecha).attr("readonly", true); //inhabilita las cajas de texto
}

function ValidarRangoFechas(cNotFechaInicial, cNotFechaFinal, dateFormat){
    var formatoFecha = dateFormat == undefined ? "dd/mm/yy" : dateFormat;
    var dates = $( "#"+cNotFechaInicial+", #"+cNotFechaFinal+"" ).datepicker({
        changeYear: true,
        changeMonth: true,
        closeText: 'Cerrar',
        prevText: '&#x3c;Ant',
        nextText: 'Sig&#x3e;',
        currentText: 'Hoy',
        monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
        monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
        dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
        dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
        dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá'],
        weekHeader: 'Sm',
        dateFormat: formatoFecha,
        firstDay: 0,
        isRTL: false,
        showMonthAfterYear: false,
        yearSuffix: '',
        yearRange:'1970:2050',
        onSelect: function( selectedDate ) {
            var option = this.id == ""+cNotFechaInicial+"" ? "minDate" : "maxDate",
            instance = $( this ).data( "datepicker" ),
            date = $.datepicker.parseDate(
                instance.settings.dateFormat ||
                $.datepicker._defaults.dateFormat,
                selectedDate, instance.settings );
            dates.not( this ).datepicker( "option", option, date );
        }
    });
    $("#"+cNotFechaInicial).attr("readonly", true); 
    $("#"+cNotFechaFinal).attr("readonly", true); 
    var myDate = new Date();
    $("#"+cNotFechaInicial).datepicker('setDate',myDate);
}

function ValidarRangoFechas2(cNotFechaInicial, cNotFechaFinal, dateFormat){
    var formatoFecha = dateFormat == undefined ? "dd/mm/yy" : dateFormat;
    var dates = $( "#"+cNotFechaInicial+", #"+cNotFechaFinal+"" ).datepicker({
        changeYear: true,
        changeMonth: true,
        closeText: 'Cerrar',
        prevText: '&#x3c;Ant',
        nextText: 'Sig&#x3e;',
        currentText: 'Hoy',
        monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
        monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
        dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
        dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
        dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá'],
        weekHeader: 'Sm',
        dateFormat: formatoFecha,
        firstDay: 0,
        isRTL: false,
        showMonthAfterYear: false,
        yearSuffix: '',
        yearRange:'1970:2050',
        onSelect: function( selectedDate ) {
            var option = this.id == ""+cNotFechaInicial+"" ? "minDate" : "maxDate",
            instance = $( this ).data( "datepicker" ),
            date = $.datepicker.parseDate(
                instance.settings.dateFormat ||
                $.datepicker._defaults.dateFormat,
                selectedDate, instance.settings );
            dates.not( this ).datepicker( "option", option, date );
        }
    });
    $("#"+cNotFechaInicial).attr("readonly", true); 
    $("#"+cNotFechaFinal).attr("readonly", true); 
    var myDate = new Date();
    $("#"+cNotFechaInicial).datepicker('setDate',myDate);
    $("#"+cNotFechaFinal).datepicker('setDate',myDate);
}

function hasEventListener(element, eventName, namespace) {
    var returnValue = false;
    var events = $(element).data("events");
    if (events) {
        $.each(events, function (index, value) {
            if (index == eventName) {
                if (namespace) {
                    $.each(value, function (index, value) {
                        if (value.namespace == namespace) {
                            returnValue = true;
                            return false;
                        }
                    });
                }
                else {
                    returnValue = true;
                    return false;
                }
            }
        });
    }
    return returnValue;
}

/* CREADOR DE DATA-TABLES - CONSTRUYE UNA GRILLA PAGINADA */
function paginaDataTable(dataTable) {
    // definiciones por defecto  
    dataTable["ordenaPor"] = (dataTable["ordenaPor"] != undefined) ? dataTable["ordenaPor"] : [[0,"desc"]]; 
    dataTable["desactOrdenaEn"] = (dataTable["desactOrdenaEn"] != undefined) ? dataTable["desactOrdenaEn"] : [];
    dataTable["filsXpag"] = ( dataTable["filsXpag"] != undefined) ?  dataTable["filsXpag"] : 10;
    dataTable["JQueryUI"] = (dataTable["JQueryUI"] != undefined) ? dataTable["JQueryUI"] : true;
    dataTable["functions"] = (dataTable["functions"] != undefined) ? dataTable["functions"] : "";
    
    // funcionalidad js           
    $("#"+dataTable["tabla"]+"").dataTable({
        "bJQueryUI"             :     dataTable["JQueryUI"],
        "sPaginationType"       :     "full_numbers",
        "iDisplayLength"        :     dataTable["filsXpag"],
        "oLanguage"             :     {
            "sEmptyTable"       :     "Tabla sin data disponible",
            "sInfo"             :     "Mostrando desde _START_ hasta _END_ de _TOTAL_ registros",
            "sInfoEmpty"        :     "Mostrando desde 0 hasta 0 de 0 registros",
            "sInfoFiltered"     :     "(filtrado de _MAX_ registros en total)",
            "sInfoPostFix"      :     "",
            "sInfoThousands"    :     ",",
            "sLengthMenu"       :     "Mostrar _MENU_ registros",
            "sLoadingRecords"   :     "Cargando...",
            "sProcessing"       :     "Procesando...",
            "sSearch"           :     "Buscar:",
            "sZeroRecords"      :     "No se encontraron resultados",
            "oPaginate"         :     {
                "sFirst"        :     "Primero",
                "sLast"         :     "Último",
                "sNext"         :     "Siguiente",
                "sPrevious"     :     "Anterior"
            },
            "oAria"             : {
                "sSortAscending"    :     ": activar para Ordenar Ascendentemente",
                "sSortDescending"   :     ": activar para Ordendar Descendentemente"
            }
        },
        "fnDrawCallback": function(oSettings) {
            eval(dataTable["functions"]); // funcion ejecutada cuando cambia pagina
        },
        "aoColumnDefs"          :       [{            
            "aTargets"          :       dataTable["desactOrdenaEn"], // desactivar ordenamiento en cols... 
            "bSortable"         :       false     
        }],    
        "aaSorting"             :       dataTable["ordenaPor"]  
    });
}

/* CREA AUTOCOMPLETE - en evaluacion*/
function creaAutocomplete(autocomplete){
    $("#"+autocomplete["value"]+"").autocomplete({
        source: autocomplete["url"],
        minLength: 3,
        select: function(event, ui){     
            $("#"+autocomplete["id"]+"").val(ui.item.id);
            if (autocomplete["funcion"] != undefined) eval (autocomplete["funcion"]);                  
        }
    }); 
} 




/* LIMPIA UN FORMULARIO */
function limpiarForm(obj) {
    // enaviar asi: limpiarForm('#miForm');
    $(':input', $(obj)).each(function() {
        var type = this.type;
        var tag = this.tagName.toLowerCase();      
        if (type == 'text' || type == 'password' || tag == 'textarea' || type == 'hidden' || type == 'file' )
            this.value = '';       
        else if (type == 'checkbox' || type == 'radio')
            this.checked = false;
    });
}


/* MASCARAS */
function mascaraCelular(obj){
    $(obj).mask("999-999-999");
}
function mascaraTelefono(obj){
    $(obj).mask("(999) 999999");
}
/* MENSAJERIA */
function msgLoading(obj,msg){
    if(msg == undefined){
        $(obj).html("<div id='msg_loading' style='color:#2D91D4;font-size:0.75em'><div class='gif_loading'>Cargando...</div></div>");
    }else{
        $(obj).html("<div id='msg_loading' style='color:#2D91D4;font-size:0.75em'><div class='gif_loading'></div>&nbsp;"+" "+msg+"</div>");
    }
}

function msgAviso(obj,msg){ 
    if(msg == undefined){
        $(obj).html("<div id='msg_aviso' class='alert alert-info'><span class='ui-icon ui-icon-lightbulb' style='float: left; margin-right: .3em;'></span> <strong>¡Hey! ... </strong> No se encontraron registros.</div>");
    }else{
        $(obj).html("<div id='msg_aviso' class='alert alert-info'><span class='ui-icon ui-icon-lightbulb' style='float: left; margin-right: .3em;'></span> <strong>¡Hey! ... </strong> "+msg+"</div>");
    }
}

function msgExito(obj,msg){ 
    if(msg == undefined){
        $(obj).html("<div id='msg_exito' class='alert alert-success'><span class='ui-icon ui-icon-check' style='float: left; margin-right: .3em;'></span> <strong>¡Bien! ... </strong> Operacion realizada exitosamente.</div>");
    }else{
        $(obj).html("<div id='msg_exito' class='alert alert-success'><span class='ui-icon ui-icon-check' style='float: left; margin-right: .3em;'></span> <strong>¡Bien! ... </strong> "+msg+"</div>");
    }
}
function msgExitoTramint(obj,msg){ 
    if(msg == undefined){
        $(obj).html("<div id='msg_exito' class='alert alert-success'><span class='ui-icon ui-icon-check' style='float: left; margin-right: .3em;'></span> <strong>¡Bien! ... </strong> Operacion realizada exitosamente.</div>");
    }else{
        $(obj).html("<div id='msg_exito' class='alert alert-success'><span class='ui-icon ui-icon-check' style='float: left; margin-right: .3em;'></span> <strong>Ultimo Documento: </strong> "+msg+"</div>");
    }
}

// mensaje de informacion con opcion de cerrarlo desde una X
function msgInfo(obj,msg){ 
    if(msg == undefined){
        $(obj).html('<div id="msg_information"><div class="alert alert-info alert-block"><a href="#" data-dismiss="alert" class="close">×</a><h4 class="alert-heading"><span class="ui-icon ui-icon-flag" style="float: left; margin-right: .3em;margin-left: 0"></span>Informaci&oacute;n !</h4>No se encontraron registros.</div></div>');
    }else{
        $(obj).html('<div id="msg_information"><div class="alert alert-info alert-block"><a href="#" data-dismiss="alert" class="close">×</a><h4 class="alert-heading"><span class="ui-icon ui-icon-flag" style="float: left; margin-right: .3em;margin-left: 0"></span>Informaci&oacute;n !</h4>'+msg+'</div></div>');
    }
}

function msgError(obj,msg){ 
    if(msg == undefined){
        $(obj).html("<div id='msg_error' class='alert alert-error'><span class='ui-icon ui-icon-alert' style='float: left; margin-right: .3em;'></span> <strong>¡Error! ... </strong> Ha ocurrido un error, vuelva a intentarlo.</div>");
    }else{
        $(obj).html("<div id='msg_error' class='alert alert-error'><span class='ui-icon ui-icon-alert' style='float: left; margin-right: .3em;'></span> <strong>¡Error! ... </strong> "+msg+"</div>");
    }
}

function msgAlerta(obj,msg){ 
    $(obj).html("<div id='msg_alert' class='alert alert-alert'><span class='ui-icon ui-icon-info' style='float: left; margin-right: .3em;'></span> <strong>¡Cuidado! ... </strong> "+msg+"</div>");
}

function msgLoadSave(obj,btn){ //preload al costado del boton
    $(btn).attr("disabled", "true");
    $(obj).html("<div id='msg_saving' style='display:inline;'><img src='../img/loading.gif'/></div>");
}
function msgLoadSaveMsg(obj,btn,msg){ //preload al costado del boton
    $(btn).attr("disabled", "true");
    $(obj).html("<div id='msg_saving' style='display:inline;'><img src='../img/barraProgreso.gif'/>"+msg+"</div>");
}

function msgLoadSaveRemove(btn){
    $("#msg_saving").remove()
    $(btn).removeAttr("disabled");
}

function initEvtClosePopup(objCerrar,ObjPopup){
    $(objCerrar).click(function(){
        $(ObjPopup).dialog("close");   
    })    
}

function deshabilitaPegar(obj){
    $(obj).keydown(function(event) {
        var teclasNoPermitidas = new Array('c', 'x', 'v');
        var keyCode = (event.keyCode) ? event.keyCode : event.which;
        var esCtrl;
        esCtrl = event.ctrlKey
        if (esCtrl) {
            for (i = 0; i < teclasNoPermitidas.length; i++) {
                if (teclasNoPermitidas[i] == String.fromCharCode(keyCode).toLowerCase()) {                    
                    return false;              
                }
            }
        }
        return true;
    });
    
    $(obj).bind('contextmenu', function(e){
        return false;
    }); 
}

function ValidaCKEditor(IdTextArea){
    CKEDITOR.instances[IdTextArea].updateElement();
}


function NewCKEditor(IdTextArea){
    //CKEditor
    var instance = CKEDITOR.instances[IdTextArea];
    if (instance) {
        CKEDITOR.remove(CKEDITOR.instances[IdTextArea]);
    }
    $( '#'+IdTextArea ).ckeditor({
        toolbar : 'Full'//CKEditorBasic sirve para poner la barra de botones en basica
    });
//CKEditor
}

function ClearCKEditor(IdTextArea){
    var editor = CKEDITOR.instances[IdTextArea];
    if (editor) {
        editor.destroy(true);
    }
    //    CKEDITOR.replace(IdTextArea);
    NewCKEditor(IdTextArea)
}

function MostrarOcultarCapas(ObjOcultar,ObjMostrar,fnOcultar,fnMostrar){
    $(ObjOcultar).hide('slide',100,function(){
        $(".tooltip").removeClass("in");
        $(".tooltip").addClass("out");        
        eval(fnOcultar);
    });
    $(ObjMostrar).show('slide',1000,function(){
        $(".tooltip").removeClass("in");
        $(".tooltip").addClass("out");
        eval(fnMostrar);
    });        
}
/*
@Authors : jvinceso
@Descripcion : Limpia Input's Deseleciona Checks y Radios de Formulario Sin Afectar a los Botones y Campos Ocultos 
@Use : cleanForm('#IdFormulario');
 */
function cleanForm(objForm){
    $(':input',objForm)
    .not(':button, :submit, :reset, :hidden')
    .val('')
    .removeAttr('checked')
    .removeAttr('selected');    
}
/*
@Authors : jvinceso
@Descripcion : Parecido al funcionamiento de la funcion toogle de jquery pero a diferencia de ella 
no restringe a que siempre esten alternando las clases en el objeto DOM
Realiza solo un cambio!! de clases por llamado
*/
function verificaCambiaClases(ObjDiv,ClaseBuscar,ClaseRemplazo){
    if( $(ObjDiv).hasClass( ClaseBuscar ) ){
        $(ObjDiv).removeClass( ClaseBuscar );
        $(ObjDiv).addClass( ClaseRemplazo );
    }
}
/*
@Authors : jvinceso
@Descripcion : Arma formulario de subir archivos Probando
@Use : UploadFiles('IdoClassdelDiv')
 */
function initUploadFiles(){
/*Aqui se construira la funcion subir archivos*/
}
// funcion para ocultar la gria cuando no hay datos
function hide_grid(grid_name,div_content,msg){
    var n = $("#"+grid_name).getGridParam("records");
    if (n == 0) {
        if(msg==undefined)
            msgAlerta("#"+div_content,"No se han encontrado registros");
        else if(msg=="")
            $("#"+div_content).html(""); 
        else
            msgAlerta("#"+div_content,msg);
    }
    $("#"+div_content).show();
}
/*
// funcionalidad js           
$("#"+dataTable["tabla"]+"").dataTable({
    "bJQueryUI"             :     dataTable["JQueryUI"],
    "sPaginationType"       :     "full_numbers",
    "iDisplayLength"        :     dataTable["filsXpag"],
    "oLanguage"             :     {
        "sEmptyTable"       :     "Tabla sin data disponible",
        "sInfo"             :     "Mostrando desde _START_ hasta _END_ de _TOTAL_ registros",
        "sInfoEmpty"        :     "Mostrando desde 0 hasta 0 de 0 registros",
        "sInfoFiltered"     :     "(filtrado de _MAX_ registros en total)",
        "sInfoPostFix"      :     "",
        "sInfoThousands"    :     ",",
        "sLengthMenu"       :     "Mostrar _MENU_ registros",
        "sLoadingRecords"   :     "Cargando...",
        "sProcessing"       :     "Procesando...",
        "sSearch"           :     "Buscar:",
        "sZeroRecords"      :     "No se encontraron resultados",
        "oPaginate"         :     {
            "sFirst"        :     "Primero",
            "sLast"         :     "Último",
            "sNext"         :     "Siguiente",
            "sPrevious"     :     "Anterior"
        },
        "oAria"             : {
            "sSortAscending"    :     ": activar para Ordenar Ascendentemente",
            "sSortDescending"   :     ": activar para Ordendar Descendentemente"
        }
    },
    "fnDrawCallback": function(oSettings) {
        eval(dataTable["functions"]); // funcion ejecutada cuando cambia pagina
    },
    "aoColumnDefs"          :       [{            
        "aTargets"          :       dataTable["desactOrdenaEn"], // desactivar ordenamiento en cols... 
        "bSortable"         :       false     
    }],    
    "aaSorting"             :       dataTable["ordenaPor"]  
});
 */

// <div class="plupload"></div>

//Funciones de Mensaje Cargando EN PRUEBA -> jvinceso (AL 09/05/13) 
function msjCargandoCustom(objId){
    $('#'+objId).html('<div style="display: table-cell;vertical-align: middle;position: relative;"><center><br/><p><img src="http://localhost/oficinavirtual/img/dashboard/cargando.gif"/><h2 style="color:black;">Espere un Momento...</h2></p></center></div>');  
    document.getElementById(objId).style.opacity="0.6";  
    document.getElementById(objId).style.background="white";  
    document.getElementById(objId).style.visibility="visible";
}

function msjErrorCustom(objId){
    $('#'+objId).html('<div style="display: table-cell;vertical-align: middle;position: relative;"><center><br/><p><img src="http://localhost/oficinavirtual/img/dashboard/error.gif"/><h2 style="color:black;">Hubo un problema al procesar su solicitud.</h2><h4 style="color:black;"><i>Si el problema persiste, comuníquelo al Administrador.</i><br/>Presione F5 para actualizar</h4></p></center></div>');  
    document.getElementById(objId).style.opacity="0.6";  
    document.getElementById(objId).style.background="white";  
    document.getElementById(objId).style.visibility="visible";
}
function obtenerCamposArray(name){
    var names = document.getElementsByName(name+"[]");
    arr=[];
    $.each(names,function(i,e){
        var obj = new Object();
        obj.dataField = $(e).attr('data-field');
        obj.atributo = $(e).attr('data-campo');
        obj.valor = $(e).val();
        var id= $(e).prop("id") ; //obtiene id
        var attr = id.split("_");//corta la cadena por caracter 
        //obtengo la ultima posicion del array que es la que me interesa( IDAttr)
        obj.idattr = attr[attr.length-1];
        arr[i]=obj;
    });
    console.log(arr);
    return arr;
}