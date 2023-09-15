<?php use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;

$this->title = 'Добавление тарифа';
$this->registerCssFile('@web/css/tariffs.css',['depends'=>'app\assets\AppAsset'])
?>

<section class="create-tariff">
    <h2 class="section-title">
        <?= Html::encode($this->title) ?>
    </h2>
    <p>Пожалуйста заполните поля, чтобы добавить новый тариф:</p>

    <div class="create-tariff-body">

            <?php $form = ActiveForm::begin([
                'id'=>'create-tariff-form',
                'options'=>[
                        'class'=>'add-tariff-form',
                ],
                'fieldConfig' => [
                    'template' => "{label}\n{input}\n{error}",
                    'labelOptions' => ['class' => 'col-form-label'],
                    'inputOptions' => ['class' => 'form-control'],
                    'errorOptions' => ['class' => 'invalid-feedback'],
                ],
            ]); ?>

            <?= $form->field($model, 'name')->textInput()->label('Название') ?>

            <?= $form->field($model, 'price')->textInput(['type'=>'number','step'=>0.01,'min'=>100])
                ->label('Цена, руб.') ?>

            <?= $form->field($model, 'speed')->textInput()->label('Скорость, Мбит/с') ?>

            <div class="form-group">
                <div>
                    <?= Html::a('Назад',\yii\helpers\Url::to(['tariff/index']) ,['class' => 'btn', 'name' => 'go-back']) ?>
                    <?= Html::submitButton('Добавить', ['class' => 'btn add-tariff-button', 'name' => 'create-tariff-button']) ?>
                </div>
            </div>

            <?php ActiveForm::end(); ?>

    </div>
</section>

