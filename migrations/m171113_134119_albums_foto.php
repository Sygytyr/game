<?php

use yii\db\Migration;
use yii\db\Schema;
/**
 * Class m171113_134119_albums_foto
 */
class m171113_134119_albums_foto extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('albums_foto', [
            'id' => Schema::TYPE_PK,
            'album_id' => Schema::TYPE_INTEGER . ' NOT NULL',
            'foto' => Schema::TYPE_STRING. ' NOT NULL',
            'sort_order'=>Schema::TYPE_INTEGER. ' NOT NULL',
        ]);
        $this->createIndex(
            'idx-albums_foto-album_id',
            'albums_foto',
            'album_id'
        );
        $this->addForeignKey(
            'fk-albums_foto-album_id',
            'albums_foto',
            'album_id',
            'albums',
            'id',
            'CASCADE',
            'RESTRICT'
        );

    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m171113_134119_albums_foto cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171113_134119_albums_foto cannot be reverted.\n";

        return false;
    }
    */
}
