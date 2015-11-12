<?php
/** @var DetalleCompraController $this */
/** @var DetalleCompra $data */
?>
<div class="view">
                    
        <?php if (!empty($data->idCompra->total_compra)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('id_compra')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->idCompra->total_compra); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->idProducto->nombre_producto)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('id_producto')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->idProducto->nombre_producto); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->valor_unidad)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('valor_unidad')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->valor_unidad); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->cantidad)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('cantidad')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->cantidad); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->valor_total)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('valor_total')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->valor_total); ?>
            </div>
        </div>

        <?php endif; ?>
    </div>