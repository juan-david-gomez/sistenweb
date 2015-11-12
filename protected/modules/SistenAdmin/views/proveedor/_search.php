<?php
/** @var ProveedorController $this */
/** @var AweActiveForm $form */
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

<?php echo $form->textFieldRow($model, 'id_proveedor', array('class' => 'span5')); ?>

<?php echo $form->textFieldRow($model, 'nombre_proveedor', array('class' => 'span5', 'maxlength' => 50)); ?>

<?php echo $form->textFieldRow($model, 'empresa_proveedor', array('class' => 'span5', 'maxlength' => 50)); ?>

<?php echo $form->textFieldRow($model, 'telefono', array('class' => 'span5', 'maxlength' => 30)); ?>

<?php echo $form->textFieldRow($model, 'email', array('class' => 'span5', 'maxlength' => 60)); ?>

<div class="form-actions">
    <?php $this->widget('bootstrap.widgets.TbButton', array(
			'type' => 'primary',
			'label' => Yii::t('AweCrud.app', 'Search'),
		)); ?>
</div>

<?php $this->endWidget(); ?>
