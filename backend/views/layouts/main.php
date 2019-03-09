<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
//    NavBar::begin([
//        'brandLabel' => Yii::$app->name,
//        'brandUrl' => Yii::$app->homeUrl,
//        'options' => [
//            'class' => 'navbar-inverse navbar-fixed-top',
//        ],
//    ]);
//    $menuItems = [
//        ['label' => 'Home', 'url' => ['/site/index']],
//        ['label' => 'Products', 'url' => ['/product/index']],
//    ];
//    if (Yii::$app->user->isGuest) {
//        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
//    } else {
//        $menuItems[] = '<li>'
//            . Html::beginForm(['/site/logout'], 'post')
//            . Html::submitButton(
//                'Logout (' . Yii::$app->user->identity->username . ')',
//                ['class' => 'btn btn-link logout']
//            )
//            . Html::endForm()
//            . '</li>';
//    }
//    echo Nav::widget([
//        'options' => ['class' => 'navbar-nav navbar-right'],
//        'items' => $menuItems,
//    ]);
//    NavBar::end();
    ?>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="<?= Yii::$app->homeUrl; ?>"><?= Yii::$app->name ?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <?= Html::beginTag('li', ['class' => 'nav-item']) ?>
                <?= Html::tag('a', 'Create Discount', ['class' => 'nav-link', 'href' => Url::toRoute(['/discounts/create'])]); ?>
                <?= Html::endTag('li') ?>

                <?= Html::beginTag('li', ['class' => 'nav-item']) ?>
                    <?= Html::tag('a', 'Create Product', ['class' => 'nav-link', 'href' => Url::toRoute(['/product/create'])]); ?>
                <?= Html::endTag('li') ?>

                <?= Html::beginTag('li', ['class' => 'nav-item']) ?>
                    <?= Html::tag('a', 'Products', ['class' => 'nav-link', 'href' => Url::toRoute(['/product/index'])]); ?>
                <?= Html::endTag('li') ?>

                <?= Html::beginTag('li', ['class' => 'nav-item']) ?>
                <?= Html::tag('a', 'Product Categories', ['class' => 'nav-link', 'href' => Url::toRoute(['/category/index'])]); ?>
                <?= Html::endTag('li') ?>

                <?= Html::beginTag('li', ['class' => 'nav-item']) ?>
                <?= Html::tag('a', 'News', ['class' => 'nav-link', 'href' => Url::toRoute(['/news/index'])]); ?>
                <?= Html::endTag('li') ?>

                <?= Html::beginTag('li', ['class' => 'nav-item']) ?>
                <?= Html::tag('a', 'Discounts', ['class' => 'nav-link', 'href' => Url::toRoute(['/discounts/index'])]); ?>
                <?= Html::endTag('li') ?>

                <?= Html::beginTag('li', ['class' => 'nav-item']) ?>
                <?= Html::tag('a', 'Orders', ['class' => 'nav-link', 'href' => Url::toRoute(['/order/index'])]); ?>
                <?= Html::endTag('li') ?>

                <?= Html::beginTag('li', ['class' => 'nav-item']) ?>
                <?php
                    if (Yii::$app->user->isGuest)
                    {
                        echo Html::tag('a', 'Login', ['class' => 'nav-link', 'href' => Url::toRoute(['/site/login'])]);
                    }
                    else
                    {?>
                        <?= Html::beginForm(['/site/logout'], 'post') ?>
                        <?= Html::submitButton('Logout (' . Yii::$app->user->identity->username . ')', ['class' => 'nav-link btn btn-link logout']) ?>
                        <?= Html::endForm() ?> <?php
                    }
                ?>
                <?= Html::endTag('li') ?>
            </ul>
        </div>
    </nav>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; <?= Html::encode(Yii::$app->name) ?> <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
<?php $this->endPage() ?>
