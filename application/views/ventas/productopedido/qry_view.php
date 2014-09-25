<div class="portlet box blue">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-globe"></i>Listado de Pedido de Productos
        </div>
        <div class="tools">
            <a href="#" onclick="listarproductospedido()" class="reload">
            </a>
        </div>
    </div>
    <div class="portlet-body">
        <table class="table table-striped table-bordered table-hover" id="sample_1">
            <thead>
                <tr>
                    <th>Empresas</th>
                    <th>Producto</th>
                    <th>Cantidad</th>  
                    <th>Estado</th>   
                    <!--<th>Opciones</th>-->          
                </tr>
            </thead>
            <tbody>
                <?php foreach ($listarProductoPedido as $key => $listar) { ?>
                    <tr>
                        <td><?php echo $listar['cempresa'] ?></td>
                        <td><?php echo $listar['cproducto'] ?></td>
                        <td><?php echo $listar['ncantidad'] ?></td>
                        <td><?php echo $listar['cestado'] ?></td>
                        
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