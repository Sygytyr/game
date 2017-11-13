<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "albums_foto".
 *
 * @property int $id
 * @property int $album_id
 * @property string $foto
 * @property int $sort_order
 *
 * @property Albums $album
 * @property Comments[] $comments
 */
class AlbumsFoto extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'albums_foto';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['album_id', 'foto', 'sort_order'], 'required'],
            [['album_id', 'sort_order'], 'integer'],
            [['foto'], 'string', 'max' => 255],
            [['album_id'], 'exist', 'skipOnError' => true, 'targetClass' => Albums::className(), 'targetAttribute' => ['album_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'album_id' => 'Album ID',
            'foto' => 'Foto',
            'sort_order' => 'Sort Order',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAlbum()
    {
        return $this->hasOne(Albums::className(), ['id' => 'album_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getComments()
    {
        return $this->hasMany(Comments::className(), ['foto_id' => 'id']);
    }
}
