<?php

use yii\db\Migration;

/**
 * Class m190130_181517_productTableOrders
 */
class m190130_181517_productTableOrders extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('orders', [
            'orderID' => $this->primaryKey(),
            'userID' => $this->integer()->notNull(),
            'date' => $this->date()->notNull(),
            'status' => $this->integer()->notNull(),
        ]);

        $this->addForeignKey(
            'fk-orders-userID',
            'orders',
            'userID',
            'user',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190130_181517_productTableOrders cannot be reverted.\n";
        $this->dropForeignKey(
            'fk-orders-userID',
            'orders'
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
        echo "m190130_181517_productTableOrders cannot be reverted.\n";

        return false;
    }
    */
}
