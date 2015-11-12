<?php

Yii::import('application.models._base.BaseDetalleCompra');

class DetalleCompra extends BaseDetalleCompra
{
    /**
     * @return DetalleCompra
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'DetalleCompra|DetalleCompras', $n);
    }

}