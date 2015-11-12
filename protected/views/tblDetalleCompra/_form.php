<div class="form">
    <?php
    /** @var TblDetalleCompraController $this */
    /** @var TblDetalleCompra $model */
    /** @var AweActiveForm $form */
    $form = $this->beginWidget('ext.AweCrud.components.AweActiveForm', array(
    'id' => 'tbl-detalle-compra-form',
    'enableAjaxValidation' => true,
    'enableClientValidation'=> false,
    )); ?>

    <p class="note">
        <?php echo Yii::t('AweCrud.app', 'Fields with') ?> <span class="required">*</span>
        <?php echo Yii::t('AweCrud.app', 'are required') ?>.    </p>

    <?php echo $form->errorSummary($model) ?>

                    <?php echo $form->textFieldRow($model, 'id_detalle', array('class' => 'span5')) ?>
                        <?php echo $form->dropDownListRow($model, 'id_compra', CHtml::listData(TblCompras::model()->findAll(), 'id_compra', TblCompras::representingColumn()), array('prompt' => Yii::t('AweApp', 'None'))) ?>
                        <?php echo $form->dropDownListRow($model, 'id_producto', CHtml::listData(TblProductos::model()->findAll(), 'id_producto', TblProductos::representingColumn()), array('prompt' => Yii::t('AweApp', 'None'))) ?>
                        <?php echo $form->textFieldRow($model, 'valor_unidad', array('class' => 'span5')) ?>
                        <?php echo $form->textFieldRow($model, 'cantidad', array('class' => 'span5')) ?>
                        <?php echo $form->textFieldRow($model, 'valor_total', array('class' => 'span5')) ?>
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