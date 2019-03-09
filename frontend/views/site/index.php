<?php
use yii\helpers\Html;

?>

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <?php
        foreach ($model['discounts'] as $key => $discounts) { ?>
            <div class="<?=$key === 0 ? 'carousel-item active' : 'carousel-item'?>">
                <img class="d-block" style="height: 500px; width: 100%;" src="<?=$discounts->imageUrl?>">
            </div>
            <?php
        };?>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<?php
foreach ($model['news'] as $key => $news) { ?>
    <?= Html::beginTag('div', ['class' => 'card', 'style' => 'width: 18rem; margin-bottom: 10px; margin-top: 10px;']); ?>
        <?= Html::tag('img', '', ['class' => 'card-img-top', 'style' => 'width: 286px; margin: auto;', 'src' => 'http://www.catster.com/wp-content/uploads/2017/08/A-fluffy-cat-looking-funny-surprised-or-concerned.jpg']); ?>
        <?= Html::beginTag('div', ['class' => 'card-body']); ?>
                <?= Html::tag('h5', $news->title, ['class' => 'card-title']); ?>
                <?= Html::tag('p', $news->content, ['class' => 'card-text']); ?>
        <?= Html::endTag('div', ['class' => 'card-body']); ?>
    <?= Html::endTag('div', ['class' => 'card']); ?><?php
};
?>