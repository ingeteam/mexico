<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "marcas_vehiculos".
 *
 * @property int $id
 * @property string $nombre
 * @property int $activo
 *
 * @property Vehiculos[] $vehiculos
 */
class Marcas_Vehiculos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'marcas_vehiculos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'activo'], 'required'],
            [['activo'], 'integer'],
            [['nombre'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre' => 'Nombre',
            'activo' => 'Activo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVehiculos()
    {
        return $this->hasMany(Vehiculos::className(), ['id_marca' => 'id']);
    }
}
