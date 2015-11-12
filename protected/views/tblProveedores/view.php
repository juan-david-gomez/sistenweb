<?php
/** @var TblProveedoresController $this */
/** @var TblProveedores $model */
$this->breadcrumbs=array(
	'Tbl Proveedores'=>array('index'),
	$model->id_proveedor,
);

$this->menu=array(
    //array('label' => Yii::t('AweCrud.app', 'List') . ' ' . TblProveedores::label(2), 'icon' => 'list', 'url' => array('index')),
    array('label' => Yii::t('AweCrud.app', 'Create') . ' ' . TblProveedores::label(), 'icon' => 'plus', 'url' => array('create')),
	array('label' => Yii::t('AweCrud.app', 'Update'), 'icon' => 'pencil', 'url' => array('update', 'id' => $model->id_proveedor)),
    array('label' => Yii::t('AweCrud.app', 'Delete'), 'icon' => 'trash', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id_proveedor), 'confirm' => Yii::t('AweCrud.app', 'Are you sure you want to delete this item?'))),
    array('label' => Yii::t('AweCrud.app', 'Manage'), 'icon' => 'list-alt', 'url' => array('admin')),
);
?>

<fieldset>
    <legend><?php echo Yii::t('AweCrud.app', 'View') . ' ' . TblProveedores::label(); ?> <?php echo CHtml::encode($model) ?></legend>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data' => $model,
	'attributes' => array(
        'id_proveedor',
        'nombre_proveedor',
        'empresa_proveedor',
        'telefono',
        array(
                'name'=>'email',
                'type'=>'email'
            ),
	),
)); ?>
</fieldset>