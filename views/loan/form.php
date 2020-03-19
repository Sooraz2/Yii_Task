<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Loan */
/* @var $form ActiveForm */
?>
<div class="loan-form">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'user_id') ?>
        <?= $form->field($model, 'amount') ?>
        <?= $form->field($model, 'interest') ?>
        <?= $form->field($model, 'duration') ?>
        <?= $form->field($model, 'start_date') ?>
        <?= $form->field($model, 'end_date') ?>
        <?= $form->field($model, 'campaign') ?>
        <?= $form->field($model, 'status') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- loan-form -->
