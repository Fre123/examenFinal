<?php

namespace frontend\models;
use backend\models\Estado;
use backend\models\Prioridad;
use backend\models\Organigrama;

use Yii;

/**
 * This is the model class for table "actividad".
 *
 * @property integer $ID_ACT
 * @property string $CODIGO_PRIO
 * @property string $CODIGO_ORG
 * @property string $CODIGO_EST
 * @property string $PRIORIDAD
 * @property string $ESTADO
 * @property string $FECHA_INICIO
 * @property string $FECHA_FIN
 * @property string $DURACION
 * @property string $COMENTARIO
 *
 * @property Estado $cODIGOEST
 * @property Prioridad $cODIGOPRIO
 * @property Organigrama $cODIGOORG
 */
class Actividad extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'actividad';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID_ACT'], 'required'],
            [['ID_ACT'], 'integer'],
            [['FECHA_INICIO', 'FECHA_FIN', 'DURACION'], 'safe'],
            [['COMENTARIO'], 'string'],
            [['CODIGO_PRIO', 'CODIGO_ORG', 'CODIGO_EST'], 'string', 'max' => 10],
            [['PRIORIDAD', 'ESTADO'], 'string', 'max' => 100],
            [['CODIGO_EST'], 'exist', 'skipOnError' => true, 'targetClass' => Estado::className(), 'targetAttribute' => ['CODIGO_EST' => 'CODIGO_EST']],
            [['CODIGO_PRIO'], 'exist', 'skipOnError' => true, 'targetClass' => Prioridad::className(), 'targetAttribute' => ['CODIGO_PRIO' => 'CODIGO_PRIO']],
            [['CODIGO_ORG'], 'exist', 'skipOnError' => true, 'targetClass' => Organigrama::className(), 'targetAttribute' => ['CODIGO_ORG' => 'CODIGO_ORG']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID_ACT' => 'Id  Act',
            'CODIGO_PRIO' => 'Codigo  Prio',
            'CODIGO_ORG' => 'Codigo  Org',
            'CODIGO_EST' => 'Codigo  Est',
            'PRIORIDAD' => 'Prioridad',
            'ESTADO' => 'Estado',
            'FECHA_INICIO' => 'Fecha  Inicio',
            'FECHA_FIN' => 'Fecha  Fin',
            'DURACION' => 'Duracion',
            'COMENTARIO' => 'Comentario',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCODIGOEST()
    {
        return $this->hasOne(Estado::className(), ['CODIGO_EST' => 'CODIGO_EST']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCODIGOPRIO()
    {
        return $this->hasOne(Prioridad::className(), ['CODIGO_PRIO' => 'CODIGO_PRIO']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCODIGOORG()
    {
        return $this->hasOne(Organigrama::className(), ['CODIGO_ORG' => 'CODIGO_ORG']);
    }
}
