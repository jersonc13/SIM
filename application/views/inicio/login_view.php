<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
<title> SIM | Acceder al sistema </title>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all" rel="stylesheet" type="text/css"/>
<link href="<?php echo URL_GOBALPG?>/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo URL_GOBALPG?>/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo URL_GOBALPG?>/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->
<link href="<?php echo URL_GOBALPG?>/select2/select2.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo URL_GOBALPG?>/select2/select2-metronic.html" rel="stylesheet" type="text/css"/>
<link href="<?php echo URL_ADMINPCSS?>/login-soft.css" rel="stylesheet" type="text/css"/>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME STYLES -->
<link href="<?php echo URL_GLOBALCSS?>/components.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo URL_GLOBALCSS?>/plugins.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo URL_ADMINLCSS?>/layout.css" rel="stylesheet" type="text/css"/>
<link id="style_color" href="<?php echo URL_ADMINLCSS?>/themes/default.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo URL_ADMINLCSS?>/custom.css" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<!-- DOC: Apply "page-header-fixed-mobile" and "page-footer-fixed-mobile" class to body element to force fixed header or footer in mobile devices -->
<!-- DOC: Apply "page-sidebar-closed" class to the body and "page-sidebar-menu-closed" class to the sidebar menu element to hide the sidebar by default -->
<!-- DOC: Apply "page-sidebar-hide" class to the body to make the sidebar completely hidden on toggle -->
<!-- DOC: Apply "page-sidebar-closed-hide-logo" class to the body element to make the logo hidden on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-hide" class to body element to completely hide the sidebar on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-fixed" class to have fixed sidebar -->
<!-- DOC: Apply "page-footer-fixed" class to the body element to have fixed footer -->
<!-- DOC: Apply "page-sidebar-reversed" class to put the sidebar on the right side -->
<!-- DOC: Apply "page-full-width" class to the body element to have full width page without the sidebar menu -->
<body class="login">
<!-- BEGIN LOGO -->
<div class="logo">
	<a href="#">
            <img src="<?php echo URL_ADMINLIMG?>/logo/logoSIMSD.png" width="100px" alt=""/>
	</a>
</div>
<!-- END LOGO -->
<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
<div class="menu-toggler sidebar-toggler">
</div>
<!-- END SIDEBAR TOGGLER BUTTON -->
<!-- BEGIN LOGIN -->
<div class="content">
	<!-- BEGIN LOGIN FORM -->
        <form id="frm_login" class="login-form" action="" method="post">
		<h3 class="form-title">Ingresa tus credenciales</h3>
		<div class="alert alert-danger display-hide">
			<button class="close" data-close="alert"></button>
			<span>
			Ingresa usuario y contraseña. </span>
		</div>
		<div class="form-group">
			<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
			<label class="control-label visible-ie8 visible-ie9">Usuario</label>
			<div class="input-icon">
				<i class="fa fa-user"></i>
                                <input id="txt_usuario" name="txt_usuario" class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Ingrese usuario"/>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">Contraseña</label>
			<div class="input-icon">
				<i class="fa fa-lock"></i>
				<input id="txt_contrasena" name="txt_contrasena" class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Ingrese contraseña"/>
			</div>
		</div>
                <div id="mensaje" class="form-group">
			
		</div>
		<div class="form-actions">
			<button type="submit" class="btn blue pull-right">
			Ingresar <i class="m-icon-swapright m-icon-white"></i>
			</button>
		</div>		
		<div class="forget-password">
			<h4>Olvidaste tu contraseña?</h4>
			<p>
				Has clic <a href="javascript:;" id="forget-password">
				aquí </a>
				para resetear tu contraseña.
			</p>
		</div>
	</form>
	<!-- END LOGIN FORM -->
	<!-- BEGIN FORGOT PASSWORD FORM -->
        <form id="frm_logincorreo" class="forget-form" action="" method="post">
		<h3>Te olvidaste de tu contraseña ?</h3>
		<p>
			 Ingresa tu correo electrónico para ayudarte a resetear tu contraseña .
		</p>
		<div class="form-group">
			<div class="input-icon">
				<i class="fa fa-envelope"></i>
                                <input id="txt_correo" name="txt_correo" class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Ingrese correo" />
			</div>
		</div>
		<div class="form-actions">
			<button type="button" id="back-btn" class="btn">
			<i class="m-icon-swapleft"></i> Atrás </button>
			<button type="submit" class="btn blue pull-right">
			Enviar <i class="m-icon-swapright m-icon-white"></i>
			</button>
		</div>
	</form>
	<!-- END FORGOT PASSWORD FORM -->
	
</div>
<!-- END LOGIN -->
<!-- BEGIN COPYRIGHT -->
<div class="copyright">
	 2014 &copy; SIM - Soluciones Integradas de Mercadeo.
</div>
<!-- END COPYRIGHT -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
	<script src="<?php echo URL_GOBALPG?>/respond.min.js"></script>
	<script src="<?php echo URL_GOBALPG?>/excanvas.min.js"></script> 
	<![endif]-->
<script src="<?php echo URL_GOBALPG?>/jquery-1.11.0.min.js" type="text/javascript"></script>
<script src="<?php echo URL_GOBALPG?>/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
<script src="<?php echo URL_GOBALPG?>/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo URL_GOBALPG?>/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="<?php echo URL_GOBALPG?>/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="<?php echo URL_GOBALPG?>/jquery.blockui.min.js" type="text/javascript"></script>
<script src="<?php echo URL_GOBALPG?>/jquery.cokie.min.js" type="text/javascript"></script>
<script src="<?php echo URL_GOBALPG?>/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="<?php echo URL_GOBALPG?>/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="<?php echo URL_GOBALPG?>/backstretch/jquery.backstretch.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo URL_GOBALPG?>/select2/select2.min.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?php echo URL_GOBALJS?>/metronic.js" type="text/javascript"></script>
<script src="<?php echo URL_ADMINLJS?>/layout.js" type="text/javascript"></script>
<script src="<?php echo URL_ADMINPJS?>/login-soft.js" type="text/javascript"></script>
<script src="<?php echo URL_ADMINPJS?>/inicio/jsLogin.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
		jQuery(document).ready(function() {     
		  Metronic.init(); // init metronic core components
                  Layout.init(); // init current layout
		  Login.init();
		});
	</script>
<!-- END JAVASCRIPTS -->
<!-- END BODY -->

</html>