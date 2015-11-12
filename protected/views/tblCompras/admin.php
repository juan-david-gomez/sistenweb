<?php
/** @var TblComprasController $this */
/** @var TblCompras $model */
$this->breadcrumbs=array(
	'Tbl Comprases'=>array('index'),
	Yii::t('AweCrud.app', 'Manage'),
);

$this->menu=array(
	array('label' => Yii::t('AweCrud.app', 'List') . ' ' . TblCompras::label(2), 'icon' => 'list', 'url' => array('index')),
	array('label' => Yii::t('AweCrud.app', 'Create') . ' ' . TblCompras::label(), 'icon' => 'plus', 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('tbl-compras-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<fieldset>
    <legend>
        <?php echo Yii::t('AweCrud.app', 'Manage') ?> <?php echo TblCompras::label(2) ?>    </legend>

<?php echo CHtml::link('<i class="icon-search"></i> ' . Yii::t('AweCrud.app', 'Advanced Search'), '#', array('class' => 'search-button btn')) ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model' => $model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
    'id' => 'tbl-compras-grid',
    'type' => 'striped condensed',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        'id_compra',
        array(
                    'name' => 'id_proveedor',
                    'value' => 'isset($data->idProveedor) ? $data->idProveedor : null',
                    'filter' => CHtml::listData(TblProveedores::model()->findAll(), 'id_proveedor', TblProveedores::representingColumn()),
                ),
        array(
                    'name' => 'id_usuario',
                    'value' => 'isset($data->idUsuario) ? $data->idUsuario : null',
                    'filter' => CHtml::listData(TblUsuarios::model()->findAll(), 'id_usuario', TblUsuarios::representingColumn()),
                ),
        'total_compra',
        'fecha_compra',
        'observaciones',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
</fieldset>