

<!-- 				<a class="quick-button metro red span2">
					<i class="icon-group"></i>
					<p>Proveedores</p>
					<span class="badge">237</span>
				</a>
				<a class="quick-button metro blue span2">
					<i class="icon-shopping-cart"></i>
					<p>Compras</p>
					<span class="badge">13</span>
				</a>
				<a class="quick-button metro black span2">
					<i class="icon-barcode"></i>
					<p>Productos</p>
				</a>
				<a class="quick-button metro red span2">
					<i class="icon-user"></i>
					<p>Usuarios</p>
				</a>
				
				<div class="clearfix"></div>
								
 -->

			<div class="row-fluid">	
				<a href="<?php echo Yii::app()->createUrl('SistenAdmin/default/admin');?>" class="quick-button metro red span2 offset1">
					<i class="icon-dashboard"></i><p class="hidden-tablet"> Inicio</p>
				</a>
				<a href="<?php echo Yii::app()->createUrl('SistenAdmin/producto/admin');?>" class="quick-button metro blue span2">
					<i class="icon-barcode"></i><p class="hidden-tablet"> Productos</p>
				</a>
				<a href="<?php echo Yii::app()->createUrl('SistenAdmin/proveedor/admin');?>" class="quick-button metro black span2">
					<i class="icon-group"></i><p class="hidden-tablet"> Proveedores</p>
				</a>
				<a href="<?php echo Yii::app()->createUrl('SistenAdmin/compra/admin');?>" class="quick-button metro blue span2">
					<i class="icon-shopping-cart"></i><p class="hidden-tablet"> Compras</p>
				</a>
				<a href="<?php echo Yii::app()->createUrl('SistenAdmin/Usuario/admin');?>" class="quick-button metro red span2">
					<i class="icon-user"></i><p class="hidden-tablet"> Usuarios</p>
				</a>
			</div><!--/row-->