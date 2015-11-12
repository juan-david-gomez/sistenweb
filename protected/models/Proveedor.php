<?php

Yii::import('application.models._base.BaseProveedor');

class Proveedor extends BaseProveedor
{
    /**
     * @return Proveedor
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'Proveedor|Proveedors', $n);
    }

}