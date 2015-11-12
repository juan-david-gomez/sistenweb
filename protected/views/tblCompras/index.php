<?php
/** @var TblComprasController $this */
/** @var TblCompras $model */
$this->breadcrumbs = array(
	'Tbl Comprases',
);

$this->menu = array(
    array('label' => Yii::t('AweCrud.app', 'Create') . ' ' . TblCompras::label(), 'icon' => 'plus', 'url' => array('create')),
    array('label' => Yii::t('AweCrud.app', 'Manage'), 'icon' => 'list-alt', 'url' => array('admin')),
);
?>

<fieldset>
    <legend>
        <?php echo Yii::t('AweCrud.app', 'List') ?> <?php echo TblCompras::label(2) ?>    </legend>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider' => $dataProvider,
	'itemView' => '_view',
)); ?>
</fieldset>