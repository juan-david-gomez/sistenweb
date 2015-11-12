<?php
/** @var CompraController $this */
/** @var Compra $model */
$this->breadcrumbs=array(
	'Compras'=>array('index'),
	$model->id_compra,
);

$this->menu=array(
    //array('label' => Yii::t('AweCrud.app', 'List') . ' ' . Compra::label(2), 'icon' => 'list', 'url' => array('index')),
    array('label' => Yii::t('AweCrud.app', 'Create') . ' ' . Compra::label(), 'icon' => 'plus', 'url' => array('create')),
	array('label' => Yii::t('AweCrud.app', 'Update'), 'icon' => 'pencil', 'url' => array('update', 'id' => $model->id_compra)),
    array('label' => Yii::t('AweCrud.app', 'Delete'), 'icon' => 'trash', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id_compra), 'confirm' => Yii::t('AweCrud.app', 'Are you sure you want to delete this item?'))),
    array('label' => Yii::t('AweCrud.app', 'Manage'), 'icon' => 'list-alt', 'url' => array('admin')),
    array('label' => Yii::t('AweCrud.app', 'Productos'), 'icon' => 'list-alt', 'url' => Yii::app()->createUrl('SistenAdmin/DetalleCompra/create',array('id_compra'=>$model->id_compra))),
);
?>

<fieldset>
    <legend><?php echo Yii::t('AweCrud.app', 'View') . ' ' . Compra::label(); ?> <?php echo CHtml::encode($model) ?></legend>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data' => $model,
	'attributes' => array(
        'id_compra',
        array(
			'name'=>'id_proveedor',
			'value'=>($model->idProveedor !== null) ? CHtml::link($model->idProveedor, array('/proveedor/view', 'id_proveedor' => $model->idProveedor->id_proveedor)).' ' : null,
			'type'=>'html',
		),
        array(
			'name'=>'id_usuario',
			'value'=>($model->idUsuario !== null) ? CHtml::link($model->idUsuario, array('/usuario/view', 'id_usuario' => $model->idUsuario->id_usuario)).' ' : null,
			'type'=>'html',
		),
        'total_compra',
        'fecha_compra',
        'observaciones',
	),
)); ?>
</fieldset>

<?php 
$modelDetalle = DetalleCompra::model();
$modelDetalle->id_compra = $model->id_compra;
$this->widget('bootstrap.widgets.TbGridView',array(
    'id' => 'detalle-compra-grid',
    'type' => 'striped condensed',
    'dataProvider' => $modelDetalle->search(),
    'filter' => $modelDetalle,
    'columns' => array(
        'id_detalle',
        array(
                    'name' => 'id_compra',
                    'value' => 'isset($data->idCompra) ? $data->idCompra : null',
                    'filter' => CHtml::listData(Compra::model()->findAll(), 'id_compra', Compra::representingColumn()),
                ),
        array(
                    'name' => 'id_producto',
                    'value' => 'isset($data->idProducto) ? $data->idProducto : null',
                    'filter' => CHtml::listData(Producto::model()->findAll(), 'id_producto', Producto::representingColumn()),
                ),
        'valor_unidad',
        'cantidad',
        'valor_total',
		// array(
		// 	'class'=>'bootstrap.widgets.TbButtonColumn',
		// ),
	),
));
 ?>