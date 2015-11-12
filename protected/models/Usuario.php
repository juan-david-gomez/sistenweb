<?php

Yii::import('application.models._base.BaseUsuario');

class Usuario extends BaseUsuario
{
    /**
     * @return Usuario
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'Usuario|Usuarios', $n);
    }

}