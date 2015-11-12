<?php
/** @var CompraController $this */
/** @var Compra $data */
?>
<div class="view">
                    
        <?php if (!empty($data->idProveedor->nombre_proveedor)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('id_proveedor')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->idProveedor->nombre_proveedor); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->idUsuario->username_usuario)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('id_usuario')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->idUsuario->username_usuario); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->total_compra)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('total_compra')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->total_compra); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->fecha_compra)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('fecha_compra')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo Yii::app()->getDateFormatter()->formatDateTime($data->fecha_compra, 'medium', 'medium'); ?>
            <br/>
                 <?php echo date('D, d M y H:i:s', strtotime($data->fecha_compra)); ?>
                            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->observaciones)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('observaciones')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->observaciones); ?>
            </div>
        </div>

        <?php endif; ?>
    </div>
