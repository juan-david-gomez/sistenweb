<?php
/** @var TblProveedoresController $this */
/** @var TblProveedores $data */
?>
<div class="view">
                    
        <?php if (!empty($data->nombre_proveedor)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('nombre_proveedor')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->nombre_proveedor); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->empresa_proveedor)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('empresa_proveedor')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->empresa_proveedor); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->telefono)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('telefono')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->telefono); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->email)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::mailto($data->email); ?>
                            </div>
        </div>

        <?php endif; ?>
    </div>