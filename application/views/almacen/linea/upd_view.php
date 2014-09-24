<div class="portlet box blue">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-file-text"></i>Editar Linea
        </div>        
    </div>
    <div class="portlet-body form">
        <!-- BEGIN FORM-->
        <form action="#" id="frmUpdLinea" class="form-horizontal form-row-seperated">
            <div class="form-body">
                <div class="form-group">
                    <label class="control-label col-md-3">Nombre Línea:</label>
                    <div class="col-md-6">
                        <input type="hidden" id="txtid" name="txtid" value="<?php echo $idLinea ?>" >
                        <input type="text" id="txtUpdLinea" name="txtUpdLinea" class="form-control" value="<?php echo $linea['clinea'] ?>" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Alias:</label>
                    <div class="col-md-6">
                        <input type="text" id="txtUpdAlias" name="txtUpdAlias" class="form-control" value="<?php echo $linea['calias'] ?>" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Estado:</label>
                    <div class="col-md-6">
                        <!-- <input type="text" id="txtUpdAlias" name="txtUpdAlias" class="form-control" value="<?php echo $linea['calias'] ?>" /> -->
                        <label for="active">Activo</label>
                        <input type="radio" name="estado" id="active" value="1" <?php echo ($linea['nestado']==1)?'checked':''; ?> > &nbsp;
                        <label for="inactivo">Inactivo</label>
                        <input type="radio" name="estado" id="inactivo" value="0" <?php echo ($linea['nestado']==0)?'checked':''; ?> >&nbsp;
                    </div>
                </div>
            </div>
            <div class="form-actions fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-offset-3 col-md-9">
                            <button type="submit" class="btn green"><i class="fa fa-save"></i> Actualizar</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<script src="<?php echo URL_ADMINPJS ?>/almacen/linea/jsUpdLinea.js" type="text/javascript"></script>