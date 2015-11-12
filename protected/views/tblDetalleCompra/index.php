<?php
/** @var TblDetalleCompraController $this */
/** @var TblDetalleCompra $model */
$this->breadcrumbs = array(
	'Tbl Detalle Compras',
);

$this->menu = array(
    array('label' => Yii::t('AweCrud.app', 'Create') . ' ' . TblDetalleCompra::label(), 'icon' => 'plus', 'url' => array('create')),
    array('label' => Yii::t('AweCrud.app', 'Manage'), 'icon' => 'list-alt', 'url' => array('admin')),
);
?>

<fieldset>
    <legend>
        <?php echo Yii::t('AweCrud.app', 'List') ?> <?php echo TblDetalleCompra::label(2) ?>    </legend>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider' => $dataProvider,
	'itemView' => '_view',
)); ?>
</fieldset>