<?php

use yii\db\Migration;
use yii\db\Schema;
/**
 * Class m171113_133510_albums
 */
class m171113_133510_albums extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('albums', [
            'id' => Schema::TYPE_PK,
            'title' => Schema::TYPE_STRING . ' NOT NULL',
            'preview' => Schema::TYPE_STRING. ' NOT NULL',
            'url'=>Schema::TYPE_STRING. ' NOT NULL',
            'date_added'=>Schema::TYPE_DATETIME. ' NOT NULL',
            'date_update'=>Schema::TYPE_DATETIME. ' NOT NULL',
        ]);

    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m171113_133510_albums cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171113_133510_albums cannot be reverted.\n";

        return false;
    }
    */
}
