<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "estado".
 *
 * @property string $CODIGO_EST
 * @property string $DESCRIPCION
 *
 * @property Actividad[] $actividads
 */
class Estado extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'estado';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CODIGO_EST'], 'required'],
            [['CODIGO_EST'], 'string', 'max' => 10],
            [['DESCRIPCION'], 'string', 'max' => 60],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'CODIGO_EST' => 'Codigo  Est',
            'DESCRIPCION' => 'Descripcion',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getActividads()
    {
        return $this->hasMany(Actividad::className(), ['CODIGO_EST' => 'CODIGO_EST']);
    }
}
