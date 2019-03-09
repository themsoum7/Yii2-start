<?php
namespace backend\controllers;

use backend\models\ProductForm;
use common\models\Product;
use Yii;
use yii\web\UploadedFile;
use yii\filters\AccessControl;

class ProductController extends \yii\web\Controller
{
    public function actionCreate()
    {
        $model = new ProductForm();

        if (Yii::$app->request->isPost && $model->load(Yii::$app->request->post())) {
            $model->imageFile = UploadedFile::getInstance($model, 'imageFile');
            if ($model->upload()) {
                $product = new Product();

                $product->name = $model->name;
                $product->price = $model->price;
                $product->description = $model->description;
                $product->imageUrl = '../'.$model->imagePath();
                $product->save();

                $this->redirect(['product/index']);
            }
        }

        return $this->render('create', ['model' => $model]);
    }

    public function actionDelete($id)
    {
        $product = Product::findOne($id);
        $product->delete();

        $this->redirect(['product/index']);
    }

    public function actionEdit($id)
    {
        $product = Product::findOne($id);

        if ($product != null)
        {
            return $this->render('edit', ['model' => $product]);
        }
        else
        {
            $this->redirect(['product/index']);
        }
    }

    public function actionIndex()
    {
        $products = Product::find()->all();

        return $this->render('index', ['model' => $products]);
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
                        'actions' => ['create', 'delete', 'index', 'edit'],
                        'roles' => ['admin', 'merchandiser'],
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
