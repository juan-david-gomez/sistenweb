<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Bootstrap Metro Dashboard by Dennis Ji for ARM demo</title>
	<meta name="description" content="Bootstrap Metro Dashboard">
	<meta name="author" content="Dennis Ji">
	<meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: CSS -->
	<link id="bootstrap-style" href="<?php echo Yii::app()->theme->baseUrl;?>/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo Yii::app()->theme->baseUrl;?>/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link id="base-style" href="<?php echo Yii::app()->theme->baseUrl;?>/css/style.css" rel="stylesheet">
	<link id="base-style-responsive" href="<?php echo Yii::app()->theme->baseUrl;?>/css/style-responsive.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	<!-- end: CSS -->
	

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link id="ie-style" href="<?php echo Yii::app()->theme->baseUrl;?>/css/ie.css" rel="stylesheet">
	<![endif]-->
	
	<!--[if IE 9]>
		<link id="ie9style" href="<?php echo Yii::app()->theme->baseUrl;?>/css/ie9.css" rel="stylesheet">
	<![endif]-->
		
	<!-- start: Favicon -->
	<link rel="shortcut icon" href="<?php echo Yii::app()->theme->baseUrl;?>/img/favicon.ico">
	<!-- end: Favicon -->
	
		
		
		
</head>

<body>
		<!-- start: Header -->
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a  class="btn btn-navbar collapsed" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="#"><span>SistenAdmin</span></a>
				<a class="brand" onClick="$('#myModal').modal('show');"><span><?php echo  isset(Yii::app()->session['userModel']->nombre_tienda)?Yii::app()->session['userModel']->nombre_tienda:""; ?></span></a>
								
				<!-- start: Header Menu -->
				<div class="nav-no-collapse header-nav">
					<ul class="nav pull-right">
						<!-- start: User Dropdown -->
						<li class="dropdown">
							<a href="#">
								<i class="halflings-icon white user"></i> <?php echo isset(Yii::app()->session['userModel']->nombre_usuario)?Yii::app()->session['userModel']->nombre_usuario:""; ?>
								<!-- <span class="caret"></span> -->
							</a>
						</li>
						<li>
							<a href="<?php echo Yii::app()->createUrl('SistenAdmin/default/logout') ?>">
								<i class="halflings-icon white off"></i> Logout</a>
						</li>
						<!-- end: User Dropdown -->
					</ul>
				</div>
				<!-- end: Header Menu -->
				
			</div>
		</div>
	</div>
	<!-- start: Header -->
	
		<div class="container-fluid-full">
		<div class="row-fluid">
				
			<!-- start: Main Menu -->
			<div id="sidebar-left" class="span2">
				<div class="nav-collapse sidebar-nav collapse">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li><a href="<?php echo Yii::app()->createUrl('SistenAdmin/default/admin');?>"><i class="icon-dashboard"></i><span class="hidden-tablet"> Inicio</span></a></li>	
						<li><a href="<?php echo Yii::app()->createUrl('SistenAdmin/producto/admin');?>"><i class="icon-barcode"></i><span class="hidden-tablet"> Productos</span></a></li>
						<li><a href="<?php echo Yii::app()->createUrl('SistenAdmin/proveedor/admin');?>"><i class="icon-group"></i><span class="hidden-tablet"> Proveedores</span></a></li>
						<li><a href="<?php echo Yii::app()->createUrl('SistenAdmin/compra/admin');?>"><i class="icon-shopping-cart"></i><span class="hidden-tablet"> Compras</span></a></li>
						<li><a href="<?php echo Yii::app()->createUrl('SistenAdmin/Usuario/admin');?>"><i class="icon-user"></i><span class="hidden-tablet"> Usuarios</span></a></li>
						<li><a href="<?php echo Yii::app()->createUrl('SistenAdmin/publicacion/admin');?>"><i class="icon-shopping-cart"></i><span class="hidden-tablet"> Publicaciones</span></a></li>
						<!-- <li><a href="widgets.html"><i class="icon-dashboard"></i><span class="hidden-tablet"> Widgets</span></a></li>
						<li>
							<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Dropdown</span><span class="label label-important"> 3 </span></a>
							<ul>
								<li><a class="submenu" href="submenu.html"><i class="icon-file-alt"></i><span class="hidden-tablet"> Sub Menu 1</span></a></li>
								<li><a class="submenu" href="submenu2.html"><i class="icon-file-alt"></i><span class="hidden-tablet"> Sub Menu 2</span></a></li>
								<li><a class="submenu" href="submenu3.html"><i class="icon-file-alt"></i><span class="hidden-tablet"> Sub Menu 3</span></a></li>
							</ul>	
						</li>
						<li><a href="form.html"><i class="icon-edit"></i><span class="hidden-tablet"> Forms</span></a></li>
						<li><a href="chart.html"><i class="icon-list-alt"></i><span class="hidden-tablet"> Charts</span></a></li>
						<li><a href="typography.html"><i class="icon-font"></i><span class="hidden-tablet"> Typography</span></a></li>
						<li><a href="gallery.html"><i class="icon-picture"></i><span class="hidden-tablet"> Gallery</span></a></li>
						<li><a href="table.html"><i class="icon-align-justify"></i><span class="hidden-tablet"> Tables</span></a></li>
						<li><a href="calendar.html"><i class="icon-calendar"></i><span class="hidden-tablet"> Calendar</span></a></li>
						<li><a href="file-manager.html"><i class="icon-folder-open"></i><span class="hidden-tablet"> File Manager</span></a></li>
						<li><a href="icon.html"><i class="icon-star"></i><span class="hidden-tablet"> Icons</span></a></li>
						<li><a href="login.html"><i class="icon-lock"></i><span class="hidden-tablet"> Login Page</span></a></li> -->
					</ul>
				</div>
			</div>
			<!-- end: Main Menu -->
			
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
			
			<!-- start: Content -->
			<div id="content" class="span10">
			
			
			<ul class="breadcrumb">
				<li>
