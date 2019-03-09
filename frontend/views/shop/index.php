<?php

use yii\helpers\Url;
use yii\helpers\Html;

?>

<?= Html::tag('a', 'Home', ['class' => 'btn btn-success', 'href' => Url::toRoute("/site/index")]); ?>

<?php
foreach ($model as $key => $product) { ?>
    <?= Html::beginTag('div', ['class' => 'card', 'style' => 'width: 18rem; margin-bottom: 10px; margin-top: 10px;']); ?>
        <?= Html::tag('img', '', ['class' => 'card-img-top', 'style' => 'width: 286px; margin: auto;', 'src' => $product->imageUrl]); ?>
        <?= Html::beginTag('div', ['class' => 'card-body']); ?>
            <?= Html::tag('h5', $product->name, ['class' => 'card-title']); ?>
            <?= Html::tag('p', $product->description, ['class' => 'card-text']); ?>
            <?= Html::tag('button', 'Buy', ['class' => 'btn btn-success btn-block', 'id' => 'cartProductId', 'onclick' => 'addToCart('.$product->productID.')']); ?>
        <?= Html::endTag('div', ['class' => 'card-body']); ?>
    <?= Html::endTag('div', ['class' => 'card']); ?><?php
};
?>

<script>
    let exp = new Date();
    exp.setDate(exp.getDate() + 30);
    document.cookie = `product = ${id}; expires = ${exp.toUTCString()}; path = /`
</script>

