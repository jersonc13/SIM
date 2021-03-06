<div class="portlet box blue">
    <div class="portlet-title">
<!--        <div class="caption">
            <i class="fa fa-globe"></i>Listado de Personas Natural
        </div>-->
<!--        <div class="tools">
            <a href="#" onclick="listarPersonas()" class="reload">
            </a>
        </div>-->
    </div>
    <div class="portlet-body">
        <table class="table table-striped table-bordered table-hover" id="sample_1">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>DNI/RUC</th>           
                    <th>Opciones</th>          
                </tr>
            </thead>
            <tbody>
                <?php foreach ($listarPersonas as $key => $listar) { ?>
                    <tr>
                        <td><?php echo $listar['capellidos'] . ' ' . $listar['cnombres'] . ' ' . $listar['cnomcomercial'] ?></td>
                        <td><?php echo $listar['cdniruc'] ?></td>
                        <td><a href="#" class="btn btn-sm blue" onclick="asignarPermisos(<?php  echo $listar['nidpersona'] ?>)">Asignar <i class="fa fa-edit"></i></a>
                            <!--<a href="#" onclick="estadoPersona(<?php // echo $listar['nidpersona'] ?>)" class="btn btn-sm red"><?php // if ($listar['nestado'] == '1') { ?>Dar de baja <?php //} else { ?> Dar de alta <?php //} ?> <i class="fa fa-refresh"></i></a>-->
                        </td>
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