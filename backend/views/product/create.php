<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$form = ActiveForm::begin(['method' => 'post', 'options' => ['enctype' => 'multipart/form-data']]);?>

<?= $form->field($model, 'imageFile')->fileInput() ?>
<?= $form->field($model, 'name') ?>
<?= $form->field($model, 'price')->textInput(['type' => 'number', 'step' => '0.01']) ?>
<?= $form->field($model, 'description') ?>

<div class="form-group">
    <?= Html::submitButton('Create', ['class' => 'btn btn-success btn-block']) ?>
</div>

<?php ActiveForm::end() ?>