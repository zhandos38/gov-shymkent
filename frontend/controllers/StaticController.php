<?php


namespace frontend\controllers;


use yii\web\Controller;

class StaticController extends Controller
{
    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionTarget()
    {
        return $this->render('target');
    }

    public function actionStructure()
    {
        return $this->render('structure');
    }
}