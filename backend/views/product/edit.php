<?php
use yii\helpers\Url;
use yii\helpers\Html;
?>

<?= Html::tag('a', 'Delete', ['class' => 'btn btn-danger btn-block', 'href' => Url::toRoute(['product/delete', 'id' => $model->productID])]); ?>
