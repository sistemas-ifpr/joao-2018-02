<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "clientes".
 *
 * @property int $id
 * @property string $nome
 * @property int $cpf
 * @property int $telefone
 * @property int $celular
 * @property string $endereco
 * @property string $data_nasc
 */
class Cliente extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'clientes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome', 'cpf', 'telefone', 'celular', 'endereco', 'data_nasc'], 'required'],
            [['cpf', 'telefone', 'celular'], 'integer'],
            [['data_nasc'], 'safe'],
            [['nome'], 'string', 'max' => 100],
            [['endereco'], 'string', 'max' => 255],
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
            'cpf' => 'Cpf',
            'telefone' => 'Telefone',
            'celular' => 'Celular',
            'endereco' => 'Endereco',
            'data_nasc' => 'Data Nasc',
        ];
    }
}
