<div class="form">
    <?php
    /** @var PublicacionController $this */
    /** @var Publicacion $model */
    /** @var AweActiveForm $form */
    $form = $this->beginWidget('ext.AweCrud.components.AweActiveForm', array(
    'id' => 'publicacion-form',
    'enableAjaxValidation' => true,
    'enableClientValidation'=> false,
    )); ?>

    <p class="note">
        Los campos con <span class="required">*</span>
        son requeridos  </p>

    <?php echo $form->errorSummary($model) ?>

                    <?php echo $form->textFieldRow($model, 'id_publicacion', array('class' => 'span5')) ?>
                        <?php echo $form->textFieldRow($model, 'nombre_publicacion', array('class' => 'span5', 'maxlength' => 50)) ?>
                        <?php echo $form->textFieldRow($model, 'titulo_publicacion', array('class' => 'span5', 'maxlength' => 255)) ?>
                        <?php echo $form->textFieldRow($model, 'descripcion_publicacion', array('class' => 'span5', 'maxlength' => 255)) ?>
                        <?php echo $form->dropDownListRow($model, 'id_producto', CHtml::listData(Producto::model()->findAll(), 'id_producto', Producto::representingColumn()), array('prompt' => Yii::t('AweApp', 'None'))) ?>
                        <?php echo $form->textFieldRow($model, 'precio_publicacion', array('class' => 'span5', 'maxlength' => 255)) ?>
                        <?php echo $form->textFieldRow($model, 'imagen', array('class' => 'span5', 'maxlength' => 100)) ?>
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