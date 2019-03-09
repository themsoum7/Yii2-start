<?php

namespace backend\controllers;

use backend\models\DiscountForm;
use common\models\Discount;
use Yii;
use yii\web\UploadedFile;
use yii\filters\AccessControl;

class DiscountsController extends \yii\web\Controller
{

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'actions' => ['create', 'delete', 'index'],
                        'roles' => ['admin', 'marketer'],
                    ],
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }

    public function actionCreate()
    {
        $model = new DiscountForm();

        if (Yii::$app->request->isPost && $model->load(Yii::$app->request->post())) {
            $model->imageFile = UploadedFile::getInstance($model, 'imageFile');
            if ($model->upload()) {
                $discount = new Discount();

                $discount->productID = $model->productID;
                $discount->title = $model->title;
                $discount->imageUrl = '../' . $model->imagePath();
                $discount->save();

                $this->redirect(['discounts/index']);
            }
        }

        return $this->render('create', ['model' => $model]);
    }

    public function actionDelete($id)
    {
        $discount = Discount::findOne($id);
        $discount->delete();

        $this->redirect(['discounts/index']);
    }

    public function actionEdit($id)
    {
        $discount = Discount::findOne($id);

        if ($discount != null) {
            return $this->render('edit', ['model' => $discount]);
        } else {
            $this->redirect(['discounts/index']);
        }
    }

    public function actionIndex()
    {
        $discounts = Discount::find()->all();

        return $this->render('index', ['model' => $discounts]);
    }

    public function actionView($id)
    {
        $discount = Discount::findOne($id);

        return $this->render('view', ['model' => $discount]);
    }
}


// cant check info about certain discount; returns NULL for some reason