<div class="portlet box blue">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-globe"></i>Listado de Vendedores por Empresas
        </div>
        <div class="tools">
            <a href="#" onclick="asignarvendedor()" class="reload">
            </a>
        </div>
    </div>
    <div class="portlet-body">
        <table class="table table-striped table-bordered table-hover" id="sample_1">
            <thead>
                <tr>
                    <th>Empresas</th>
                    <th>Vendedores</th>
                    <th>Estado</th>           
                    <th>Opciones</th>          
                </tr>
            </thead>
            <tbody>
                <?php foreach ($listarVendedorxEmpresas as $key => $listar) { ?>
                    <tr>
                        <td><?php echo $listar['empresa'] ?></td>
                        <td><?php echo $listar['vendedor'] ?></td>
                        <td><?php echo $listar['cestado'] ?></td>
                        <td><a href="#" class="btn btn-sm blue">Editar <i class="fa fa-edit"></i></a>
                            <a href="#" onclick="estadoVendedor(<?php echo $listar['nidcartvendedor'] ?>)" <?php if ($listar['nestado'] == '1') { ?>  class="btn btn-sm red">Dar de baja <?php } else {  ?>   class="btn btn-sm green"> Activar <?php } ?> <i class="fa fa-refresh"></i></a></td>
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