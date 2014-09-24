<div class="portlet box blue">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-file-text"></i>Nuevo registro
        </div>        
    </div>
    <div class="portlet-body form">
        <!-- BEGIN FORM-->
        <form action="#" id="frmVendedorxEmpresa" class="form-horizontal form-row-seperated">
            <div class="form-body">
                <div class="form-group">
                    <label class="control-label col-md-3">Selección de Empresa:</label>
                    <div class="col-md-6">
                        <select id="cbo_empresa" name="cbo_empresa" class="form-control">
                            <option value="0" selected="true" disabled>Seleccione</option>
                            <?php foreach ($listarEmpresas as $key => $listar) { ?>
                                <option value="<?php echo $listar['nidempresas'] ?>"><?php echo $listar['cnombre'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Selección de Vendedor:</label>
                    <div class="col-md-6">
                        <select id="cbo_vendedor" name="cbo_vendedor" class="form-control">
                            <option value="0" selected="true" disabled>Seleccione</option>
                            <?php foreach ($listarPersonas as $key => $vendedor) { ?>
                                <option value="<?php echo $vendedor['nidpersona'] ?>"><?php echo $vendedor['cnomcomercial'] ?></option>
                            <?php } ?>
                        </select>
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