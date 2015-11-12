<div class="row-fluid">
	<div class="login-box">
		<div class="icons">
			<a href="<?php echo Yii::app()->createUrl('/');?>"><i class="halflings-icon home"></i></a>
			<!-- <a href="#"><i class="halflings-icon cog"></i></a> -->
		</div>
		<?php if(Yii::app()->user->hasFlash('error')):?>
			<div class="span11">
				<div class="alert alert-error"><?php echo Yii::app()->user->getFlash('error'); ?></div>
			</div>
		<?php endif; ?>
		<h2>Ingresa al Sistema</h2>
		<form class="form-horizontal" action="<?php echo Yii::app()->createUrl('SistenAdmin/default/login');?>" method="post">
			<fieldset>
				
				<div class="input-prepend" title="Username">
					<span class="add-on"><i class="halflings-icon user"></i></span>
					<input class="input-large span10" name="username" value="<?php echo isset($model)?$model->username:'';  ?>" id="username" type="text" placeholder="Ingresa el nombre de usuario"/>
				</div>

				<div class="clearfix"></div>

				<div class="input-prepend" title="Password">
					<span class="add-on"><i class="halflings-icon lock"></i></span>
					<input class="input-large span10" name="password" id="password" value="<?php echo isset($model)?$model->password:'';  ?>" type="password" placeholder="Ingrese la contraseña"/>
				</div>

				<div class="clearfix"></div>

				<div class="button-login" >	
					<button type="submit" class="btn btn-primary">Entrar</button>
				</div>

				<div class="clearfix"></div>
			</fieldset>
		</form>
	
	</div><!--/span-->
</div><!--/row-->