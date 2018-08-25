<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "titulos".
 *
 * @property int $id
 * @property string $titulo
 * @property int $artista
 * @property string $descricao
 * @property int $ano_lancamento
 */
class Titulo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'titulos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['titulo', 'artista', 'descricao', 'ano_lancamento'], 'required'],
            [['artista', 'ano_lancamento'], 'integer'],
            [['titulo'], 'string', 'max' => 100],
            [['descricao'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'titulo' => 'Titulo',
            'artista' => 'Artista',
            'descricao' => 'Descricao',
            'ano_lancamento' => 'Ano Lancamento',
        ];
    }
}
