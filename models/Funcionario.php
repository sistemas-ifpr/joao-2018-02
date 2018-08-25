<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "funcionarios".
 *
 * @property int $id
 * @property string $nome
 * @property int $cpf
 * @property int $telefone
 * @property int $celular
 * @property string $endereco
 * @property string $data_adm
 * @property string $data_dem
 */
class Funcionario extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'funcionarios';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome', 'cpf', 'telefone', 'celular', 'endereco', 'data_adm', 'data_dem'], 'required'],
            [['cpf', 'telefone', 'celular'], 'integer'],
            [['data_adm', 'data_dem'], 'safe'],
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
            'data_adm' => 'Data Adm',
            'data_dem' => 'Data Dem',
        ];
    }
}
