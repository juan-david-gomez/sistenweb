<?php
/** @var TblInventarioController $this */
/** @var TblInventario $model */
$this->breadcrumbs=array(
	'Tbl Inventarios'=>array('index'),
	$model->id_inventario,
);

$this->menu=array(
    //array('label' => Yii::t('AweCrud.app', 'List') . ' ' . TblInventario::label(2), 'icon' => 'list', 'url' => array('index')),
    array('label' => Yii::t('AweCrud.app', 'Create') . ' ' . TblInventario::label(), 'icon' => 'plus', 'url' => array('create')),
	array('label' => Yii::t('AweCrud.app', 'Update'), 'icon' => 'pencil', 'url' => array('update', 'id' => $model->id_inventario)),
    array('label' => Yii::t('AweCrud.app', 'Delete'), 'icon' => 'trash', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id_inventario), 'confirm' => Yii::t('AweCrud.app', 'Are you sure you want to delete this item?'))),
    array('label' => Yii::t('AweCrud.app', 'Manage'), 'icon' => 'list-alt', 'url' => array('admin')),
);
?>

<fieldset>
    <legend><?php echo Yii::t('AweCrud.app', 'View') . ' ' . TblInventario::label(); ?> <?php echo CHtml::encode($model) ?></legend>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data' => $model,
	'attributes' => array(
        'id_inventario',
        array(
			'name'=>'id_producto',
			'value'=>($model->idProducto !== null) ? CHtml::link($model->idProducto, array('/tblProductos/view', 'id_producto' => $model->idProducto->id_producto)).' ' : null,
			'type'=>'html',
		),
	),
)); ?>
</fieldset>