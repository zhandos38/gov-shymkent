<?php


namespace frontend\controllers;


use yii\web\Controller;

class StaticController extends Controller
{
    public function actionTarget()
    {
        return $this->render('target');
    }
}