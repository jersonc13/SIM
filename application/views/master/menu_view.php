<?php
//Cargar mis roles
//$cargarroles = $this->cargas->cargarroles();
$cargaropcionpadre = $this->cargas->cargaropcionpadre();
$cargaropcionhijo = $this->cargas->cargaropcionhijo();

//$url1 = $this->uri->segment(1);        
?>

<!-- BEGIN CONTAINER -->
<div class="page-container">
    <!-- BEGIN SIDEBAR -->
    <div class="page-sidebar-wrapper">
        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
        <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
        <div class="page-sidebar navbar-collapse collapse">
            <!-- BEGIN SIDEBAR MENU -->
            <ul class="page-sidebar-menu" data-auto-scroll="false" data-auto-speed="200">
                <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
                <li class="sidebar-toggler-wrapper">
                    <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                    <div class="sidebar-toggler">
                    </div>
                    <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                </li>
                <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
                <li class="sidebar-search-wrapper">
                    <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
                    <!-- DOC: Apply "sidebar-search-bordered" class the below search form to have bordered search box -->
                    <!-- DOC: Apply "sidebar-search-bordered sidebar-search-solid" class the below search form to have bordered & solid search box -->
                    <form class="sidebar-search" action="" method="POST">
                        <a href="javascript:;" class="remove">
                        </a>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Buscar...">
                            <span class="input-group-btn">
                                <!-- DOC: value=" ", that is, value with space must be passed to the submit button -->
                                <input class="btn submit" type="button" type="button" value=" "/>
                            </span>
                        </div>
                    </form>
                    <!-- END RESPONSIVE QUICK SEARCH FORM -->
                </li>
                <li class="start active ">
                    <a href="<?php echo URL_MAIN ?>/dashboard/inicio">
                        <i class="fa fa-home"></i>
                        <span class="title">
                            Inicio </span>
                        <span class="selected">
                        </span>
                    </a>
                </li>

                <?php
//                print_r($cargaropcionpadre);
                foreach ($cargaropcionpadre as $oppadre) {
                    ?>
                    <li>
                        <a href="javascript:;">
                            <i class="fa <?php echo $oppadre['cicono'] ?>"></i>
                            <span class="title">
                                <?php echo $oppadre['copcion'] ?> </span>
                            <span class="arrow ">
                            </span>
                        </a>
                        <ul class="sub-menu">
                            <?php
//                             print_r($cargaropcionhijo);
                            foreach ($cargaropcionhijo as $ophijo) {
                                if ($oppadre['nidopcion'] == $ophijo['nidhijo']) {
                                    ?>
                                    <li>
                                        <a href="<?php echo URL_MAIN . '/' . $ophijo['curl'] ?>">
                                            <i class="fa fa-angle-right"></i>
                                            <?php echo $ophijo['copcion'] ?> </a>
                                    </li>
                                    <?php
                                }
                            }
                            ?>
                        </ul>
                    </li>
                <?php } ?>
            </ul>
            <!-- END SIDEBAR MENU -->
        </div>
    </div>
    <!-- END SIDEBAR -->
    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
