<?php
$this->title = Yii::t('site', 'Новости');

$this->params['breadcrumbs'][] = $this->title;

use yii\widgets\ListView;
?>
<div class="container mt-80 mb-60">
    <div class="row">
        <div class="col-lg-8">
            <?= ListView::widget([
                'dataProvider' => $dataProvider,
                'itemView' => '_item',
                'layout' => '{items}{pager}',
                'itemOptions' => [
                    'class' => 'blog-box'
                ]
            ]) ?>
            <nav>
                <ul class="pagination mt-50 justify-content-center">
                    <li>
                        <a href="#" aria-label="Previous">
                            <i class="ion-chevron-back-sharp"></i>
                        </a>
                    </li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li>
                        <a href="#" aria-label="Next">
                            <i class="ion-chevron-forward-sharp"></i>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>

        <div class="col-lg-4 mt-lg-0 mt-40">
            <aside class="sidebar pl-lg-20">
                <div class="widget widget-blogs">
                    <h5 class="heading d-flex align-items-center"><i class="ion-document-text-outline icon-left"></i>Последние новости</h5>
                    <ul class="widget-list">
                        <li>
                            <a href="blog-single.html">10 Diet Charts to help you lose weight without any workout</a>
                        </li>
                        <li>
                            <a href="blog-single.html">The benefits and drawbacks of getting your knee replaced</a>
                        </li>
                        <li>
                            <a href="blog-single.html">Heat during straightening makes hair weak from roots</a>
                        </li>
                    </ul>
                </div>
                <div class="widget widget-social">
                    <h5 class="heading d-flex align-items-center"><i class="ion-share-social-outline icon-left"></i>Мы в соц. сетях</h5>
                    <p class="mb-20">Care for your loved ones by sharing our blogs with your friends & family</p>
                    <ul class="social social-2x">
                        <li><a class="facebook" href="#"><i class="ion-logo-facebook"></i></a></li>
                        <li><a class="twitter" href="#"><i class="ion-logo-twitter"></i></a></li>
                        <li><a class="skype" href="#"><i class="ion-logo-skype"></i></a></li>
                        <li><a class="pinterest" href="#"><i class="ion-logo-pinterest"></i></a></li>
                        <li><a class="instagram" href="#"><i class="ion-logo-instagram"></i></a></li>
                        <li><a class="youtube" href="#"><i class="ion-logo-youtube"></i></a></li>
                    </ul>
                </div>
                <div class="widget widget-categories">
                    <h5 class="heading d-flex align-items-center"><i class="ion-time-outline icon-left"></i>Архивы</h5>
                    <ul class="widget-list">
                        <li><a href="blog-list.html">January 2021 <span class="badge badge-light">08</span></a></li>
                        <li><a href="blog-list.html">Februrary 2021 <span class="badge badge-light">24</span></a></li>
                        <li><a href="blog-list.html">March 2021 <span class="badge badge-light">02</span></a></li>
                        <li><a href="blog-list.html">April 2021 <span class="badge badge-light">34</span></a></li>
                    </ul>
                </div>
            </aside>
        </div>
    </div>
</div>
