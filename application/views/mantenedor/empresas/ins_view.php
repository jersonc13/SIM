<!--<div class="portlet box blue">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-file-text"></i>Nuevo registro
        </div>        
    </div>-->
<div class="portlet-body form">
    <!-- BEGIN FORM-->
    <form action="#" id="frmUsuarios" class="form-horizontal form-row-seperated">
        <div class="form-body">
            <div class="form-group">
                <div class="col-md-6">
                    <input type="hidden" id="txtnperid" name="txtnperid" value="<?php echo $nPerId; ?>" class="form-control"/>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3">Usuario<span class="required">
                                                * </span></label>
                <div class="col-md-6">
                    <input type="text" id="txtusuario" name="txtusuario" class="form-control"/>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3">Contraseña <span class="required">
                                                * <br>(mínimo 8 caracteres)</span></label>
                <div class="col-md-6">
                    <input type="password" id="txtcontrasena" name="txtcontrasena" class="form-control"/>
                </div>
            </div>
        </div>
        <div class="form-actions fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-offset-3 col-md-9">
                        <input type="button" id="btngrabarusuario" name="btngrabarusuario" onclick="registrarUsuarios()" value="Grabar" class="btn blue"/>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- END FORM-->
</div>
<!--</div>-->