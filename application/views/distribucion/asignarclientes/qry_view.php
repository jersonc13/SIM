<div class="portlet box blue">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-globe"></i>Listado de Clientes por Empresas
        </div>
        <div class="tools">
            <a href="#" onclick="asignarclientes()" class="reload">
            </a>
        </div>
    </div>
    <div class="portlet-body">
        <table class="table table-striped table-bordered table-hover" id="sample_1">
            <thead>
                <tr>
                    <th>Empresas</th>
                    <th>Clientes</th>
                    <th>Estado</th>           
                    <th>Opciones</th>          
                </tr>
            </thead>
            <tbody>
                <?php foreach ($listarClientesxEmpresas as $key => $listar) { ?>
                    <tr>
                        <td><?php echo $listar['nidempresas'] ?></td>
                        <td><?php echo $listar['cliente'] ?></td>
                        <td><?php echo $listar['nestado'] ?></td>
                        <td><a href="#" class="btn btn-sm blue">Editar <i class="fa fa-edit"></i></a>
                            <a href="#" onclick="estadoCliente(<?php echo $listar['nidcartclientes'] ?>)" class="btn btn-sm red"><?php if ($listar['nestado'] == '1') { ?>Dar de baja <?php } else { ?> Dar de alta <?php } ?> <i class="fa fa-refresh"></i></a></td>
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