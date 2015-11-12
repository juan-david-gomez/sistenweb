<?php
/** @var UsuarioController $this */
/** @var Usuario $data */
?>
<div class="view">
                    
        <?php if (!empty($data->nombre_usuario)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('nombre_usuario')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->nombre_usuario); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->username_usuario)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('username_usuario')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->username_usuario); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->clave_usuario)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('clave_usuario')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->clave_usuario); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->email_usuario)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('email_usuario')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->email_usuario); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->nombre_tienda)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('nombre_tienda')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->nombre_tienda); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->informacion_tienda)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('informacion_tienda')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->informacion_tienda); ?>
            </div>
        </div>

        <?php endif; ?>
    </div>