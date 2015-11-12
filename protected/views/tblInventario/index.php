<?php
/** @var TblInventarioController $this */
/** @var TblInventario $model */
$this->breadcrumbs = array(
	'Tbl Inventarios',
);

$this->menu = array(
    array('label' => Yii::t('AweCrud.app', 'Create') . ' ' . TblInventario::label(), 'icon' => 'plus', 'url' => array('create')),
    array('label' => Yii::t('AweCrud.app', 'Manage'), 'icon' => 'list-alt', 'url' => array('admin')),
);
?>

<fieldset>
    <legend>
        <?php echo Yii::t('AweCrud.app', 'List') ?> <?php echo TblInventario::label(2) ?>    </legend>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider' => $dataProvider,
	'itemView' => '_view',
)); ?>
</fieldset>