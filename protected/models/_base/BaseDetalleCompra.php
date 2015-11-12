<?php

/**
 * This is the model base class for the table "detalle_compra".
 * DO NOT MODIFY THIS FILE! It is automatically generated by AweCrud.
 * If any changes are necessary, you must set or override the required
 * property or method in class "DetalleCompra".
 *
 * Columns in table "detalle_compra" available as properties of the model,
 * followed by relations of table "detalle_compra" available as properties of the model.
 *
 * @property integer $id_detalle
 * @property integer $id_compra
 * @property integer $id_producto
 * @property double $valor_unidad
 * @property integer $cantidad
 * @property double $valor_total
 *
 * @property Compra $idCompra
 * @property Producto $idProducto
 */
abstract class BaseDetalleCompra extends AweActiveRecord {

    public static function model($className=__CLASS__) {
        return parent::model($className);
    }

    public function tableName() {
        return 'detalle_compra';
    }

    public static function representingColumn() {
        return 'id_detalle';
    }

    public function rules() {
        return array(
            // array('id_detalle', 'required'),
            array('id_detalle, id_compra, id_producto, cantidad', 'numerical', 'integerOnly'=>true),
            array('valor_unidad, valor_total', 'numerical'),
            array('id_compra, id_producto, valor_unidad, cantidad, valor_total', 'default', 'setOnEmpty' => true, 'value' => null),
            array('id_detalle, id_compra, id_producto, valor_unidad, cantidad, valor_total', 'safe', 'on'=>'search'),
        );
    }

    public function relations() {
        return array(
            'idCompra' => array(self::BELONGS_TO, 'Compra', 'id_compra'),
            'idProducto' => array(self::BELONGS_TO, 'Producto', 'id_producto'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
                'id_detalle' => Yii::t('app', 'Id Detalle'),
                'id_compra' => Yii::t('app', 'Id Compra'),
                'id_producto' => Yii::t('app', 'Id Producto'),
                'valor_unidad' => Yii::t('app', 'Valor Unidad'),
                'cantidad' => Yii::t('app', 'Cantidad'),
                'valor_total' => Yii::t('app', 'Valor Total'),
                'idCompra' => null,
                'idProducto' => null,
        );
    }

    public function search() {
        $criteria = new CDbCriteria;

        $criteria->compare('id_detalle', $this->id_detalle);
        $criteria->compare('id_compra', $this->id_compra);
        $criteria->compare('id_producto', $this->id_producto);
        $criteria->compare('valor_unidad', $this->valor_unidad);
        $criteria->compare('cantidad', $this->cantidad);
        $criteria->compare('valor_total', $this->valor_total);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    public function behaviors() {
        return array_merge(array(
        ), parent::behaviors());
    }
}