<?php
/* @var $this SiteController */
$this->pageTitle=Yii::app()->name;
?>

<section class="bg pd4">
	<div class="container-fluid center" style="text-align:center;" >
	  <div class="row-fluid" style="background-color:rgba(50, 119, 181, 0.2);padding-top:20px;padding-bottom:20px">
	    	<div class="span3 offset1" style="background-color:white;padding:10px;">
				<img src="<?php echo Yii::app()->theme->baseUrl;?>/img/logo_cliente.png"  style='height:200px' alt="">
				<br>
				<a href="<?php echo Yii::app()->createUrl('SistenWeb/inicio');?>" class="btn btn-primary">Publicar Tienda</a>
	    	</div>

	    	 <div class="span4">
				<img src="<?php echo Yii::app()->theme->baseUrl;?>/img/logo_sistenweb.png" style='height:240px' alt="" >
					
	    	</div>
	    	<div class="span3" style="background-color:white;padding:10px;">
				<img src="<?php echo Yii::app()->theme->baseUrl;?>/img/logo_tendero.png" style='height:200px;' alt="">
					<br>
				<a href="<?php echo Yii::app()->createUrl('SistenAdmin/default/admin');?>" class="btn btn-primary">Administrar Tienda</a>
	    	</div>
	  </div><!-- /.row -->
	</div>
</section>


