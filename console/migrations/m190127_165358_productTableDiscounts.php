<?php

use yii\db\Migration;

/**
 * Class m190127_165358_productTableDiscounts
 */
class m190127_165358_productTableDiscounts extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('discounts', [
            'discountID' => $this->primaryKey(),
            'productID' => $this->integer()->notNull(),
            'title' => $this->string()->notNull(),
            'imageUrl' => $this->string()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190127_165358_productTableDiscounts cannot be reverted.\n";
        $this->dropTable('discounts');
        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190127_165358_productTableDiscounts cannot be reverted.\n";

        return false;
    }
    */
}