<!-- 					<i class="icon-home"></i>
					<a href="index.html">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Dashboard</a></li> -->
			<?php if(isset($this->breadcrumbs)):?>
				<?php $this->widget('zii.widgets.CBreadcrumbs', array(
					'links'=>$this->breadcrumbs,
				)); ?><!-- breadcrumbs -->
			<?php endif?>
			</ul>



				<div class="row-fluid">
		<div class="span12">
			<?php
				$this->widget('zii.widgets.CMenu', array(
					'items'=>$this->menu,
					'htmlOptions'=>array('class'=>'nav nav-pills'),
				));
			?>
		</div>
	</div>
			<?php echo $content; ?>
			
       

	</div><!--/.fluid-container-->
	
			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->
		
	
	<div class="clearfix"></div>
	
	<footer>

		<p>
			<span style="text-align:left;float:left">&copy; 2015 Bootstrap Metro Dashboard</span>
			
		</p>

	</footer>
	
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="myModalLabel">Información de la tienda</h4>
	      </div>
	      <div class="modal-body">
	        <?php echo  isset(Yii::app()->session['userModel']->informacion_tienda)?Yii::app()->session['userModel']->informacion_tienda:""; ?>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
	      </div>
	    </div>
	  </div>
	</div>
	</div>
	<!-- start: JavaScript 
		<script src="<?php echo Yii::app()->theme->baseUrl;?>/js/jquery-migrate-1.0.0.min.js"></script>
		<script src="<?php echo Yii::app()->theme->baseUrl;?>/js/jquery.js"></script>
	-->

		<script src="<?php echo Yii::app()->theme->baseUrl;?>/js/jquery-ui-1.10.0.custom.min.js"></script>
	
		
	
	
		<script src="<?php echo Yii::app()->theme->baseUrl;?>/js/jquery.ui.touch-punch.js"></script>
	
		<script src="<?php echo Yii::app()->theme->baseUrl;?>/js/modernizr.js"></script>
	
		<script src="<?php echo Yii::app()->theme->baseUrl;?>/js/bootstrap.min.js"></script>
	
		<script src="<?php echo Yii::app()->theme->baseUrl;?>/js/jquery.cookie.js"></script>
	
		<script src='<?php echo Yii::app()->theme->baseUrl;?>/js/fullcalendar.min.js'></script>
	
		<script src='<?php echo Yii::app()->theme->baseUrl;?>/js/jquery.dataTables.min.js'></script>

		<script src="<?php echo Yii::app()->theme->baseUrl;?>/js/excanvas.js"></script>

		<script src="<?php echo Yii::app()->theme->baseUrl;?>/js/jquery.flot.js"></script>

		<script src="<?php echo Yii::app()->theme->baseUrl;?>/js/jquery.flot.pie.js"></script>

		<script src="<?php echo Yii::app()->theme->baseUrl;?>/js/jquery.flot.stack.js"></script>

		<script src="<?php echo Yii::app()->theme->baseUrl;?>/js/jquery.flot.resize.min.js"></script>
	
		<script src="<?php echo Yii::app()->theme->baseUrl;?>/js/jquery.chosen.min.js"></script>
	
		<script src="<?php echo Yii::app()->theme->baseUrl;?>/js/jquery.uniform.min.js"></script>
		
		<script src="<?php echo Yii::app()->theme->baseUrl;?>/js/jquery.cleditor.min.js"></script>
	
		<script src="<?php echo Yii::app()->theme->baseUrl;?>/js/jquery.noty.js"></script>
	
		<script src="<?php echo Yii::app()->theme->baseUrl;?>/js/jquery.elfinder.min.js"></script>
	
		<script src="<?php echo Yii::app()->theme->baseUrl;?>/js/jquery.raty.min.js"></script>
	
		<script src="<?php echo Yii::app()->theme->baseUrl;?>/js/jquery.iphone.toggle.js"></script>
	
		<script src="<?php echo Yii::app()->theme->baseUrl;?>/js/jquery.uploadify-3.1.min.js"></script>
	
		<script src="<?php echo Yii::app()->theme->baseUrl;?>/js/jquery.gritter.min.js"></script>
	
		<script src="<?php echo Yii::app()->theme->baseUrl;?>/js/jquery.imagesloaded.js"></script>
	
		<script src="<?php echo Yii::app()->theme->baseUrl;?>/js/jquery.masonry.min.js"></script>
	
		<script src="<?php echo Yii::app()->theme->baseUrl;?>/js/jquery.knob.modified.js"></script>
	
		<script src="<?php echo Yii::app()->theme->baseUrl;?>/js/jquery.sparkline.min.js"></script>
	
		<script src="<?php echo Yii::app()->theme->baseUrl;?>/js/counter.js"></script>
	
		<script src="<?php echo Yii::app()->theme->baseUrl;?>/js/retina.js"></script>

		<script src="<?php echo Yii::app()->theme->baseUrl;?>/js/custom.js"></script>
	<!-- end: JavaScript-->
	
</body>
</html>
