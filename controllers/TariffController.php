<?php

namespace app\controllers;

use app\models\CreateTariffForm;
use app\models\Tariff;
use Yii;
use yii\helpers\Url;
use yii\web\Controller;
use yii\web\HttpException;

class TariffController extends Controller
{
    private function loadModel($id){
        $model = Tariff::findOne($id);
        if ($model==NULL){
            throw new HttpException(404,'Тариф не найден');
        }
        return $model;
    }

    public function actionIndex()
    {
        $tariffs = Tariff::find()->orderBy('id')->all();

        return $this->render('index',[
            'tariffs'=>$tariffs,
        ]);
    }

    public function actionCreate()
    {
        $model = new CreateTariffForm();
        if ($model->load(Yii::$app->request->post()) && $model->store()) {
            $tariff = new Tariff(['name'=>$model->name,'price'=>$model->price,'speed'=>$model->speed]);
            $tariff->save();
            Yii::$app->session->setFlash('success', "Тариф успешно создан!");
            return $this->refresh();
        }
        return $this->render('create',[
            'model'=>$model
        ]);
    }

    public function actionEdit()
    {
        return 1;
    }

    public function actionUpdate()
    {
        return 1;
    }

    public function actionDelete($id)
    {
        $model = $this->loadModel($id);
        if (!$model->delete()){
            Yii::$app->session->setFlash('error','Невозможно удалить тариф');
        }
        else{
            Yii::$app->session->setFlash('success','Тариф успешно удален');
        }
        $this->redirect(Url::to(['tariff/index']));
    }
}