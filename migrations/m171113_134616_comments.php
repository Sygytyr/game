<?php

use yii\db\Migration;
use yii\db\Schema;
/**
 * Class m171113_134616_comments
 */
class m171113_134616_comments extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('comments', [
            'id' => Schema::TYPE_PK,
            'foto_id' => Schema::TYPE_INTEGER . ' NOT NULL',
            'user_id' => Schema::TYPE_INTEGER . ' NOT NULL',
            'text'=>Schema::TYPE_TEXT. ' NOT NULL',
            'date_added'=>Schema::TYPE_DATETIME. ' NOT NULL',
            'anwer'=>Schema::TYPE_TEXT. ' NULL',
        ]);
        $this->createIndex(
            'idx-comments-foto_id',
            'comments',
            'foto_id'
        );
        $this->addForeignKey(
            'fk-comments-foto_id',
            'comments',
            'foto_id',
            'albums_foto',
            'id',
            'CASCADE',
            'RESTRICT'
        );

        $this->addForeignKey(
            'fk-comments-user_id',
            'comments',
            'user_id',
            'user',
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
        echo "m171113_134616_comments cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171113_134616_comments cannot be reverted.\n";

        return false;
    }
    */
}
