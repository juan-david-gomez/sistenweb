<?php
/** @var TblInventarioController $this */
/** @var AweActiveForm $form */
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

<?php echo $form->textFieldRow($model, 'id_inventario', array('class' => 'span5')); ?>

<?php echo $form->dropDownListRow($model, 'id_producto', CHtml::listData(TblProductos::model()->findAll(), 'id_producto', TblProductos::representingColumn()), array('prompt' => Yii::t('AweApp', 'None'))); ?>

<div class="form-actions">
    <?php $this->widget('bootstrap.widgets.TbButton', array(
			'type' => 'primary',
			'label' => Yii::t('AweCrud.app', 'Search'),
		)); ?>
</div>

<?php $this->endWidget(); ?>
