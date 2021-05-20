<?php
$this->title = Yii::t('site', 'Заместители');

$this->params['title'][] = $this->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('site', 'О центре'), 'url' => ['static/about']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="direction">
    <div class="pb-4 text-center">
        <h1><?= Yii::t('site', 'Заместители') ?></h1>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="card text-center direction-img-trigger">
                <img class="card-img-top" src="http://st-kiosk-hub.itbgroup.kz/employee/Жұмағали Дәулетбек Жұманұлы.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">
                        Жұмағали Дәулетбек Жұманұлы
                    </h5>
                    <p class="card-text">
                        Заместитель директора по организационно-методической работе
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-center direction-img-trigger">
                <img class="card-img-top" src="/img/Асабаева Рита Искандеровна.JPG" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">
                        Асабаева Рита Искандеровна
                    </h5>
                    <p class="card-text">
                        Заместитель директора по качеству
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-center direction-img-trigger">
                <img class="card-img-top" src="http://st-kiosk-hub.itbgroup.kz/employee/Исмаилов Самат Тастемирович.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">
                        Исмаилов Самат Тастемирович
                    </h5>
                    <p class="card-text">
                        Заместитель директора по лечебной части
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>