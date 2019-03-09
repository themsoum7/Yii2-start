<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\helpers\Url;
$this->title = 'Orders';
echo Html::beginTag('table', ['class' => 'table table-dark table-bordered']);
foreach ($model as $key => $orders) {
    ?>
    <?= Html::beginTag('tbody') ?>
        <?= Html::beginTag('tr'); ?>
            <?= Html::tag('td', 'Order id: '.$orders->orderID); ?>
            <?= Html::tag('td', 'User id: '.$orders->userID); ?>
            <?= Html::tag('td', 'Status: '.$orders->status); ?>
            <?= Html::beginTag('td', ['style' => 'width: 100px;']); ?>
                <?= Html::tag('a', 'More info', ['href' => Url::toRoute(['/order/view', 'id' => $orders->orderID])]); ?>
            <?= Html::endTag('td'); ?>
        <?= Html::endTag('tr') ?>
    <?= Html::endTag('tbody'); ?>
    <?php
}
echo Html::endTag('table'); ?>