<?php

use yii\db\Migration;

/**
 * Class m190123_185021_productTableNews
 */
class m190123_185021_productTableNews extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('news', [
            'categoryID' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'content' => $this->string()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190123_185021_productTableNews cannot be reverted.\n";
        $this->dropTable('news');
        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190123_185021_productTableNews cannot be reverted.\n";

        return false;
    }
    */
}
