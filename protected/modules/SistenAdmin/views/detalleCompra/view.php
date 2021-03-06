<?php
/** @var DetalleCompraController $this */
/** @var DetalleCompra $model */
$this->breadcrumbs=array(
	'Detalle Compras'=>array('index'),
	$model->id_detalle,
);

$this->menu=array(
    //array('label' => Yii::t('AweCrud.app', 'List') . ' ' . DetalleCompra::label(2), 'icon' => 'list', 'url' => array('index')),
    array('label' => Yii::t('AweCrud.app', 'Create') . ' ' . DetalleCompra::label(), 'icon' => 'plus', 'url' => array('create')),
	array('label' => Yii::t('AweCrud.app', 'Update'), 'icon' => 'pencil', 'url' => array('update', 'id' => $model->id_detalle)),
    array('label' => Yii::t('AweCrud.app', 'Delete'), 'icon' => 'trash', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id_detalle), 'confirm' => Yii::t('AweCrud.app', 'Are you sure you want to delete this item?'))),
    array('label' => Yii::t('AweCrud.app', 'Manage'), 'icon' => 'list-alt', 'url' => array('admin')),
);
?>

<fieldset>
    <legend><?php echo Yii::t('AweCrud.app', 'View') . ' ' . DetalleCompra::label(); ?> <?php echo CHtml::encode($model) ?></legend>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data' => $model,
	'attributes' => array(
        'id_detalle',
        array(
			'name'=>'id_compra',
			'value'=>($model->idCompra !== null) ? CHtml::link($model->idCompra, array('/compra/view', 'id_compra' => $model->idCompra->id_compra)).' ' : null,
			'type'=>'html',
		),
        array(
			'name'=>'id_producto',
			'value'=>($model->idProducto !== null) ? CHtml::link($model->idProducto, array('/producto/view', 'id_producto' => $model->idProducto->id_producto)).' ' : null,
			'type'=>'html',
		),
        'valor_unidad',
        'cantidad',
        'valor_total',
	),
)); ?>
</fieldset>