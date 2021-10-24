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

    public function actionCodex()
    {
        return $this->render('codex');
    }

    public function actionLicenseAgreement()
    {
        return $this->render('license-agreement');
    }

    public function actionLicenseFarm()
    {
        return $this->render('license-farm');
    }

    public function actionLicenseMed()
    {
        return $this->render('license-med');
    }

    public function actionLicenseNarko()
    {
        return $this->render('license-narko');
    }

    public function actionLicensePribor()
    {
        return $this->render('license-pribor');
    }

    public function actionLicenseRadio()
    {
        return $this->render('license-radio');
    }

    public function actionSupervisor()
    {
        return $this->render('supervisor');
    }

    public function actionOrgStructure()
    {
        return $this->render('org-structure');
    }

    public function actionPositionSupervisor()
    {
        return $this->render('position-supervisor');
    }

    public function actionPositionSecretary()
    {
        return $this->render('position-secretary');
    }

    public function actionState()
    {
        return $this->render('state');
    }

    public function actionStatute()
    {
        return $this->render('statute');
    }

    public function actionProtocol1()
    {
        return $this->render('protocol1');
    }

    public function actionProtocol2()
    {
        return $this->render('protocol2');
    }

    public function actionProtocol3()
    {
        return $this->render('protocol3');
    }

    public function actionProtocol4()
    {
        return $this->render('protocol4');
    }

    public function actionProtocol5()
    {
        return $this->render('protocol5');
    }

    public function actionPlan()
    {
        return $this->render('plan');
    }
}