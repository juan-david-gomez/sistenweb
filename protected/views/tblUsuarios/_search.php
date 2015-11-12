<?php
/** @var TblUsuariosController $this */
/** @var AweActiveForm $form */
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

<?php echo $form->textFieldRow($model, 'id_usuario', array('class' => 'span5')); ?>

<?php echo $form->textFieldRow($model, 'nombre_usuario', array('class' => 'span5', 'maxlength' => 50)); ?>

<?php echo $form->textFieldRow($model, 'username_usuario', array('class' => 'span5', 'maxlength' => 50)); ?>

<?php echo $form->textFieldRow($model, 'clave_usuario', array('class' => 'span5', 'maxlength' => 50)); ?>

<?php echo $form->textFieldRow($model, 'email_usuario', array('class' => 'span5', 'maxlength' => 50)); ?>

<div class="form-actions">
    <?php $this->widget('bootstrap.widgets.TbButton', array(
			'type' => 'primary',
			'label' => Yii::t('AweCrud.app', 'Search'),
		)); ?>
</div>

<?php $this->endWidget(); ?>
