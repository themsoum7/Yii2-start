<?php

use yii\db\Migration;

/**
 * Class m190123_184507_productTableProductCategory
 */
class m190123_184507_productTableProductCategory extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('productcategory', [
            'categoryID' => $this->primaryKey(),
            'name' => $this->string()->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190123_184507_productTableProductCategory cannot be reverted.\n";
        $this->dropTable('productcategory');
        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190123_184507_productTableProductCategory cannot be reverted.\n";

        return false;
    }
    */
}
