<?php
/* @var $this yii\web\View */
/* @var $model frontend\models\ItemUserAdv */

use yii\helpers\Html;
?>

<h3>Kontakt annoncør</h3>
    <div class="row">
        <?php
            if ($model->hasErrors()) {
                echo Html::tag('div', Html::errorSummary($model), ['class' => 'error-summary']);
            }
        ?>
        <?= Html::beginForm('', 'post', [
            'class' => 'form-horizontal col-sm-11',
            'role' => 'form',
        ]); ?>
            <?= Html::activeHiddenInput($model, 'item_id'); ?>
            <div class="form-group">
                <?= Html::activeLabel($model, 'email', ['for' => 'email', 'class' => 'col-sm-3 control-label']); ?>
                <div class="col-sm-9">
                    <?= Html::activeTextInput($model, 'email', ['class' =>  'form-control', 'id' => 'email', 'placeholder' => 'Email']); ?>
                </div>
            </div>
            <div class="form-group">
                <?= Html::activeLabel($model, 'message', ['for' => 'message', 'class' => 'col-sm-3 control-label']); ?>
                <div class="col-sm-9">
                    <?= Html::activeTextarea($model, 'message', ['class' => 'form-control', 'id' => 'message', 'placeholder' => '', 'rows' => "3", 'cols' => '25']); ?>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-10">
                    <?= Html::submitInput('Send besked', ['class' =>  'btn btn-primary']); ?>
                </div>
            </div>
        <?= Html::endForm(); ?>
</div>