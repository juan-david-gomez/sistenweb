<?php
/** @var TblProductosController $this */
/** @var AweActiveForm $form */
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

<?php echo $form->textFieldRow($model, 'id_producto', array('class' => 'span5')); ?>

<?php echo $form->textFieldRow($model, 'nombre_producto', array('class' => 'span5', 'maxlength' => 50)); ?>

<?php echo $form->textFieldRow($model, 'stock', array('class' => 'span5')); ?>

<?php echo $form->textFieldRow($model, 'costo_actual', array('class' => 'span5')); ?>

<?php echo $form->textFieldRow($model, 'precio', array('class' => 'span5')); ?>

<?php echo $form->textFieldRow($model, 'presentacion', array('class' => 'span5', 'maxlength' => 50)); ?>

<div class="form-actions">
    <?php $this->widget('bootstrap.widgets.TbButton', array(
			'type' => 'primary',
			'label' => Yii::t('AweCrud.app', 'Search'),
		)); ?>
</div>

<?php $this->endWidget(); ?>
