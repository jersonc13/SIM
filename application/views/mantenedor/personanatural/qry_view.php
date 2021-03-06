<div class="portlet box blue">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-globe"></i>Listado de Personas Natural
        </div>
        <div class="tools">
            <a href="#" onclick="listarPersonas()" class="reload">
            </a>
        </div>
    </div>
    <div class="portlet-body">
        <table class="table table-striped table-bordered table-hover" id="sample_1">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>DNI/RUC</th>           
                    <th>Estado</th>
                    <th>Opciones</th>          
                </tr>
            </thead>
            <tbody>
                <?php foreach ($listarPersonaNatural as $key => $listar) { ?>
                    <tr>
                        <td><?php echo $listar['capellidos'] . ' ' . $listar['cnombres'] ?></td>
                        <td><?php echo $listar['cdniruc'] ?></td>
                        <td><?php echo $listar['cestado'] ?></td>
                        <td><a href="#" class="btn btn-sm blue">Editar <i class="fa fa-edit"></i></a>
                            <a href="#" onclick="estadoPersona(<?php echo $listar['nidpersona'] ?>)" <?php if ($listar['nestado'] == '1') { ?>  class="btn btn-sm red">Dar de baja <?php } else {  ?>   class="btn btn-sm green"> Activar <?php } ?> <i class="fa fa-refresh"></i></a></td>
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