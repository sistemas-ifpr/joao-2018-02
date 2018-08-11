<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "recursos".
 *
 * @property string $id
 * @property string $nome
 *
 * @property Movimentacoes $movimentacoes
 */
class Recursos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'recursos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome'], 'required'],
            [['nome'], 'string', 'max' => 500],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nome' => 'Nome',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMovimentacoes()
    {
        return $this->hasOne(Movimentacoes::className(), ['recurso_id' => 'id']);
    }
}
