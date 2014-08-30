<script src="<?php echo URL_ADMINPJS ?>/seguridad/permisos/jsAsignarPermisos.js" type="text/javascript"></script>
<div class="page-content">
    <!-- BEGIN PAGE HEADER-->
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN PAGE TITLE & BREADCRUMB-->
            <h3 class="page-title">
                Permisos
            </h3>
            <ul class="page-breadcrumb breadcrumb">
                <li>
                    <i class="fa fa-home"></i>
                    <a href="index.html">
                        Inicio </a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <a href="#">
                        Seguridad </a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <a href="#">
                        Permisos </a>
                    <i class="fa fa-angle-right"></i>
                </li>
            </ul>
            <!-- END PAGE TITLE & BREADCRUMB-->
        </div>
    </div>
    <!-- END PAGE HEADER-->
    <!-- BEGIN DASHBOARD STATS -->
    <div class="row">

        <div class="col-md-12">

            <div class="portlet box blue">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-file-text"></i>Asignar Permisos
                    </div>        
                </div>
                <div class="portlet-body form">
                    <!-- BEGIN FORM-->
                    <form action="#" id="frmPersonaNatural" class="form-horizontal form-row-seperated">
                        <div class="form-body">
                            <div class="form-group">
                                <label class="control-label col-md-3">Ingrese Nombre:</label>
                                <div class="col-md-6">
                                    <input type="text" id="txtPersona" name="txtPersona" class="form-control" />
                                </div>
                                <div>
                                    <input type="button" id="btnbuscarPersona" name="btnbuscarPersona" onclick="buscarPersona()" value="Buscar" class="btn blue"/>
                                </div>
                            </div>
                            <div id="detalle_lista"></div>
                        </div>  
                    </form>
                    <!-- END FORM-->
                </div>
            </div>




        </div>

    </div>
    <!-- END DASHBOARD STATS -->
    <div class="clearfix">
    </div>

</div>
<script src="<?php echo URL_ADMINPJS ?>/table-advanced.js"></script>
<script>
    jQuery(document).ready(function() {
        TableAdvanced.init();
    });
</script>
