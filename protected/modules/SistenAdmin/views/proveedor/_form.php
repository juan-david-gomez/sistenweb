<div class="form">
    <?php
    /** @var ProveedorController $this */
    /** @var Proveedor $model */
    /** @var AweActiveForm $form */
    $form = $this->beginWidget('ext.AweCrud.components.AweActiveForm', array(
    'id' => 'proveedor-form',
    'enableAjaxValidation' => true,
    'enableClientValidation'=> false,
    )); ?>

    <p class="note">
        <?php echo Yii::t('AweCrud.app', 'Fields with') ?> <span class="required">*</span>
        <?php echo Yii::t('AweCrud.app', 'are required') ?>.    </p>

    <?php echo $form->errorSummary($model) ?>

                    <?php //echo $form->textFieldRow($model, 'id_proveedor', array('class' => 'span5')) ?>
                        <?php echo $form->textFieldRow($model, 'nombre_proveedor', array('class' => 'span5', 'maxlength' => 50)) ?>
                        <?php echo $form->textFieldRow($model, 'empresa_proveedor', array('class' => 'span5', 'maxlength' => 50)) ?>
                        <?php echo $form->textFieldRow($model, 'telefono', array('class' => 'span5', 'maxlength' => 30)) ?>
                        <?php echo $form->textFieldRow($model, 'email', array('class' => 'span5', 'maxlength' => 60)) ?>
                <div class="form-actions">
                <?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? Yii::t('AweCrud.app', 'Create') : Yii::t('AweCrud.app', 'Save'),
		)); ?>
        <?php $this->widget('bootstrap.widgets.TbButton', array(
			//'buttonType'=>'submit',
			'label'=> Yii::t('AweCrud.app', 'Cancel'),
			'htmlOptions' => array('onclick' => 'javascript:history.go(-1)')
		)); ?>
    </div>

    <?php $this->endWidget(); ?>
</div>