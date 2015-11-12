<?php
/** @var TblUsuariosController $this */
/** @var TblUsuarios $model */
$this->breadcrumbs = array(
	'Tbl Usuarioses',
);

$this->menu = array(
    array('label' => Yii::t('AweCrud.app', 'Create') . ' ' . TblUsuarios::label(), 'icon' => 'plus', 'url' => array('create')),
    array('label' => Yii::t('AweCrud.app', 'Manage'), 'icon' => 'list-alt', 'url' => array('admin')),
);
?>

<fieldset>
    <legend>
        <?php echo Yii::t('AweCrud.app', 'List') ?> <?php echo TblUsuarios::label(2) ?>    </legend>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider' => $dataProvider,
	'itemView' => '_view',
)); ?>
</fieldset>