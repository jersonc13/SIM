</div>
            <!-- END CONTENT -->
        </div>
        <!-- END CONTAINER -->
        <!-- BEGIN FOOTER -->
        <div class="page-footer">
            <div class="page-footer-inner">
                2014 &copy; Todos los derechos reservados | SIM
            </div>
            <div class="page-footer-tools">
                <span class="go-top">
                    <i class="fa fa-angle-up"></i>
                </span>
            </div>
        </div>
        <!-- END FOOTER -->
        <!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
        <!-- BEGIN CORE PLUGINS -->
        <script src="<?php echo URL_GOBALPG ?>/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
        <script src="<?php echo URL_GOBALPG ?>/jquery-slimscroll/jquery.slimscroll.js" type="text/javascript"></script>
        <script src="<?php echo URL_GOBALPG ?>/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="<?php echo URL_GOBALPG ?>/jquery.cokie.min.js" type="text/javascript"></script>
        <script src="<?php echo URL_GOBALPG ?>/uniform/jquery.uniform.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="<?php echo URL_GOBALPG ?>/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
        <script src="<?php echo URL_GOBALPG ?>/jquery-validation/js/additional-methods.min.js" type="text/javascript"></script>
        <script src="<?php echo URL_GOBALPG ?>/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>
        <script src="<?php echo URL_GOBALPG ?>/jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript"></script>
        <script src="<?php echo URL_GOBALPG ?>/jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
        <script src="<?php echo URL_GOBALPG ?>/jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript"></script>
        <script src="<?php echo URL_GOBALPG ?>/jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript"></script>
        <script src="<?php echo URL_GOBALPG ?>/jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>
        <script src="<?php echo URL_GOBALPG ?>/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>
        <script src="<?php echo URL_GOBALPG ?>/flot/jquery.flot.min.js" type="text/javascript"></script>
        <script src="<?php echo URL_GOBALPG ?>/flot/jquery.flot.resize.min.js" type="text/javascript"></script>
        <script src="<?php echo URL_GOBALPG ?>/flot/jquery.flot.categories.min.js" type="text/javascript"></script>
        <script src="<?php echo URL_GOBALPG ?>/jquery.pulsate.min.js" type="text/javascript"></script>
        <script src="<?php echo URL_GOBALPG ?>/bootstrap-daterangepicker/moment.min.js" type="text/javascript"></script>
        <script src="<?php echo URL_GOBALPG ?>/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>
        <!-- IMPORTANT! fullcalendar depends on jquery-ui-1.10.3.custom.min.js for drag & drop support -->
        <script src="<?php echo URL_GOBALPG ?>/fullcalendar/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
        <script src="<?php echo URL_GOBALPG ?>/jquery-easypiechart/jquery.easypiechart.min.js" type="text/javascript"></script>
        <script src="<?php echo URL_GOBALPG ?>/jquery.sparkline.min.js" type="text/javascript"></script>
        
        <script src="<?php echo URL_GOBALPG?>/backstretch/jquery.backstretch.min.js" type="text/javascript"></script>
        
        <script type="text/javascript" src="<?php echo URL_GOBALPG ?>/select2/select2.min.js"></script>
        <script type="text/javascript" src="<?php echo URL_GOBALPG ?>/data-tables/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="<?php echo URL_GOBALPG ?>/data-tables/tabletools/js/dataTables.tableTools.min.js"></script>
        <script type="text/javascript" src="<?php echo URL_GOBALPG ?>/data-tables/DT_bootstrap.js"></script>
        
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="<?php echo URL_GOBALJS ?>/metronic.js" type="text/javascript"></script>
        <script src="<?php echo URL_ADMINLJS ?>/layout.js" type="text/javascript"></script>
        <script src="<?php echo URL_ADMINPJS ?>/index.js" type="text/javascript"></script>
        <script src="<?php echo URL_ADMINPJS ?>/tasks.js" type="text/javascript"></script>
        
        <script src="<?php echo URL_ADMINPJS ?>/table-advanced.js"></script>
        
        <!-- END PAGE LEVEL SCRIPTS -->
        <script>
            jQuery(document).ready(function() {
                Metronic.init(); // init metronic core componets
                Layout.init(); // init layout
//                Index.init();
//                Index.initDashboardDaterange();
//                Index.initJQVMAP(); // init index page's custom scripts
//                Index.initCalendar(); // init index page's custom scripts
//                Index.initCharts(); // init index page's custom scripts
//                Index.initChat();
//                Index.initMiniCharts();
//                Index.initIntro();
//                Tasks.initDashboardWidget();
                TableAdvanced.init();
            });
        </script>
        <!-- END JAVASCRIPTS -->
        <!-- END BODY -->

</html>