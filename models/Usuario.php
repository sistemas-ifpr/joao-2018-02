<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuarios".
 *
 * @property string $id
 * @property string $nome
 * @property string $email
 * @property string $senha
 *
 * @property Movimentacoes[] $movimentacoes
 */
class Usuario extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'usuarios';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome', 'email', 'senha'], 'required'],
            [['nome', 'email'], 'string', 'max' => 500],
            [['senha'], 'string', 'max' => 100],
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
            'email' => 'Email',
            'senha' => 'Senha',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMovimentacoes()
    {
        return $this->hasMany(Movimentacoes::className(), ['usuario_id' => 'id']);
    }
    //HERDADOS

    public static function findIdentity($id)
    {
        return static::findOne(['email'=> $id ]);
    }

      /**
     * @return string a chave de autenticação do usuário atual
     */
    public function getAuthKey()
    {
        return $this->email;
    }

    public function isAdmin()
    {
        if($this->email === "joao@joao.joao"){
            return true;
        }else{
            return false;
        }
    }

    /**
     * @param string $authKey
     * @return bool se a chave de autenticação do usuário atual for válida
     */
    public function validateAuthKey($authKey)
    {
        return $this->getAuthKey() === $authKey;
    }

    /**
     * Localiza uma identidade pelo token informado
     *
     * @param string $token o token a ser localizado
     * @return IdentityInterface|null o objeto da identidade que corresponde ao token informado
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        return static::findOne(['access_token' => $token]);
    }

    /**
     * @return int|string o ID do usuário atual
     */
    public function getId()
    {
        return $this->id;
    }

    public function validatePassword($password){
        return $this->senha ===$password;
    }

   /* public function login(){
        $usuBD = Usuario::findIdentity($this->$email);
       /* if(isset($usuBD) && $usuBD->validatePassword($this->senha)){
            return Yii::app->user->login($usuBD);

        }
        return false;
}*/
}
