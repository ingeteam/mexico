<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "propietariosvehiculos".
 *
 * @property int $id
 * @property string $nombre
 * @property int $activo
 *
 * @property Vehiculos[] $vehiculos
 */
class propietariosvehiculos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'propietariosvehiculos';
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
        return $this->hasMany(Vehiculos::className(), ['id_propietario' => 'id']);
    }
}