<section id="why" class="clearfix mg4">
	<div class="container">
			<div class="row-fluid">
	            <ul class="thumbnails">
	              <li class="span6">
	                <div class="thumbnail">
	                  <!-- <img data-src="holder.js/210x100" alt="210x100" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAASwAAADICAYAAABS39xVAAALgUlEQVR4Xu3b969VRRuG4UFBEFERO8aCBHsFYyyJ/ulGY8MSsMVeoz9YEXsJ8uVdySL7Q9Sz0APn4b1WQrJzGPZ+5n6GO7Nmr7Ppm2++OT5cCCCAQACBTYQV0JKICCAwESAsCwEBBGIIEFZMVYIigABhWQMIIBBDgLBiqhIUAQQIyxpAAIEYAoQVU5WgCCBAWNYAAgjEECCsmKoERQABwrIGEEAghgBhxVQlKAIIEJY1gAACMQQIK6YqQRFAgLCsAQQQiCFAWDFVCYoAAoRlDSCAQAwBwoqpSlAEECAsawABBGIIEFZMVYIigABhWQMIIBBDgLBiqhIUAQQIyxpAAIEYAoQVU5WgCCBAWNYAAgjEECCsmKoERQABwrIGEEAghgBhxVQlKAIIEJY1gAACMQQIK6YqQRFAgLCsAQQQiCFAWDFVCYoAAoRlDSCAQAwBwoqpSlAEECAsawABBGIIEFZMVYIigABhWQMIIBBDgLBiqhIUAQQIyxpAAIEYAoQVU5WgCCBAWNYAAgjEECCsmKoERQABwrIGEEAghgBhxVQlKAIIEJY1gAACMQQIK6YqQRFAgLCsAQQQiCFAWDFVCYoAAoRlDSCAQAwBwoqpSlAEECAsawABBGIIEFZMVYIigABhWQMIIBBDgLBiqhIUAQQIyxpAAIEYAoQVU5WgCCBAWNYAAgjEECCsmKoERQABwrIGEEAghgBhxVQlKAIIEJY1gAACMQQIK6YqQRFAgLCsAQQQiCFAWDFVCYoAAoRlDSCAQAwBwoqpSlAEECAsawABBGIIEFZMVYIigABhWQMIIBBDgLBiqhIUAQQIyxpAAIEYAoQVU5WgCCBAWNYAAgjEECCsmKoERQABwrIGEEAghgBhxVQlKAIIEJY1gAACMQQIK6YqQRFAgLCsAQQQiCFAWDFVCYoAAoRlDSCAQAwBwoqpSlAEECAsawABBGIIEFZMVYIigABhWQMIIBBDgLBiqhIUAQQIyxpAAIEYAoQVU5WgCCBAWNYAAgjEECCsmKoERQABwrIGEEAghgBhxVQlKAIIEJY1gAACMQQIK6aqvw/6/fffjw8++GAcOXJkHD9+fFx88cXj5ptvHrt27frTP/z111/He++9N7766qtx7NixsWPHjrFnz55x5ZVX/quxS1BW3g8//HAcPXp0/P7772Pr1q3jmmuuGTfddNM4//zz/++tNkLeJXMzdv0IENb6sT1j7/zdd9+Nl19+eZLP6rVp06Zx3333jcsvv/zEj2vMwYMHx08//fSnfPfcc8+46qqrTmvsksmWKF955ZVJrCdfl1122di/f/+o7HVthLxL5mbs+hIgrPXle0be/dChQ+Prr78emzdvHnfdddc477zzxuuvvz5+++23sX379vHII4+cyPHRRx9Nu6u6brnllnHppZdOY3/++eexbdu28eijj56QxZKxSyb63HPPjR9//HHaSd1xxx1TxtptffHFF9Pb3H333ePqq6+eXi/JsGTskrzGbhwChLVxujitJLVLeeaZZ8Yvv/wy3QLWn7reeeed8cknn0yvH3vssXHBBRdMr2t3VbdjF1100Xj44Yenn3366afjrbfeml4/8MADY+fOnYvHrjV85Xz66aen4TfccMMkzbpKrk899dT0+vrrrx+33nrr4gxL5rbWvMZtLAKEtbH6OO00JYLaWc1ievPNN8dnn3027ZYef/zxaff1xx9/jCeeeGK6FavzotqN1VXnSC+++OL0ukRRwlgytj6nPq+uuqU7cODA9Lp2TK+++ur0um5L77///ul9azdXeS+88MJpd3WysGaRLcmwZOxpQ/YPzzoBwjrrFfy3AerMpw7eX3vtten859prrx133nnn9CElitqN1bW6uznVz5eMrfcrMc23dLfffvt0Fla3frVz2rJly3jooYemg/W/uuqW8P3335/+er4lXJJhydj/lrh3O5MECOtM0j4DnzWfZ9VHXXHFFdMuqnZXdf3www/j+eefn17feOONY9++fdPr1du06667bpRwloyt96hv+uq96xu9+ry6razD9bpOPsw/GUOdvx0+fHja+dWuq87came4JMOSsWegBh+xTgQIa53Anq23rV1NCah2VyWOekyg/tRVZ1d1zrMWYS0ZO8+1BFXiWb127949Haz/1VWyqm8M65auJFW3k/MZ2pIMS8aerW587r8nQFj/nuGGeofapdR//I8//ni8++67U7baZdWZVT3K8Oyzz04/+6dbwiVjVwHU4X0d4tdV52m1W5p3eKfaWa3KqnLO3w7W2CUZlozdUIUJs4gAYS3ClTO4xFUH7LVzqfOkui2rXVf9rK7Vs61THbovGTtTqc986aWXpkP8+aqD9tXnwOaf1zlb3b7OO6uTZVXjlmRYMjanRUlPJkBY4Wuidhb1DV2dHdUjDbWTqqvOlJ588snpdT3Bfu+9906v52egVh9rWP2Wb/WxhiVj671Xn4OasdZBex2418H7fNUB+QsvvDBlrN3gqWQ1j12SYcnY8Nrbxies8OprZ1HPNc2/3nLbbbdNt2L1azp1PlRXHaLXYXpd9fP6U1c9A3XJJZeMN95445QPji4ZW2dI9WhE7ZjqYdTa1c23pPMOb0a9+sVAfX6dc61eJdN6PGI984bX3jY+YZ0D1X/++efTYwynuuqbwtpdzb/qUmIrsazlV3PWOrYkVYf59fR6PQv24IMPTg+mrt4ezudoNaZ2Qn93rR7UrzVDvd+SsedA7S2nQFjnSO11JlS3ZN9+++2JxwPqP34drs+ymqdat4/1zNOXX365pl9+/qexq0/V7927d/pF6rrqUYO69Suh1cF73RrWZ7799ttrFlYN/K/zniOVt5wGYbWs3aQRyCRAWJm9SY1ASwKE1bJ2k0YgkwBhZfYmNQItCRBWy9pNGoFMAoSV2ZvUCLQkQFgtazdpBDIJEFZmb1Ij0JIAYbWs3aQRyCRAWJm9SY1ASwKE1bJ2k0YgkwBhZfYmNQItCRBWy9pNGoFMAoSV2ZvUCLQkQFgtazdpBDIJEFZmb1Ij0JIAYbWs3aQRyCRAWJm9SY1ASwKE1bJ2k0YgkwBhZfYmNQItCRBWy9pNGoFMAoSV2ZvUCLQkQFgtazdpBDIJEFZmb1Ij0JIAYbWs3aQRyCRAWJm9SY1ASwKE1bJ2k0YgkwBhZfYmNQItCRBWy9pNGoFMAoSV2ZvUCLQkQFgtazdpBDIJEFZmb1Ij0JIAYbWs3aQRyCRAWJm9SY1ASwKE1bJ2k0YgkwBhZfYmNQItCRBWy9pNGoFMAoSV2ZvUCLQkQFgtazdpBDIJEFZmb1Ij0JIAYbWs3aQRyCRAWJm9SY1ASwKE1bJ2k0YgkwBhZfYmNQItCRBWy9pNGoFMAoSV2ZvUCLQkQFgtazdpBDIJEFZmb1Ij0JIAYbWs3aQRyCRAWJm9SY1ASwKE1bJ2k0YgkwBhZfYmNQItCRBWy9pNGoFMAoSV2ZvUCLQkQFgtazdpBDIJEFZmb1Ij0JIAYbWs3aQRyCRAWJm9SY1ASwKE1bJ2k0YgkwBhZfYmNQItCRBWy9pNGoFMAoSV2ZvUCLQkQFgtazdpBDIJEFZmb1Ij0JIAYbWs3aQRyCRAWJm9SY1ASwKE1bJ2k0YgkwBhZfYmNQItCRBWy9pNGoFMAoSV2ZvUCLQkQFgtazdpBDIJEFZmb1Ij0JIAYbWs3aQRyCRAWJm9SY1ASwKE1bJ2k0YgkwBhZfYmNQItCRBWy9pNGoFMAoSV2ZvUCLQkQFgtazdpBDIJEFZmb1Ij0JIAYbWs3aQRyCRAWJm9SY1ASwKE1bJ2k0YgkwBhZfYmNQItCRBWy9pNGoFMAoSV2ZvUCLQkQFgtazdpBDIJEFZmb1Ij0JIAYbWs3aQRyCRAWJm9SY1ASwKE1bJ2k0YgkwBhZfYmNQItCRBWy9pNGoFMAv8DQqEKOqUAkIYAAAAASUVORK5CYII="> -->
	                  <div class="caption">
	                    <h3>Buscar un producto</h3>
	                    <p>En SistenWeb podras</p>
	                    <p>
	                    <ul>
	                    	<li>Ver catálogo de productos</li>
	                    	<li>Buscar tiendas cerca a usted</li>
	                    	<li>Ver detalle de los productos de su interes</li>
	                    	<li>Ver la ubicación de la tienda y su contacto</li>
	                    </ul></p>
	                    <p><a href="<?php echo Yii::app()->createUrl('SistenWeb/inicio');?>" class="btn btn-primary">Buscar un Producto</a></p>
	                  </div>
	                </div>
	              </li>

	              <li class="span6">
	                <div class="thumbnail">
	                  <!-- <img data-src="holder.js/210x100" alt="210x100" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAASwAAADICAYAAABS39xVAAALgUlEQVR4Xu3b969VRRuG4UFBEFERO8aCBHsFYyyJ/ulGY8MSsMVeoz9YEXsJ8uVdySL7Q9Sz0APn4b1WQrJzGPZ+5n6GO7Nmr7Ppm2++OT5cCCCAQACBTYQV0JKICCAwESAsCwEBBGIIEFZMVYIigABhWQMIIBBDgLBiqhIUAQQIyxpAAIEYAoQVU5WgCCBAWNYAAgjEECCsmKoERQABwrIGEEAghgBhxVQlKAIIEJY1gAACMQQIK6YqQRFAgLCsAQQQiCFAWDFVCYoAAoRlDSCAQAwBwoqpSlAEECAsawABBGIIEFZMVYIigABhWQMIIBBDgLBiqhIUAQQIyxpAAIEYAoQVU5WgCCBAWNYAAgjEECCsmKoERQABwrIGEEAghgBhxVQlKAIIEJY1gAACMQQIK6YqQRFAgLCsAQQQiCFAWDFVCYoAAoRlDSCAQAwBwoqpSlAEECAsawABBGIIEFZMVYIigABhWQMIIBBDgLBiqhIUAQQIyxpAAIEYAoQVU5WgCCBAWNYAAgjEECCsmKoERQABwrIGEEAghgBhxVQlKAIIEJY1gAACMQQIK6YqQRFAgLCsAQQQiCFAWDFVCYoAAoRlDSCAQAwBwoqpSlAEECAsawABBGIIEFZMVYIigABhWQMIIBBDgLBiqhIUAQQIyxpAAIEYAoQVU5WgCCBAWNYAAgjEECCsmKoERQABwrIGEEAghgBhxVQlKAIIEJY1gAACMQQIK6YqQRFAgLCsAQQQiCFAWDFVCYoAAoRlDSCAQAwBwoqpSlAEECAsawABBGIIEFZMVYIigABhWQMIIBBDgLBiqhIUAQQIyxpAAIEYAoQVU5WgCCBAWNYAAgjEECCsmKoERQABwrIGEEAghgBhxVQlKAIIEJY1gAACMQQIK6YqQRFAgLCsAQQQiCFAWDFVCYoAAoRlDSCAQAwBwoqpSlAEECAsawABBGIIEFZMVYIigABhWQMIIBBDgLBiqhIUAQQIyxpAAIEYAoQVU5WgCCBAWNYAAgjEECCsmKoERQABwrIGEEAghgBhxVQlKAIIEJY1gAACMQQIK6aqvw/6/fffjw8++GAcOXJkHD9+fFx88cXj5ptvHrt27frTP/z111/He++9N7766qtx7NixsWPHjrFnz55x5ZVX/quxS1BW3g8//HAcPXp0/P7772Pr1q3jmmuuGTfddNM4//zz/++tNkLeJXMzdv0IENb6sT1j7/zdd9+Nl19+eZLP6rVp06Zx3333jcsvv/zEj2vMwYMHx08//fSnfPfcc8+46qqrTmvsksmWKF955ZVJrCdfl1122di/f/+o7HVthLxL5mbs+hIgrPXle0be/dChQ+Prr78emzdvHnfdddc477zzxuuvvz5+++23sX379vHII4+cyPHRRx9Nu6u6brnllnHppZdOY3/++eexbdu28eijj56QxZKxSyb63HPPjR9//HHaSd1xxx1TxtptffHFF9Pb3H333ePqq6+eXi/JsGTskrzGbhwChLVxujitJLVLeeaZZ8Yvv/wy3QLWn7reeeed8cknn0yvH3vssXHBBRdMr2t3VbdjF1100Xj44Yenn3366afjrbfeml4/8MADY+fOnYvHrjV85Xz66aen4TfccMMkzbpKrk899dT0+vrrrx+33nrr4gxL5rbWvMZtLAKEtbH6OO00JYLaWc1ievPNN8dnn3027ZYef/zxaff1xx9/jCeeeGK6FavzotqN1VXnSC+++OL0ukRRwlgytj6nPq+uuqU7cODA9Lp2TK+++ur0um5L77///ul9azdXeS+88MJpd3WysGaRLcmwZOxpQ/YPzzoBwjrrFfy3AerMpw7eX3vtten859prrx133nnn9CElitqN1bW6uznVz5eMrfcrMc23dLfffvt0Fla3frVz2rJly3jooYemg/W/uuqW8P3335/+er4lXJJhydj/lrh3O5MECOtM0j4DnzWfZ9VHXXHFFdMuqnZXdf3www/j+eefn17feOONY9++fdPr1du06667bpRwloyt96hv+uq96xu9+ry6razD9bpOPsw/GUOdvx0+fHja+dWuq87came4JMOSsWegBh+xTgQIa53Anq23rV1NCah2VyWOekyg/tRVZ1d1zrMWYS0ZO8+1BFXiWb127949Haz/1VWyqm8M65auJFW3k/MZ2pIMS8aerW587r8nQFj/nuGGeofapdR//I8//ni8++67U7baZdWZVT3K8Oyzz04/+6dbwiVjVwHU4X0d4tdV52m1W5p3eKfaWa3KqnLO3w7W2CUZlozdUIUJs4gAYS3ClTO4xFUH7LVzqfOkui2rXVf9rK7Vs61THbovGTtTqc986aWXpkP8+aqD9tXnwOaf1zlb3b7OO6uTZVXjlmRYMjanRUlPJkBY4Wuidhb1DV2dHdUjDbWTqqvOlJ588snpdT3Bfu+9906v52egVh9rWP2Wb/WxhiVj671Xn4OasdZBex2418H7fNUB+QsvvDBlrN3gqWQ1j12SYcnY8Nrbxies8OprZ1HPNc2/3nLbbbdNt2L1azp1PlRXHaLXYXpd9fP6U1c9A3XJJZeMN95445QPji4ZW2dI9WhE7ZjqYdTa1c23pPMOb0a9+sVAfX6dc61eJdN6PGI984bX3jY+YZ0D1X/++efTYwynuuqbwtpdzb/qUmIrsazlV3PWOrYkVYf59fR6PQv24IMPTg+mrt4ezudoNaZ2Qn93rR7UrzVDvd+SsedA7S2nQFjnSO11JlS3ZN9+++2JxwPqP34drs+ymqdat4/1zNOXX365pl9+/qexq0/V7927d/pF6rrqUYO69Suh1cF73RrWZ7799ttrFlYN/K/zniOVt5wGYbWs3aQRyCRAWJm9SY1ASwKE1bJ2k0YgkwBhZfYmNQItCRBWy9pNGoFMAoSV2ZvUCLQkQFgtazdpBDIJEFZmb1Ij0JIAYbWs3aQRyCRAWJm9SY1ASwKE1bJ2k0YgkwBhZfYmNQItCRBWy9pNGoFMAoSV2ZvUCLQkQFgtazdpBDIJEFZmb1Ij0JIAYbWs3aQRyCRAWJm9SY1ASwKE1bJ2k0YgkwBhZfYmNQItCRBWy9pNGoFMAoSV2ZvUCLQkQFgtazdpBDIJEFZmb1Ij0JIAYbWs3aQRyCRAWJm9SY1ASwKE1bJ2k0YgkwBhZfYmNQItCRBWy9pNGoFMAoSV2ZvUCLQkQFgtazdpBDIJEFZmb1Ij0JIAYbWs3aQRyCRAWJm9SY1ASwKE1bJ2k0YgkwBhZfYmNQItCRBWy9pNGoFMAoSV2ZvUCLQkQFgtazdpBDIJEFZmb1Ij0JIAYbWs3aQRyCRAWJm9SY1ASwKE1bJ2k0YgkwBhZfYmNQItCRBWy9pNGoFMAoSV2ZvUCLQkQFgtazdpBDIJEFZmb1Ij0JIAYbWs3aQRyCRAWJm9SY1ASwKE1bJ2k0YgkwBhZfYmNQItCRBWy9pNGoFMAoSV2ZvUCLQkQFgtazdpBDIJEFZmb1Ij0JIAYbWs3aQRyCRAWJm9SY1ASwKE1bJ2k0YgkwBhZfYmNQItCRBWy9pNGoFMAoSV2ZvUCLQkQFgtazdpBDIJEFZmb1Ij0JIAYbWs3aQRyCRAWJm9SY1ASwKE1bJ2k0YgkwBhZfYmNQItCRBWy9pNGoFMAoSV2ZvUCLQkQFgtazdpBDIJEFZmb1Ij0JIAYbWs3aQRyCRAWJm9SY1ASwKE1bJ2k0YgkwBhZfYmNQItCRBWy9pNGoFMAoSV2ZvUCLQkQFgtazdpBDIJEFZmb1Ij0JIAYbWs3aQRyCRAWJm9SY1ASwKE1bJ2k0YgkwBhZfYmNQItCRBWy9pNGoFMAoSV2ZvUCLQkQFgtazdpBDIJEFZmb1Ij0JIAYbWs3aQRyCRAWJm9SY1ASwKE1bJ2k0YgkwBhZfYmNQItCRBWy9pNGoFMAv8DQqEKOqUAkIYAAAAASUVORK5CYII="> -->
	                  <div class="caption">
	                    <h3>Administrar una Tienda</h3>
	                    <p>En SistenWeb podras</p>
	                    <p> 
	                    	<ul>
		                    	<li>Gestionar tus productos</li>
		                    	<li>Gestionar tus clientes y proveedores</li>
		                    	<li>Gestionar tus ventas y compars</li>
		                    	<li>Ver la ubicación de la tienda y su contacto</li>
	                    	</ul>	
	                	</p>
	                    <p><a href="<?php echo Yii::app()->createUrl('SistenAdmin/default/admin');?>" class="btn btn-primary">Administrar una Tienda</a></p>
	                  </div>
	                </div>
	              </li>
	             
	            </ul>
	        </div>

	          <!-- <div class="row-fluid">
		            <div class="span6">
		              <i class="icon-desktop icon-4x"></i>
		              <h2>Blok</h2>
		              <p>
		                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse,
		              </p>

		            </div>
		            <div class="span6">

		            <h1>Testimony</h1>
		            <div class="media">
		              <a class="pull-left" href="#">
		                <img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 64px; height: 64px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAACd0lEQVR4Xu2Y+4vpQRjGH5LdDVFai0jLJmklIZE/X4Rkw9au64ofKLlfcsued4rOObVnT/Ntz9l4p6SYeec7zzzzfBjVcDg84IKbigVgB/AR4Ay44AwEhyBTgCnAFGAKMAUuWAHGIGOQMcgYZAxeMAT4zxBjkDHIGGQMMgYZgxesAGNQKQbn8zleXl5A7zc3N/D7/TAYDL946u3tDfV6HaFQCGaz+VO/fUXNjyZV5IDtdot0Og2tVgu32y0WqVarEY/HT/ONx2MUCgUcDoe/EuArav5JcUUC9Pt9lMtlPD4+wmq1YrlcioXqdDox52azQTabxdXVFabT6UmAVquFRqMBj8cDp9OJTCYDlUqFWCyGH46UqvmprT7ooEiAo7Vvb28xmUxwfX0Nr9cLk8kkpisWi9jtdnC5XCiVSicBSCT6jtxBfUejESKRCIxGI2Rr/hcBjjtJAtzf36NarQoXJJNJdDodNJtNhMNh8VmlUkEgEAD1pWOyXq+FO8gldHzoRU1JTRkRFDmg1+uJhVHw2e12tNtt1Go1JBIJPD8/C1f83kiEu7s7LBYL5HI57Pd7IUowGBRdldT85wJQYKVSKZH+5ACyL+0sOWA2mwn7U6PzT2f+4eEBNpsNGo0G+Xxe7L7FYkG324XP54PD4YBsTcoZmabIATQh7fLr66vYUQq/nzPg+ECDwQBPT0+nDCBs0qKPR4KcsFqtEI1GodfrpWrKLJ7GKBZAduLvMo4FUPpL8LvspOxzsAPYAXwlxldifCUmm6DnMI4pwBRgCjAFmALnkOaya2AKMAWYAkwBpoBsgp7DOKYAU4ApwBRgCpxDmsuu4eIp8A4wEGCfEGZc+QAAAABJRU5ErkJggg==">
		              </a>
		              <div class="media-body">
		                <h4 class="media-heading">Media heading</h4>
		                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
		              </div>
		            </div>
		            <div class="media">
		              <a class="pull-left" href="#">
		                <img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 64px; height: 64px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAACd0lEQVR4Xu2Y+4vpQRjGH5LdDVFai0jLJmklIZE/X4Rkw9au64ofKLlfcsued4rOObVnT/Ntz9l4p6SYeec7zzzzfBjVcDg84IKbigVgB/AR4Ay44AwEhyBTgCnAFGAKMAUuWAHGIGOQMcgYZAxeMAT4zxBjkDHIGGQMMgYZgxesAGNQKQbn8zleXl5A7zc3N/D7/TAYDL946u3tDfV6HaFQCGaz+VO/fUXNjyZV5IDtdot0Og2tVgu32y0WqVarEY/HT/ONx2MUCgUcDoe/EuArav5JcUUC9Pt9lMtlPD4+wmq1YrlcioXqdDox52azQTabxdXVFabT6UmAVquFRqMBj8cDp9OJTCYDlUqFWCyGH46UqvmprT7ooEiAo7Vvb28xmUxwfX0Nr9cLk8kkpisWi9jtdnC5XCiVSicBSCT6jtxBfUejESKRCIxGI2Rr/hcBjjtJAtzf36NarQoXJJNJdDodNJtNhMNh8VmlUkEgEAD1pWOyXq+FO8gldHzoRU1JTRkRFDmg1+uJhVHw2e12tNtt1Go1JBIJPD8/C1f83kiEu7s7LBYL5HI57Pd7IUowGBRdldT85wJQYKVSKZH+5ACyL+0sOWA2mwn7U6PzT2f+4eEBNpsNGo0G+Xxe7L7FYkG324XP54PD4YBsTcoZmabIATQh7fLr66vYUQq/nzPg+ECDwQBPT0+nDCBs0qKPR4KcsFqtEI1GodfrpWrKLJ7GKBZAduLvMo4FUPpL8LvspOxzsAPYAXwlxldifCUmm6DnMI4pwBRgCjAFmALnkOaya2AKMAWYAkwBpoBsgp7DOKYAU4ApwBRgCpxDmsuu4eIp8A4wEGCfEGZc+QAAAABJRU5ErkJggg==">
		              </a>
		              <div class="media-body">
		                <h4 class="media-heading">Media heading</h4>
		                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
		                <div class="media">
		                  <a class="pull-left" href="#">
		                    <img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 64px; height: 64px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAACd0lEQVR4Xu2Y+4vpQRjGH5LdDVFai0jLJmklIZE/X4Rkw9au64ofKLlfcsued4rOObVnT/Ntz9l4p6SYeec7zzzzfBjVcDg84IKbigVgB/AR4Ay44AwEhyBTgCnAFGAKMAUuWAHGIGOQMcgYZAxeMAT4zxBjkDHIGGQMMgYZgxesAGNQKQbn8zleXl5A7zc3N/D7/TAYDL946u3tDfV6HaFQCGaz+VO/fUXNjyZV5IDtdot0Og2tVgu32y0WqVarEY/HT/ONx2MUCgUcDoe/EuArav5JcUUC9Pt9lMtlPD4+wmq1YrlcioXqdDox52azQTabxdXVFabT6UmAVquFRqMBj8cDp9OJTCYDlUqFWCyGH46UqvmprT7ooEiAo7Vvb28xmUxwfX0Nr9cLk8kkpisWi9jtdnC5XCiVSicBSCT6jtxBfUejESKRCIxGI2Rr/hcBjjtJAtzf36NarQoXJJNJdDodNJtNhMNh8VmlUkEgEAD1pWOyXq+FO8gldHzoRU1JTRkRFDmg1+uJhVHw2e12tNtt1Go1JBIJPD8/C1f83kiEu7s7LBYL5HI57Pd7IUowGBRdldT85wJQYKVSKZH+5ACyL+0sOWA2mwn7U6PzT2f+4eEBNpsNGo0G+Xxe7L7FYkG324XP54PD4YBsTcoZmabIATQh7fLr66vYUQq/nzPg+ECDwQBPT0+nDCBs0qKPR4KcsFqtEI1GodfrpWrKLJ7GKBZAduLvMo4FUPpL8LvspOxzsAPYAXwlxldifCUmm6DnMI4pwBRgCjAFmALnkOaya2AKMAWYAkwBpoBsgp7DOKYAU4ApwBRgCpxDmsuu4eIp8A4wEGCfEGZc+QAAAABJRU5ErkJggg==">
		                  </a>
		                  <div class="media-body">
		                    <h4 class="media-heading">Media heading</h4>
		                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
		                  </div>
		                </div>
		              </div>
		            </div>
		            </div>
	          </div> -->
	</div>
</section>
  <!-- START THE FEATURETTES -->
  <script>
    !function ($) {
      $(function(){
        // carousel demo
        $('#myCarousel').carousel()
      })
    }(window.jQuery)
  </script>
