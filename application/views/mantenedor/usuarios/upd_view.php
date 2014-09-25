<div class="portlet-body form">
    <!-- BEGIN FORM-->
    <form action="#" id="frmUpdUsuarios" class="form-horizontal form-row-seperated">
        <div class="form-body">
            <div class="form-group">
                <div class="col-md-6">
                    <input type="hidden" id="txtid" name="txtid" value="<?php echo $usuario['nidusuario']; ?>" class="form-control"/>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3">Usuario<span class="required">
                    * </span></label>
                    <div class="col-md-6">
                        <input type="text" id="txtUpdUsuario" name="txtUpdUsuario" class="form-control" value="<?php echo $usuario['cusuario']; ?>" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Contraseña <span class="required">
                        * <br>(mínimo 8 caracteres)</span></label>
                        <div class="col-md-6">
                        <input type="password" id="txtUpdContrasena" name="txtUpdContrasena" class="form-control" value="<?php echo $usuario['ccontrasena'] ?>"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-3">&nbsp;</div>
                        <div id="listPermisos" class="col-md-6"></div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Estado:</label>
                    <div class="col-md-6">
                        <!-- <input type="text" id="txtUpdAlias" name="txtUpdAlias" class="form-control" value="<?php echo $linea['calias'] ?>" /> -->
                        <label for="active">Activo</label>
                        <input type="radio" name="estado" id="active" value="1" <?php echo ($usuario['nestado']==1)?'checked':''; ?> > &nbsp;
                        <label for="inactivo">Inactivo</label>
                        <input type="radio" name="estado" id="inactivo" value="0" <?php echo ($usuario['nestado']==0)?'checked':''; ?> >&nbsp;
                    </div>
                </div>

                <div class="form-actions fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-offset-3 col-md-9">
                                <input type="submit" value="Grabar" class="btn blue"/>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <!-- END FORM-->
        </div>
<!--</div>-->
<script src="<?php echo URL_ADMINPJS ?>/mantenedor/usuarios/jsUpdUsuario.js" type="text/javascript"></script>