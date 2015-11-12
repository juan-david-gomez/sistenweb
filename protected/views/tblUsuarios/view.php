<?php
/** @var TblUsuariosController $this */
/** @var TblUsuarios $model */
$this->breadcrumbs=array(
	'Tbl Usuarioses'=>array('index'),
	$model->id_usuario,
);

$this->menu=array(
    //array('label' => Yii::t('AweCrud.app', 'List') . ' ' . TblUsuarios::label(2), 'icon' => 'list', 'url' => array('index')),
    array('label' => Yii::t('AweCrud.app', 'Create') . ' ' . TblUsuarios::label(), 'icon' => 'plus', 'url' => array('create')),
	array('label' => Yii::t('AweCrud.app', 'Update'), 'icon' => 'pencil', 'url' => array('update', 'id' => $model->id_usuario)),
    array('label' => Yii::t('AweCrud.app', 'Delete'), 'icon' => 'trash', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id_usuario), 'confirm' => Yii::t('AweCrud.app', 'Are you sure you want to delete this item?'))),
    array('label' => Yii::t('AweCrud.app', 'Manage'), 'icon' => 'list-alt', 'url' => array('admin')),
);
?>

<fieldset>
    <legend><?php echo Yii::t('AweCrud.app', 'View') . ' ' . TblUsuarios::label(); ?> <?php echo CHtml::encode($model) ?></legend>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data' => $model,
	'attributes' => array(
        'id_usuario',
        'nombre_usuario',
        'username_usuario',
        'clave_usuario',
        'email_usuario',
	),
)); ?>
</fieldset>