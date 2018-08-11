<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "movimentacoes".
 *
 * @property int $id
 * @property string $recurso_id
 * @property string $local_id
 * @property string $usuario_id
 * @property string $data
 *
 * @property Recursos $recurso
 * @property Locais $local
 * @property Usuarios $usuario
 */
class Movimentacao extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'movimentacoes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['recurso_id', 'local_id', 'usuario_id', 'data'], 'required'],
            [['recurso_id', 'local_id', 'usuario_id'], 'integer'],
            [['data'], 'safe'],
            [['recurso_id'], 'unique'],
            [['recurso_id'], 'exist', 'skipOnError' => true, 'targetClass' => Recursos::className(), 'targetAttribute' => ['recurso_id' => 'id']],
            [['local_id'], 'exist', 'skipOnError' => true, 'targetClass' => Locais::className(), 'targetAttribute' => ['local_id' => 'id']],
            [['usuario_id'], 'exist', 'skipOnError' => true, 'targetClass' => Usuarios::className(), 'targetAttribute' => ['usuario_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'recurso_id' => 'Recurso ID',
            'local_id' => 'Local ID',
            'usuario_id' => 'Usuario ID',
            'data' => 'Data',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRecurso()
    {
        return $this->hasOne(Recursos::className(), ['id' => 'recurso_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLocal()
    {
        return $this->hasOne(Locais::className(), ['id' => 'local_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsuario()
    {
        return $this->hasOne(Usuarios::className(), ['id' => 'usuario_id']);
    }
}
