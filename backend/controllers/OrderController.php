<?php

namespace backend\controllers;
use common\models\Order;
use yii\filters\AccessControl;

class OrderController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $orders = Order::find()->all();

        return $this->render('index', ['model' => $orders]);
    }

    public function actionView($id)
    {
        $order = Order::findOne($id);

        return $this->render('view', ['model' => $order]);
    }
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['login'],
                'rules' => [
                    [
                        'allow' => true,
                        'actions' => ['index', 'view'],
                        'roles' => ['admin'],
                    ],
                    [
                        'allow' => true,
                        'actions' => ['logout'],
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }

}
