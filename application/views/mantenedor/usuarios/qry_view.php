<div class="portlet box blue">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-globe"></i>Listado de Usuarios
        </div>
        <div class="tools">
            <a href="#" onclick="listarUsuarios()" class="reload">
            </a>
        </div>
    </div>
    <div class="portlet-body">
        <table class="table table-striped table-bordered table-hover" id="sample_1">
            <thead>
                <tr>
                    <th>Usuario</th>
                    <th>Nombre</th>
                    <th>DNI/RUC</th>
                    <th>Opciones</th>          
                </tr>
            </thead>
            <tbody>
                <?php foreach ($listarUsuarios as $key => $listar) { ?>
                    <tr>
                        <td><?php echo $listar['cusuario'] ?></td>
                        <td><?php echo $listar['cnombre']  ?></td>
                        <td><?php echo $listar['cdniruc'] ?></td>
                        <td>
                            <a href="#" class="btn btn-sm blue">Editar <i class="fa fa-edit"></i></a>
                            <a href="#" onclick="estadoUsuarios(<?php echo $listar['nidusuario'] ?>)"<?php if ($listar['nestado'] == '1') { ?>  class="btn btn-sm red">Dar de baja <?php } else {  ?>   class="btn btn-sm green"> Activar <?php } ?> <i class="fa fa-refresh"></i></a></td>
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