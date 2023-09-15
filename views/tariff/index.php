<?php $this->registerCssFile('@web/css/tariffs.css',['depends'=>'app\assets\AppAsset']);?>
<section id="tariffs" class="tariffs-wrapper">
    <div class="section-heading">
        <h2 class="section-title">Тарифы</h2>
        <div class="tariffs-manage">
            <button class="btn add-tariff-button">Добавить</button>
        </div>
    </div>
    <div class="tariffs-body">
        <?php foreach ($tariffs as $tariff) {?>
            <div class="tariff-card">
                <h3 class="tariff-card-title">
                    <?=$tariff->name?></h3>
                <span class="tariff-card-subtitle">
                        Скорость Интернета:
                </span>
                <div class="tariff-card-speed-block">
                    <div class="tariff-card-speed-text">
                        <p class="tariff-card-speed-pretext">
                            до
                        </p>
                        <p class="tariff-card-speed">
                            <?=$tariff->speed?>
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
                            <?=$tariff->price?>
                        </p>
                        <p>
                            /мес
                        </p>
                    </div>
                </div>
                <button class="tariff-card-button btn" role="button" aria-label="Выбрать тариф" title="Выбрать тариф">
                    Выбрать тариф
                </button>
            </div>
        <?php }?>
    </div>
</section>


