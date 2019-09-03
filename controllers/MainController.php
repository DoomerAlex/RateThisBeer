<?php


namespace app\controllers;


use yii\web\Controller;

/**
 * Главный контроллер, от которого наследуем все остальные контроллеры
 *
 * Class MainController
 * @package app\controllers
 */
class MainController extends Controller
{
    /**
     * Главная страница сайта
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}