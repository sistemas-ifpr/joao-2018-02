<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "emprestimo".
 *
 * @property int $id
 * @property int $fk_titulo
 * @property string $data_empr
 * @property int $fk_cliente
 * @property int $fk_funcionario
 */
class Emprestimo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'emprestimo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fk_titulo', 'data_empr', 'fk_cliente', 'fk_funcionario'], 'required'],
            [['fk_titulo', 'fk_cliente', 'fk_funcionario'], 'integer'],
            [['data_empr'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fk_titulo' => 'Fk Titulo',
            'data_empr' => 'Data Empr',
            'fk_cliente' => 'Fk Cliente',
            'fk_funcionario' => 'Fk Funcionario',
        ];
    }
}
