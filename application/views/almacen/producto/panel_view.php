<script src="<?php echo URL_ADMINPJS ?>/almacen/producto/jsProducto.js" type="text/javascript"></script>
<div class="page-content">
    <div class="row">
        <div class="col-md-12">
            <h3 class="page-title">
                Producto de Producto
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
                        Almacen </a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <a href="#">
                        Producto </a>
                    <i class="fa fa-angle-right"></i>
                </li>
            </ul>
        </div>
    </div>
    <div class="row">

        <div class="col-md-12">
            <div class="tabbable tabbable-custom boxless tabbable-reversed">
                <ul class="nav nav-tabs">

                    <li class="active">
                        <a href="#tab_0" data-toggle="tab">
                            Buscar </a>
                    </li>
                    <li >
                        <a href="#tab_1" data-toggle="tab">
                            Nuevo </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="tab_0">
                        <div id="mostrar_qry" >
                        </div>
                    </div>
                    <div class="tab-pane" id="tab_1">
                        <?php $this->load->view('almacen/producto/ins_view') ?>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- END DASHBOARD STATS -->
    <div class="clearfix">
    </div>

</div>
<script src="<?php echo URL_ADMINPJS ?>/table-advanced.js"></script>
