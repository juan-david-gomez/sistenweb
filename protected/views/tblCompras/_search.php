<?php
/** @var TblComprasController $this */
/** @var AweActiveForm $form */
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

<?php echo $form->textFieldRow($model, 'id_compra', array('class' => 'span5')); ?>

<?php echo $form->dropDownListRow($model, 'id_proveedor', CHtml::listData(TblProveedores::model()->findAll(), 'id_proveedor', TblProveedores::representingColumn()), array('prompt' => Yii::t('AweApp', 'None'))); ?>

<?php echo $form->dropDownListRow($model, 'id_usuario', CHtml::listData(TblUsuarios::model()->findAll(), 'id_usuario', TblUsuarios::representingColumn()), array('prompt' => Yii::t('AweApp', 'None'))); ?>

<?php echo $form->textFieldRow($model, 'total_compra', array('class' => 'span5')); ?>

<?php echo $form->datepickerRow($model, 'fecha_compra'); ?>
<?php // echo $form->datepickerRow($model, 'fecha_compra', array('prepend'=>'<i class="icon-calendar"></i>')); ?>

<?php echo $form->textAreaRow($model,'observaciones',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

<div class="form-actions">
    <?php $this->widget('bootstrap.widgets.TbButton', array(
			'type' => 'primary',
			'label' => Yii::t('AweCrud.app', 'Search'),
		)); ?>
</div>

<?php $this->endWidget(); ?>
