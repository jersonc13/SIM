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
                    <td><a href="#" class="btn btn-sm green" onclick="crearempresa(<?php echo $listar['nidpersona'] ?>)">Seleccionar <i class="fa fa-edit"></i></a></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>