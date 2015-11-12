<div class="form">
    <?php
    /** @var CompraController $this */
    /** @var Compra $model */
    /** @var AweActiveForm $form */
    $form = $this->beginWidget('ext.AweCrud.components.AweActiveForm', array(
    'id' => 'compra-form',
    'enableAjaxValidation' => true,
    'enableClientValidation'=> false,
    )); ?>

    <div class="span4">
        <p class="note">
            <?php echo Yii::t('AweCrud.app', 'Fields with') ?> <span class="required">*</span>
            <?php echo Yii::t('AweCrud.app', 'are required') ?>.    </p>

        

        <?php echo $form->errorSummary($model) ?>

                        <?php // echo $form->textFieldRow($model, 'id_compra', array('class' => 'span5')) ?>
                            <?php echo $form->dropDownListRow($model, 'id_proveedor', CHtml::listData(Proveedor::model()->findAll(), 'id_proveedor', Proveedor::representingColumn()), array('prompt' => Yii::t('AweApp', 'None'))) ?>
                            <?php echo $form->dropDownListRow($model, 'id_usuario', CHtml::listData(Usuario::model()->findAll(), 'id_usuario', Usuario::representingColumn()), array('prompt' => Yii::t('AweApp', 'None'))) ?>
                            <?php echo $form->textFieldRow($model, 'total_compra', array('class' => 'span5')) ?>
                            <?php echo $form->datepickerRow($model, 'fecha_compra',array(), array('prepend'=>'<i class="icon-calendar"></i>','options'=>array('format'=>"yyyy-mm-dd"),'format'=>"yyyy-mm-dd")) ?>
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
    </div>
    <div class="span8">
        <table  class="table table-striped">
         <thead>
             <tr>
                  <td>Producto</td>
                  <td>Valor Unitario</td>
                  <td>Cantidad</td>
                  <td>Valor Total</td>
             </tr>
         </thead>
         <tbody id="productos">
              <tr class="productoRow">
                  <td>
                    <?php echo $form->dropDownList(DetalleCompra::model(), 'id_producto', CHtml::listData(Producto::model()->findAll(), 'id_producto', Producto::representingColumn()), array('prompt' => Yii::t('AweApp', 'None'),'class'=>'inputProducto','name'=>'DetalleCompra_1[id_producto]')) ?>
                  </td>
                  <td>
                    <input class="span12 inputValorU" name="DetalleCompra_1[valor_unidad]" id="DetalleCompra_valor_unidad" type="number">
                  </td>
                  <td>
                    <input class="span12 inputCant" name="DetalleCompra_1[cantidad]" id="DetalleCompra_cantidad" type="number">
                  </td>
                  <td>
                    <input class="span12 inputValorT" name="DetalleCompra_1[valor_total]" id="DetalleCompra_valor_total" type="number">
                  </td>
                  <td>
                        <a href="" class="btn btn-mini btn-primary" id="add">+</a>
                        <!-- <a href="" class="btn btn-mini btn-danger">x</a> -->
                  </td>
             </tr>

         </tbody>
        </table>
    </div>

    <?php $this->endWidget(); ?>
</div>

<script type="text/javascript">
    $(function  () {
        $("#add").click(function  () {
            console.log(newProducto);
            var inputProducto = $(".inputProducto").clone();
            var inputValorU =   $(".inputValorU").clone();
            var inputCant = $(".inputCant").clone();
            var inputValorT =   $(".inputValorT").clone();
            
            var filas = $(".productoRow").length;
            var id = filas + 1;

            inputProducto.attr('id','DetalleCompra_id_producto_'+id);
            inputValorU.attr('id','DetalleCompra_valor_unidad_'+id);
            inputCant.attr('id','DetalleCompra_cantidad_'+id);
            inputValorT.attr('id','DetalleCompra_valor_total_'+id);

            inputProducto.attr('name','DetalleCompra_'+id+'[id_producto]');
            inputValorU.attr('name','DetalleCompra_'+id+'[valor_unidad]');
            inputCant.attr('name','DetalleCompra_'+id+'[cantidad]');
            inputValorT.attr('name','DetalleCompra_'+id+'[valor_total]');

            inputProducto.attr('class','inputProducto_ span12');
            inputValorU.attr('class','inputValorU_ span12');
            inputCant.attr('class','inputCant_ span12');
            inputValorT.attr('class','inputValorT_ span12');
            
            var newProducto = "<tr class='productoRow' id="+id+">";

            newProducto += "<td>"+$('<div id="inputProducto_'+id+'"></div>').append( inputProducto ).html()+"</td>";
            newProducto += "<td>"+$('<div id="inputValorU_'+id+'"></div>').append( inputValorU ).html()+"</td>";
            newProducto += "<td>"+$('<div id="inputCant_'+id+'"></div>').append( inputCant ).html()+"</td>";
            newProducto += "<td>"+$('<div id="inputValorT_'+id+'"></div>').append( inputValorT ).html()+"</td>";
            newProducto += "<td>"+'<a href="#" row="'+id+'" class="del btn btn-mini btn-danger">x</a>'+"</td>";

            newProducto += "</tr>"; 
            console.log(newProducto);
            $("#productos").append(newProducto);
            inputProducto = ":P";
            inputValorU = "";
            inputCant = "";
            inputValorT = "";
            newProducto = "";
            return false;
        })
        $(".del").live('click',function () {
            // alert("Hola");
            $("#"+$(this).attr('row')).remove();
            return false;
        })
    })
</script>