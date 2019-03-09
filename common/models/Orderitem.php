<?php

namespace common\models;

use Yii;
use common\models\Order;

/**
 * This is the model class for table "orderitems".
 *
 * @property int $ID
 * @property int $orderID
 * @property int $productID
 * @property double $price
 * @property int $amount
 *
 * @property Order $order
 * @property Product $product
 */
class Orderitem extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'orderitems';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['orderID', 'productID', 'price', 'amount'], 'required'],
            [['orderID', 'productID', 'amount'], 'integer'],
            [['price'], 'number'],
            [['orderID'], 'exist', 'skipOnError' => true, 'targetClass' => Order::className(), 'targetAttribute' => ['orderID' => 'orderID']],
            [['productID'], 'exist', 'skipOnError' => true, 'targetClass' => Product::className(), 'targetAttribute' => ['productID' => 'productID']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'orderID' => 'Order ID',
            'productID' => 'Product ID',
            'price' => 'Price',
            'amount' => 'Amount',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrder()
    {
        return $this->hasOne(Order::className(), ['orderID' => 'orderID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProduct()
    {
        return $this->hasOne(Product::className(), ['productID' => 'productID']);
    }
}
