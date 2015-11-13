<?php
/** @var PublicacionController $this */
/** @var Publicacion $data */
?>
<div class="view">
                    
        <?php if (!empty($data->nombre_publicacion)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('nombre_publicacion')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->nombre_publicacion); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->titulo_publicacion)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('titulo_publicacion')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->titulo_publicacion); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->descripcion_publicacion)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('descripcion_publicacion')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->descripcion_publicacion); ?>
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
                
        <?php if (!empty($data->precio_publicacion)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('precio_publicacion')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->precio_publicacion); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->imagen)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('imagen')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->imagen); ?>
            </div>
        </div>

        <?php endif; ?>
    </div>