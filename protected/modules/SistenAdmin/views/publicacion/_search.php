<?php
/** @var PublicacionController $this */
/** @var AweActiveForm $form */
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

<?php echo $form->textFieldRow($model, 'id_publicacion', array('class' => 'span5')); ?>

<?php echo $form->textFieldRow($model, 'nombre_publicacion', array('class' => 'span5', 'maxlength' => 50)); ?>

<?php echo $form->textFieldRow($model, 'titulo_publicacion', array('class' => 'span5', 'maxlength' => 255)); ?>

<?php echo $form->textFieldRow($model, 'descripcion_publicacion', array('class' => 'span5', 'maxlength' => 255)); ?>

<?php echo $form->dropDownListRow($model, 'id_producto', CHtml::listData(Producto::model()->findAll(), 'id_producto', Producto::representingColumn()), array('prompt' => Yii::t('AweApp', 'None'))); ?>

<?php echo $form->textFieldRow($model, 'precio_publicacion', array('class' => 'span5', 'maxlength' => 255)); ?>

<?php echo $form->textFieldRow($model, 'imagen', array('class' => 'span5', 'maxlength' => 100)); ?>

<div class="form-actions">
    <?php $this->widget('bootstrap.widgets.TbButton', array(
			'type' => 'primary',
			'label' => Yii::t('AweCrud.app', 'Search'),
		)); ?>
</div>

<?php $this->endWidget(); ?>
