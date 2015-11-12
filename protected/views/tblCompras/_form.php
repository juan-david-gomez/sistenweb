<div class="form">
    <?php
    /** @var TblComprasController $this */
    /** @var TblCompras $model */
    /** @var AweActiveForm $form */
    $form = $this->beginWidget('ext.AweCrud.components.AweActiveForm', array(
    'id' => 'tbl-compras-form',
    'enableAjaxValidation' => true,
    'enableClientValidation'=> false,
    )); ?>

    <p class="note">
        <?php echo Yii::t('AweCrud.app', 'Fields with') ?> <span class="required">*</span>
        <?php echo Yii::t('AweCrud.app', 'are required') ?>.    </p>

    <?php echo $form->errorSummary($model) ?>

                    <?php echo $form->textFieldRow($model, 'id_compra', array('class' => 'span5')) ?>
                        <?php echo $form->dropDownListRow($model, 'id_proveedor', CHtml::listData(TblProveedores::model()->findAll(), 'id_proveedor', TblProveedores::representingColumn()), array('prompt' => Yii::t('AweApp', 'None'))) ?>
                        <?php echo $form->dropDownListRow($model, 'id_usuario', CHtml::listData(TblUsuarios::model()->findAll(), 'id_usuario', TblUsuarios::representingColumn()), array('prompt' => Yii::t('AweApp', 'None'))) ?>
                        <?php echo $form->textFieldRow($model, 'total_compra', array('class' => 'span5')) ?>
                        <?php echo $form->datepickerRow($model, 'fecha_compra') ?>
                        <?php // echo $form->datepickerRow($model, 'fecha_compra', array('prepend'=>'<i class="icon-calendar"></i>')) ?>
                        <?php echo $form->textAreaRow($model,'observaciones',array('rows'=>6, 'cols'=>50, 'class'=>'span8')) ?>
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