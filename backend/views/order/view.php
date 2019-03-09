<?php
/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Orderitems';
echo Html::beginTag('table', ['class' => 'table table-dark table-bordered']);
?>
    <?= Html::beginTag('thead') ?>
        <?= Html::beginTag('tr'); ?>
            <?= Html::tag('th', 'Order id: ' . $model->orderID, ['scope' => 'row']); ?>
        <?= Html::endTag('tr') ?>

        <?= Html::beginTag('tr'); ?>
            <?= Html::tag('th', 'User id: ' . $model->userID, ['scope' => 'row']); ?>
        <?= Html::endTag('tr') ?>

        <?= Html::beginTag('tr'); ?>
            <?= Html::tag('th', 'Date: ' . $model->date, ['scope' => 'row']); ?>
        <?= Html::endTag('tr') ?>

        <?= Html::beginTag('tr'); ?>
            <?= Html::tag('th', 'Status: ' . $model->status, ['scope' => 'row']); ?>
        <?= Html::endTag('tr') ?>

        <?php
        foreach ($model->orderitems as $key => $item)
        {?>
            <?= Html::beginTag('tr'); ?>
                <?= Html::tag('th', 'Orderitem id: ' . $item->ID, ['scope' => 'row']); ?>
            <?= Html::endTag('tr') ?>

            <?= Html::beginTag('tr'); ?>
                <?= Html::tag('th', 'Product id: ' . $item->productID, ['scope' => 'row']); ?>
            <?= Html::endTag('tr') ?>

            <?= Html::beginTag('tr'); ?>
                <?= Html::tag('th', 'Price: ' . $item->price, ['scope' => 'row']); ?>
            <?= Html::endTag('tr') ?>

            <?= Html::beginTag('tr'); ?>
                <?= Html::tag('th', 'Amount: ' . $item->amount, ['scope' => 'row']); ?>
            <?= Html::endTag('tr') ?><?php
        }
        ?>
    <?= Html::endTag('thead'); ?>
<?php
echo Html::endTag('table'); ?>

