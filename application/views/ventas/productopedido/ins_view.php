<div class="portlet box blue">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-file-text"></i>Nuevo registro
        </div>        
    </div>
    <div class="portlet-body form">
        <!-- BEGIN FORM-->
        <form action="#" id="frmProductoPedido" class="form-horizontal form-row-seperated">
            <div class="form-body">
                <input type="hidden" id="idempresa" name="idempresa" value="<?php echo $idempresa ?>" >
                <input type="hidden" id="idpersona" name="idpersona" value="<?php echo $idpersona ?>" >
                <div class="form-group">
                    <label class="control-label col-md-3">Selección Producto:</label>
                    <div class="col-md-6">
                        <select id="cbo_productoempresa" name="cbo_productoempresa" class="form-control">
                            <option value="">Seleccionar Producto </option>
                            <?php foreach ($listarProductosxEmpresas as $key => $listar) { ?>
                                <option value="<?php echo $listar['nidproempresa'] ?>"><?php echo $listar['cproductos'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Cantidad:</label>
                    <div class="col-md-6">
                        <input type="text" id="txtcantidad" name="txtcantidad" class="form-control"/>
                    </div>
                </div>
            </div>
            <div class="form-actions fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-offset-3 col-md-9">
                            <button type="submit" class="btn green" name="btnregistrar" id="btnregistrar"><i class="fa fa-save"></i> Guardar</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!-- END FORM-->
    </div>
</div>