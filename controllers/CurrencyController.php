<?php

namespace app\controllers;


use yii\filters\auth\CompositeAuth;
use yii\rest\ActiveController;
use yii\filters\auth\HttpBearerAuth;


class CurrencyController extends ActiveController
{
    public $modelClass = 'app\models\Currency';

    public function checkAccess($action, $model = null, $params = [])
    {
        return true;
    }


    public function behaviors()
    {
        $behaviors = parent::behaviors();
        $behaviors['authenticator'] = [
            'class' => CompositeAuth::class,
            'authMethods' => [
                HttpBearerAuth::class,
            ],
        ];
        return $behaviors;
    }

}
