<?php

Yii::import('application.models._base.BasePublicacion');

class Publicacion extends BasePublicacion
{
    /**
     * @return Publicacion
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'Publicacion|Publicacions', $n);
    }

}