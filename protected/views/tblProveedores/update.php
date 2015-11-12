<?php
/** @var TblProveedoresController $this */
/** @var TblProveedores $model */
$this->breadcrumbs=array(
	$model->label(2) => array('index'),
	Yii::t('app', $model->id_proveedor) => array('view', 'id'=>$model->id_proveedor),
	Yii::t('AweCrud.app', 'Update'),
);

$this->menu=array(
    //array('label' => Yii::t('AweCrud.app', 'List') . ' ' . TblProveedores::label(2), 'icon' => 'list', 'url' => array('index')),
	//array('label' => Yii::t('AweCrud.app', 'Create') . ' ' . TblProveedores::label(), 'icon' => 'plus', 'url' => array('create')),
	//array('label' => Yii::t('AweCrud.app', 'View'), 'icon' => 'eye-open', 'url'=>array('view', 'id' => $model->id_proveedor)),
    array('label' => Yii::t('AweCrud.app', 'Delete'), 'icon' => 'trash', 'url'=>'#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id_proveedor), 'confirm' => Yii::t('AweCrud.app', 'Are you sure you want to delete this item?'))),
	array('label' => Yii::t('AweCrud.app', 'Manage'), 'icon' => 'list-alt', 'url' => array('admin')),
);
?>

<fieldset>
    <legend><?php echo Yii::t('AweCrud.app', 'Update') . ' ' . TblProveedores::label(); ?> <?php echo CHtml::encode($model) ?></legend>
    <?php echo $this->renderPartial('_form',array('model' => $model)); ?>
</fieldset>