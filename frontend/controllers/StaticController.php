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

    public function actionMedicine()
    {
        return $this->render('medicine');
    }

    public function actionScreening()
    {
        return $this->render('screening');
    }

    public function actionSpecialist()
    {
        return $this->render('specialist');
    }

    public function actionPeople()
    {
        return $this->render('people');
    }

    public function actionLicence()
    {
        return $this->render('licence');
    }
}