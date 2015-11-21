<?php
/** @var InicioController $this */
/** @var Publicacion $model */
$this->breadcrumbs=array(
	'Publicacions'=>array('index'),
	$model->id_publicacion,
);

$this->menu=array(
    //array('label' => Yii::t('AweCrud.app', 'List') . ' ' . Publicacion::label(2), 'icon' => 'list', 'url' => array('index')),
    array('label' => Yii::t('AweCrud.app', 'Create') . ' ' . Publicacion::label(), 'icon' => 'plus', 'url' => array('create')),
	array('label' => Yii::t('AweCrud.app', 'Update'), 'icon' => 'pencil', 'url' => array('update', 'id' => $model->id_publicacion)),
    array('label' => Yii::t('AweCrud.app', 'Delete'), 'icon' => 'trash', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id_publicacion), 'confirm' => Yii::t('AweCrud.app', 'Are you sure you want to delete this item?'))),
    array('label' => Yii::t('AweCrud.app', 'Manage'), 'icon' => 'list-alt', 'url' => array('admin')),
);
?>

<fieldset>
    <legend><?php echo Yii::t('AweCrud.app', 'View') . ' ' . Publicacion::label(); ?> <?php echo CHtml::encode($model) ?></legend>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data' => $model,
	'attributes' => array(
        'id_publicacion',
        'nombre_publicacion',
        'titulo_publicacion',
        'descripcion_publicacion',
        array(
			'name'=>'id_producto',
			'value'=>($model->idProducto !== null) ? CHtml::link($model->idProducto, array('/producto/view', 'id_producto' => $model->idProducto->id_producto)).' ' : null,
			'type'=>'html',
		),
        'precio_publicacion',
        'imagen',
	),
)); ?>
</fieldset>