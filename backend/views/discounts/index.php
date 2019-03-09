<?php
use yii\helpers\Url;
?>

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <?php
        foreach ($model as $key => $discounts) { ?>
        <div class="<?=$key === 0 ? 'carousel-item active' : 'carousel-item'?>">
            <a href="<?=Url::toRoute(['/discounts/view', 'id' => $discounts->productID]);?>">
                <img class="d-block" style="height: 500px; width: 100%;" src="<?=$discounts->imageUrl?>"/>
            </a>
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

