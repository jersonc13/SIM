<script src="<?php echo URL_ADMINPJS ?>/distribucion/asignarclientes/jsAsignarclientes.js" type="text/javascript"></script>
<div class="page-content">
    <!-- BEGIN PAGE HEADER-->
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN PAGE TITLE & BREADCRUMB-->
            <h3 class="page-title">
                Asignar Clientes a Empresas
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
                        Distribucion </a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <a href="#">
                        Clientes a Empresas </a>
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

                        <?php $this->load->view('distribucion/asignarclientes/ins_view') ?>

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
