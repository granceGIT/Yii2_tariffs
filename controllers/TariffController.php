<?php

namespace app\controllers;

use app\models\Tariff;
use yii\web\Controller;

class TariffController extends Controller
{
    public function actionIndex()
    {
        $tariffs = Tariff::find()->orderBy('id')->all();

        return $this->render('index',[
            'tariffs'=>$tariffs,
        ]);
    }

    public function actionCreate()
    {
        return $this->render('create');
    }

    public function actionStore()
    {
        return 1;
    }

    public function actionEdit()
    {
        return 1;
    }

    public function actionUpdate()
    {
        return 1;
    }

    public function actionDelete()
    {
        return 1;
    }
}