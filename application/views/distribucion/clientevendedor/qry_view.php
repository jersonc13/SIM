<div class="portlet box blue">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-globe"></i>Listado de Clientes por Vendedor
        </div>
        <div class="tools">
            <a href="#" onclick="clientevendedor()" class="reload">
            </a>
        </div>
    </div>
    <div class="portlet-body">
        <table class="table table-striped table-bordered table-hover" id="sample_1">
            <thead>
                <tr>
                    <th>Vendedor</th>
                    <th>Clientes</th>
                    <th>Estado</th>           
                    <th>Opciones</th>          
                </tr>
            </thead>
            <tbody>
                <?php foreach ($listarClientesxVendedor as $key => $listar) { ?>
                    <tr>
                        <td><?php echo $listar['vendedor'] ?></td>
                        <td><?php echo $listar['cliente'] ?></td>
                        <td><?php echo $listar['cestado'] ?></td>
                        <td><a href="#" onclick="estadoClientevendedor(<?php echo $listar['nidvenclientes'] ?>)" class="btn btn-sm red"><?php if ($listar['nestado'] == '1') { ?>Dar de baja <?php } else { ?> Dar de alta <?php } ?> <i class="fa fa-refresh"></i></a></td>
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