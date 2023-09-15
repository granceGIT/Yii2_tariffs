<?php

namespace app\models;

use yii\base\Model;

class CreateTariffForm extends Model
{
    public $name;
    public $price;
    public $speed;

    public function rules()
    {
        return [
            [['name','price','speed'],'required','message'=>'Пожалуйста, заполните поле'],
            [['price','speed'],'number','message'=>'Введите число'],
        ];
    }

    public function store()
    {
        if($this->validate()){
            return 1;
        }
        return false;
    }
}