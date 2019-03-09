<?php

use yii\db\Migration;

/**
 * Class m190121_170605_productTableMigration
 */
class m190121_170605_productTableMigration extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('product', [
            'productID' => $this->primaryKey(),
            'price' => $this->double()->notNull(),
            'imageUrl' => $this->string()->notNull(),
            'description' => $this->string()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190121_170605_productTableMigration cannot be reverted.\n";
        $this->dropTable('product');
        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190121_170605_productTableMigration cannot be reverted.\n";

        return false;
    }
    */
}
