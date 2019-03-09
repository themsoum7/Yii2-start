<?php

use yii\db\Migration;

/**
 * Class m190130_184100_productTableOrderItems
 */
class m190130_184100_productTableOrderItems extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('orderitems', [
            'ID' => $this->primaryKey(),
            'orderID' => $this->integer()->notNull(),
            'productID' => $this->integer()->notNull(),
            'price' => $this->double()->notNull(),
            'amount' => $this->integer()->notNull(),
        ]);

        $this->createIndex(
            'idx-orderitems-orderID',
            'orderitems',
            'orderID'
        );

        $this->addForeignKey(
            'fk-orderitems-orderID',
            'orderitems',
            'orderID',
            'orders',
            'orderID',
            'CASCADE'
        );

        $this->createIndex(
            'idx-orderitems-productID',
            'orderitems',
            'productID'
        );

        $this->addForeignKey(
            'fk-orderitems-productID',
            'orderitems',
            'productID',
            'product',
            'productID',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190130_184100_productTableOrderItems cannot be reverted.\n";
        $this->dropForeignKey(
            'fk-orderitems-orderID',
            'orderitems'
        );

        // drops index for column `author_id`
        $this->dropIndex(
            'idx-orderitems-orderID',
            'orderitems'
        );

        $this->dropForeignKey(
            'fk-orderitems-productID',
            'orderitems'
        );

        // drops index for column `author_id`
        $this->dropIndex(
            'idx-orderitems-productID',
            'orderitems'
        );
        $this->dropTable('orderitems');
        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190130_184100_productTableOrderItems cannot be reverted.\n";

        return false;
    }
    */
}
