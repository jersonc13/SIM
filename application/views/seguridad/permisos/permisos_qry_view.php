<link href="<?php echo URL_ADMINLCSS ?>/tree/ui.dynatree.css" rel="stylesheet" type="text/css">
<script src="<?php echo URL_ADMINLJS ?>/tree/jquery.dynatree.js" type="text/javascript"></script>
<script>
var objPermisos = <?php echo json_encode($permisos) ?>;
var permisos=[];
$.each( objPermisos, function( key, value ) {
	permisos.push(value);
});
$("#listPermisos").dynatree({
	checkbox: true,
	selectMode: 3,
	autoCollapse: false,
	children: permisos
});
// Botonera
$("#btnMinize").bind({
	click:function(evt){
		evt.preventDefault();
		$("#listPermisos").dynatree("getRoot").visit(function(node){
			node.toggleExpand();
		});    		
	}
});
$("#btnSelecc").bind({
	click:function(evt){
		evt.preventDefault();
		$("#listPermisos").dynatree("getRoot").visit(function(node){
			node.select(true);
		});
	}
});
$("#btnDeSelecc").bind({
	click:function(evt){
		evt.preventDefault();
		$("#listPermisos").dynatree("getRoot").visit(function(node){
			node.select(false);
		});
	}
});
</script>
<button id="btnMinize" class="btn default button-previous">Expandir/Minimizar<i class="m-icon-swapleft"></i></button>
<button id="btnSelecc" class="btn blue" >Marcar Todo <i class="fa fa-edit"></i></button>
<button id="btnDeSelecc" class="btn red" >Borrar Marcas<i class="fa fa-edit"></i></button>
<p></p>
<input type="hidden" value="<?php echo $pid ?>" id="txtpid" >
<div id="listPermisos"></div>
<input type="button" id="btngrabarpermisos" name="btngrabarpermisos" onclick="registrarPermisos()" value="Grabar" class="btn blue"/>
<!-- <button id="btnAsignar" class="btn blue button-next">Registrar<i class="m-icon-swapright m-icon-white"></i></button> -->