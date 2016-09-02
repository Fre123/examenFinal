<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "prioridad".
 *
 * @property string $CODIGO_PRIO
 * @property string $DESCRIPCION
 *
 * @property Actividad[] $actividads
 */
class Prioridad extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'prioridad';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CODIGO_PRIO'], 'required'],
            [['CODIGO_PRIO'], 'string', 'max' => 10],
            [['DESCRIPCION'], 'string', 'max' => 60],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'CODIGO_PRIO' => 'Codigo  Prio',
            'DESCRIPCION' => 'Descripcion',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getActividads()
    {
        return $this->hasMany(Actividad::className(), ['CODIGO_PRIO' => 'CODIGO_PRIO']);
    }
}
