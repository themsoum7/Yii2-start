<?php

namespace frontend\controllers;

use common\models\Product;
use common\models\Order;
use common\models\Orderitem;
use Yii;

class ShopController extends \yii\web\Controller
{
    public function actionCart()
    {
        $cookies = Yii::$app->request->cookies;
        $productsInCart = Product::findAll([intval($cookies->getValue('product'))]);
        return $this->render('cart', [ 'model' => $productsInCart ]);
    }

    public function actionCheckout()
    {
        $order = new Order();
        $order->status = 0;
        $order->date = date('Y-n-j');
        $order->userID = Yii::$app->user->getId();
        $order->save();

        $cookies = Yii::$app->request->cookies;
        $productsInCart = Product::findAll([intval($cookies->getValue('product'))]);

        foreach ($productsInCart as $key => $product)
        {
            $orderitem = new Orderitem();
            $orderitem->amount = 1;
            $orderitem->price = $product->price;
            $orderitem->productID = $product->productID;
            $orderitem->orderID = $order->orderID;
            $orderitem->save();
        }
        return $this->render('checkout');
    }

    public function actionIndex()
    {
        $products = Product::find()->all();

        return $this->render('index', ['model' => $products]);
    }

}

// make actionOrders and actionOrderItems, add pictures and names, display on frontend
