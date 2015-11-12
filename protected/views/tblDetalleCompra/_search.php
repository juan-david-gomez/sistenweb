<?php
/** @var TblDetalleCompraController $this */
/** @var AweActiveForm $form */
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

<?php echo $form->textFieldRow($model, 'id_detalle', array('class' => 'span5')); ?>

<?php echo $form->dropDownListRow($model, 'id_compra', CHtml::listData(TblCompras::model()->findAll(), 'id_compra', TblCompras::representingColumn()), array('prompt' => Yii::t('AweApp', 'None'))); ?>

<?php echo $form->dropDownListRow($model, 'id_producto', CHtml::listData(TblProductos::model()->findAll(), 'id_producto', TblProductos::representingColumn()), array('prompt' => Yii::t('AweApp', 'None'))); ?>

<?php echo $form->textFieldRow($model, 'valor_unidad', array('class' => 'span5')); ?>

<?php echo $form->textFieldRow($model, 'cantidad', array('class' => 'span5')); ?>

<?php echo $form->textFieldRow($model, 'valor_total', array('class' => 'span5')); ?>

<div class="form-actions">
    <?php $this->widget('bootstrap.widgets.TbButton', array(
			'type' => 'primary',
			'label' => Yii::t('AweCrud.app', 'Search'),
		)); ?>
</div>

<?php $this->endWidget(); ?>
