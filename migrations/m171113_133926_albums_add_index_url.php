<?php

use yii\db\Migration;

/**
 * Class m171113_133926_albums_add_index_url
 */
class m171113_133926_albums_add_index_url extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createIndex(
            'idx-albums-url',
            'albums',
            'url'
        );
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m171113_133926_albums_add_index_url cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171113_133926_albums_add_index_url cannot be reverted.\n";

        return false;
    }
    */
}
