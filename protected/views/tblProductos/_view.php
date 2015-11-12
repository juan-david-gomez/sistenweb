<?php
/** @var TblProductosController $this */
/** @var TblProductos $data */
?>
<div class="view">
                    
        <?php if (!empty($data->nombre_producto)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('nombre_producto')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->nombre_producto); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->stock)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('stock')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->stock); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->costo_actual)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('costo_actual')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->costo_actual); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->precio)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('precio')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->precio); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->presentacion)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('presentacion')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->presentacion); ?>
            </div>
        </div>

        <?php endif; ?>
    </div>