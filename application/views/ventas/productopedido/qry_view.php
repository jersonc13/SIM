<div class="portlet box blue">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-globe"></i>Listado de Productos por Empresas
        </div>
        <div class="tools">
            <a href="#" onclick="asignarproductos()" class="reload">
            </a>
        </div>
    </div>
    <div class="portlet-body">
        <table class="table table-striped table-bordered table-hover" id="sample_1">
            <thead>
                <tr>
                    <th>Empresas</th>
                    <th>Producto</th>
                    <th>Estado</th>           
                    <th>Opciones</th>          
                </tr>
            </thead>
            <tbody>
                <?php foreach ($listarProductosxEmpresas as $key => $listar) { ?>
                    <tr>
                        <td><?php echo $listar['cnomcomercial'] ?></td>
                        <td><?php echo $listar['cproductos'] ?></td>
                        <td><?php echo $listar['nestado'] ?></td>
                        <td><a href="#" class="btn btn-sm blue">Editar <i class="fa fa-edit"></i></a>
                            <a href="#" onclick="estadoProducto(<?php echo $listar['nidproempresa'] ?>)" class="btn btn-sm red"><?php if ($listar['nestado'] == '1') { ?>Dar de baja <?php } else { ?> Dar de alta <?php } ?> <i class="fa fa-refresh"></i></a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<script>
    jQuery(document).ready(function() {
        TableAdvanced.init();
    });
</script>