<?php
/** @var TblInventarioController $this */
/** @var TblInventario $data */
?>
<div class="view">
                    
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
    </div>