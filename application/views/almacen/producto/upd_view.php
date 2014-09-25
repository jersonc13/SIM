<div class="portlet box blue">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-file-text"></i>Nuevo registro
        </div>        
    </div>
    <div class="portlet-body form">
        <!-- BEGIN FORM-->
        <form action="#" id="frmUpdProducto" class="form-horizontal form-row-seperated">
            <div class="form-body">
                <div class="form-group">
                    <label class="control-label col-md-3">Nombre Producto:</label>
                    <div class="col-md-6">
                        <input type="hidden" id="txtid" name="txtid" value="<?php echo $producto['nidproductos']; ?>" >
                        <input type="text" id="txtUpdProducto" name="txtUpdProducto" class="form-control" value="<?php echo $producto['cproductos']; ?>"/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Línea de Producto:</label>
                    <div class="col-md-6">
                        <select id="cbo_linea" name="cbo_linea" class="form-control">
                            <option value="">Selecciona una Linea</option>
                            <?php foreach ($cbolistarLineas as $key => $listar) { ?>
                                <option value="<?php echo $listar['nidlinea'] ?>"><?php echo $listar['clinea'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Estado:</label>
                    <div class="col-md-6">
                        <label for="active">Activo</label>
                        <input type="radio" name="estado" id="active" value="1" <?php echo ($producto['nestado']==1)?'checked':''; ?> > &nbsp;
                        <label for="inactivo">Inactivo</label>
                        <input type="radio" name="estado" id="inactivo" value="0" <?php echo ($producto['nestado']==0)?'checked':''; ?> >&nbsp;
                    </div>
                </div>                
            </div>
            <div class="form-actions fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-offset-3 col-md-9">
                            <button type="submit" class="btn green"><i class="fa fa-save"></i> Guardar</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!-- END FORM-->
    </div>
</div>
<script>
    $(function(){
        $("#cbo_linea").val( <?php echo $producto['nidlinea']; ?> );
    });
</script>
<script src="<?php echo URL_ADMINPJS ?>/almacen/producto/jsUpdProducto.js" type="text/javascript"></script>