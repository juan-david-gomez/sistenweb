<?php
/** @var ProductoController $this */
/** @var Producto $model */
$this->breadcrumbs=array(
	'Productos'=>array('index'),
	Yii::t('AweCrud.app', 'Manage'),
);

$this->menu=array(
	// array('label' => Yii::t('AweCrud.app', 'List') . ' ' . Producto::label(2), 'icon' => 'list', 'url' => array('index')),
	array('label' => Yii::t('AweCrud.app', 'Create') . ' ' . Producto::label(), 'icon' => 'plus', 'url' => array('create')),
);

?>

<fieldset>
    <legend>
        <?php echo Yii::t('AweCrud.app', 'Manage') ?> <?php echo Producto::label(2) ?>    </legend>



<?php $this->widget('bootstrap.widgets.TbGridView',array(
    'id' => 'producto-grid',
    'type' => 'striped condensed',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        'id_producto',
        'nombre_producto',
        'stock',
        'costo_actual',
        'precio',
        'presentacion',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
</fieldset>