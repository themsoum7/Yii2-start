<?php

use yii\helpers\Url;
use yii\helpers\Html;

?>

<?= Html::beginTag('div', ['class' => 'container', 'style' => 'display: flex; justify-content: space-between; flex-flow: row wrap;'])?>

<?php
foreach ($model as $key => $product) { ?>
    <?= Html::beginTag('div', ['class' => 'card', 'style' => 'width: 18rem; margin-bottom: 50px; margin-top: 10px;']); ?>
        <?= Html::tag('img', '', ['class' => 'card-img-top', 'style' => 'width: 286px; margin: auto; height: 400px;', 'src' => $product->imageUrl]); ?>
        <?= Html::beginTag('div', ['class' => 'card-body']); ?>
            <?= Html::tag('h5', $product->name, ['class' => 'card-title']); ?>
            <?= Html::tag('p', $product->description, ['class' => 'card-text']); ?>
            <?= Html::tag('a', 'Edit', ['class' => 'btn btn-primary', 'href' => Url::toRoute(['product/edit', 'id' => $product->productID])]); ?>
        <?= Html::endTag('div', ['class' => 'card-body']); ?>
    <?= Html::endTag('div', ['class' => 'card']); ?><?php
};
?>

<?= Html::endTag('div');

