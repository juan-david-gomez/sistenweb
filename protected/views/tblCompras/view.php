<?php
/** @var TblComprasController $this */
/** @var TblCompras $model */
$this->breadcrumbs=array(
	'Tbl Comprases'=>array('index'),
	$model->id_compra,
);

$this->menu=array(
    //array('label' => Yii::t('AweCrud.app', 'List') . ' ' . TblCompras::label(2), 'icon' => 'list', 'url' => array('index')),
    array('label' => Yii::t('AweCrud.app', 'Create') . ' ' . TblCompras::label(), 'icon' => 'plus', 'url' => array('create')),
	array('label' => Yii::t('AweCrud.app', 'Update'), 'icon' => 'pencil', 'url' => array('update', 'id' => $model->id_compra)),
    array('label' => Yii::t('AweCrud.app', 'Delete'), 'icon' => 'trash', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id_compra), 'confirm' => Yii::t('AweCrud.app', 'Are you sure you want to delete this item?'))),
    array('label' => Yii::t('AweCrud.app', 'Manage'), 'icon' => 'list-alt', 'url' => array('admin')),
);
?>

<fieldset>
    <legend><?php echo Yii::t('AweCrud.app', 'View') . ' ' . TblCompras::label(); ?> <?php echo CHtml::encode($model) ?></legend>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data' => $model,
	'attributes' => array(
        'id_compra',
        array(
			'name'=>'id_proveedor',
			'value'=>($model->idProveedor !== null) ? CHtml::link($model->idProveedor, array('/tblProveedores/view', 'id_proveedor' => $model->idProveedor->id_proveedor)).' ' : null,
			'type'=>'html',
		),
        array(
			'name'=>'id_usuario',
			'value'=>($model->idUsuario !== null) ? CHtml::link($model->idUsuario, array('/tblUsuarios/view', 'id_usuario' => $model->idUsuario->id_usuario)).' ' : null,
			'type'=>'html',
		),
        'total_compra',
        'fecha_compra',
        'observaciones',
	),
)); ?>
</fieldset>