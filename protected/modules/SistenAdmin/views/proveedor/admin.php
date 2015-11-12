<?php
/** @var ProveedorController $this */
/** @var Proveedor $model */
$this->breadcrumbs=array(
	'Proveedors'=>array('index'),
	Yii::t('AweCrud.app', 'Manage'),
);

$this->menu=array(
	// array('label' => Yii::t('AweCrud.app', 'List') . ' ' . Proveedor::label(2), 'icon' => 'list', 'url' => array('index')),
	array('label' => Yii::t('AweCrud.app', 'Create') . ' ' . Proveedor::label(), 'icon' => 'plus', 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('proveedor-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<fieldset>
    <legend>
        <?php echo Yii::t('AweCrud.app', 'Manage') ?> <?php echo Proveedor::label(2) ?>    </legend>

<?php echo CHtml::link('<i class="icon-search"></i> ' . Yii::t('AweCrud.app', 'Advanced Search'), '#', array('class' => 'search-button btn')) ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model' => $model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
    'id' => 'proveedor-grid',
    'type' => 'striped condensed',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        'id_proveedor',
        'nombre_proveedor',
        'empresa_proveedor',
        'telefono',
        'email',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
</fieldset>