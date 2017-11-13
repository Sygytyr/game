<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "albums".
 *
 * @property int $id
 * @property string $title
 * @property string $preview
 * @property string $url
 * @property string $date_added
 * @property string $date_update
 *
 * @property AlbumsFoto[] $albumsFotos
 */
class Albums extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'albums';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'preview', 'url', 'date_added', 'date_update'], 'required'],
            [['date_added', 'date_update'], 'safe'],
            [['title', 'preview', 'url'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'preview' => 'Preview',
            'url' => 'Url',
            'date_added' => 'Date Added',
            'date_update' => 'Date Update',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAlbumsFotos()
    {
        return $this->hasMany(AlbumsFoto::className(), ['album_id' => 'id']);
    }
}
