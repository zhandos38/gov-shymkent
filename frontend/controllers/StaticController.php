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

    public function actionGynecology()
    {
        return $this->render('gynecology');
    }

    public function actionLight()
    {
        return $this->render('light');
    }

    public function actionBreastSurgery()
    {
        return $this->render('breast-surgery');
    }

    public function actionMammalogy()
    {
        return $this->render('mammalogy');
    }

    public function actionAnestasy()
    {
        return $this->render('anestasy');
    }

    public function actionRadiogynecology()
    {
        return $this->render('radiogynecology');
    }

    public function actionConsult()
    {
        return $this->render('consult');
    }

    public function actionDay()
    {
        return $this->render('day');
    }

    public function actionCisto()
    {
        return $this->render('cisto');
    }

    public function actionDirector()
    {
        return $this->render('director');
    }

    public function actionVice()
    {
        return $this->render('vice');
    }

    public function actionChem()
    {
        return $this->render('chem');
    }
}