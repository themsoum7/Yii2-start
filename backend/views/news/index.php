<?php
use yii\helpers\Html;

?>

<?= Html::beginTag('div', ['class' => 'container', 'style' => 'display: flex; justify-content: space-between; flex-flow: row wrap;'])?>

<?php
foreach ($model as $key => $news) { ?>
    <?= Html::beginTag('div', ['class' => 'card', 'style' => 'width: 18rem; margin-bottom: 10px; margin-top: 10px;']); ?>
    <?= Html::tag('img', '', ['class' => 'card-img-top', 'style' => 'width: 286px; margin: auto;', 'src' => 'http://www.catster.com/wp-content/uploads/2017/08/A-fluffy-cat-looking-funny-surprised-or-concerned.jpg']); ?>
    <?= Html::beginTag('div', ['class' => 'card-body']); ?>
    <?= Html::tag('h5', $news->title, ['class' => 'card-title']); ?>
    <?= Html::tag('p', $news->content, ['class' => 'card-text']); ?>
    <?= Html::endTag('div', ['class' => 'card-body']); ?>
    <?= Html::endTag('div', ['class' => 'card']); ?><?php
};
?>

<?= Html::endTag('div');
