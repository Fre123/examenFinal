<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "organigrama".
 *
 * @property string $CODIGO_ORG
 * @property string $DESCRIPCION_OR
 *
 * @property Actividad[] $actividads
 */
class Organigrama extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'organigrama';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CODIGO_ORG'], 'required'],
            [['CODIGO_ORG'], 'string', 'max' => 10],
            [['DESCRIPCION_OR'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'CODIGO_ORG' => 'Codigo  Org',
            'DESCRIPCION_OR' => 'Descripcion  Or',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getActividads()
    {
        return $this->hasMany(Actividad::className(), ['CODIGO_ORG' => 'CODIGO_ORG']);
    }
}
