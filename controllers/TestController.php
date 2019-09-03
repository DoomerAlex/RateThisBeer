<?php

namespace app\controllers;

use app\models\entity\Beer;
use yii\web\Controller;

/**
 * Class TestController
 * @package app\controllers
 */
class TestController extends MainController
{
    public function beforeAction($action)
    {
        return parent::beforeAction($action);
    }

    public function afterAction($action, $result)
    {
        return parent::afterAction($action, $result);
    }

    public function actionIndex()
    {
        $admin = Beer::find(1)->with('country')->with('beerTags')->asArray()->limit(1)->all();
        echo '<pre>';
        print_r($admin);
        echo '</pre>';
        //echo 'test';
    }
}