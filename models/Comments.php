<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "comments".
 *
 * @property int $id
 * @property int $foto_id
 * @property int $user_id
 * @property string $text
 * @property string $date_added
 * @property string $anwer
 *
 * @property AlbumsFoto $foto
 * @property User $user
 */
class Comments extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'comments';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['foto_id', 'user_id', 'text', 'date_added'], 'required'],
            [['foto_id', 'user_id'], 'integer'],
            [['text', 'anwer'], 'string'],
            [['date_added'], 'safe'],
            [['foto_id'], 'exist', 'skipOnError' => true, 'targetClass' => AlbumsFoto::className(), 'targetAttribute' => ['foto_id' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'foto_id' => 'Foto ID',
            'user_id' => 'User ID',
            'text' => 'Text',
            'date_added' => 'Date Added',
            'anwer' => 'Anwer',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFoto()
    {
        return $this->hasOne(AlbumsFoto::className(), ['id' => 'foto_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
