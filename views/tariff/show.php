<?php
use yii\helpers\Html;
use \yii\helpers\Url;

$this->title = 'Тариф ' . $model->name;
$updateRoute = Url::to(['tariff/update']);
$this->registerCssFile('@web/css/tariffs.css',['depends'=>'app\assets\AppAsset']);?>
<section id="tariffs" class="tariffs-wrapper">
    <div class="section-heading">
        <h2 class="section-title">Тариф <?= $model->id ?></h2>
        <div class="tariffs-manage">
            <a class="btn" href="<?=\yii\helpers\Url::to(['tariff/index'])?>">Назад</a>
        </div>
    </div>
    <div class="tariffs-body">
            <div class="tariff-card">
                <?php echo Html::a('&times;', array('tariff/delete', 'id'=>$model->id),['class'=>'btn delete-btn','aria-label'=>'Удалить']); ?>
                <h3 class="tariff-card-title">
                    <?=$model->name?></h3>
                <span class="tariff-card-subtitle">
                        Скорость Интернета:
                </span>
                <div class="tariff-card-speed-block">
                    <div class="tariff-card-speed-text">
                        <p class="tariff-card-speed-pretext">
                            до
                        </p>
                        <p class="tariff-card-speed">
                            <input type="number" id="speed" value="<?=$model->speed?>" class="tariff-card-speed-input">
                        </p>
                        <p class="tariff-card-speed-subtext">
                            Мбит/с
                        </p>
                    </div>
                </div>
                <div class="tariff-card-price-block">
                    <div class="tariff-card-price-title">
                        Стоимость:
                    </div>
                    <div class="tariff-card-price">
                        <p class="price">
                            <?=$model->price?>
                        </p>
                        <p>
                            /мес
                        </p>
                    </div>
                </div>
<!--                -->
                <?= Html::button('Обновить',[
                    'class'=>'tariff-card-button btn',
                    'onclick'=>"$.get('$updateRoute', {id:'$model->id', speed: $('#speed').val()})"
                ]); ?>
            </div>
    </div>
</section>


