<?php
/** @var CompraController $this */
/** @var AweActiveForm $form */
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

<?php echo $form->textFieldRow($model, 'id_compra', array('class' => 'span5')); ?>

<?php echo $form->dropDownListRow($model, 'id_proveedor', CHtml::listData(Proveedor::model()->findAll(), 'id_proveedor', Proveedor::representingColumn()), array('prompt' => Yii::t('AweApp', 'None'))); ?>

<?php echo $form->dropDownListRow($model, 'id_usuario', CHtml::listData(Usuario::model()->findAll(), 'id_usuario', Usuario::representingColumn()), array('prompt' => Yii::t('AweApp', 'None'))); ?>

<?php echo $form->textFieldRow($model, 'total_compra', array('class' => 'span5')); ?>

<?php echo $form->datepickerRow($model, 'fecha_compra',array(), array('prepend'=>'<i class="icon-calendar"></i>')); ?>

<?php echo $form->textAreaRow($model,'observaciones',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

<div class="form-actions">
    <?php $this->widget('bootstrap.widgets.TbButton', array(
			'type' => 'primary',
			'label' => Yii::t('AweCrud.app', 'Search'),
		)); ?>
</div>

<?php $this->endWidget(); ?>
