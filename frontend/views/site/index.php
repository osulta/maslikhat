<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="col-sm-6">
    <div class="row">
        <div class="col-sm-12">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                    <li data-target="#myCarousel" data-slide-to="4"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="/images/slider/1.jpeg" alt="">
                    </div>

                    <div class="item">
                        <img src="/images/slider/2.jpeg" alt="">
                    </div>

                    <div class="item">
                        <img src="/images/slider/3.jpeg" alt="">
                    </div>

                    <div class="item">
                        <img src="/images/slider/4.jpeg" alt="">
                    </div>

                    <div class="item">
                        <img src="/images/slider/5.jpeg" alt="">
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">алдыңғы</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">келесі</span>
                </a>
            </div>
        </div>
    </div>
    <hr />
    <div class="row">
        <div class="col-sm-12">
            <div class="title">
                <h4>Жаңалықтар</h4>
            </div>
        </div>
    </div>
    <div class="row flex">
        <div class="col-sm-6">
            <div class="well well-equal">
                <p class="sess-date">22.12.2017 ж</p>
                <img src="/images/sessiya/sess22.jpg" width="100%" alt="Сессия">
                <h4 class="sess-title"><a href="#">ЕҢБЕКШІҚАЗАҚ АУДАНДЫҚ МӘСЛИХАТЫНЫҢ VI ШАҚЫРЫЛЫМЫНЫҢ КЕЗЕКТІ ХХІІ СЕССИЯСЫ</a></h4>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="well well-equal">
                <p class="sess-date">27.12.2017 ж</p>
                <img src="/images/sessiya/sess23.jpg" width="100%" alt="Сессия" />
                <h4 class="sess-title"><a href="#">ЕҢБЕКШІҚАЗАҚ АУДАНДЫҚ МӘСЛИХАТЫНЫҢ VI ШАҚЫРЫЛЫМЫНЫҢ КЕЗЕКТЕН ТЫС ХХІІІ СЕССИЯСЫ</a></h4>
            </div>
        </div>
    </div>
</div>

<div class="col-sm-3">
    <div class="thumbnail">
        <p class="text-center"><strong>Қош келдіңіздер!</strong></p>
        <img class="image-margin-bottom" src="/images/beket-tol.jpeg" alt="Астана">
        <p class="text">Сізді Еңбекшіқазақ аудандық мәслихаттың ресми сайтында қарсы алуға қуаныштымын. Еңбекшіқазақ аудандық мәслихаты Қазақстан Республикасында «Электрондық үкімет» мемлекеттік бағдарламасын қалыптастыру мақсатында, атқарылып жатқан іс-шаралар туралы ақпарат береді. </p>
        <p class="text-right">Құрметпен, Еңбекшіқазақ аудандық мәслихаттың хатшысы <br /><strong>Ахметов Бекет Төлегенұлы</strong></p>
    </div>
</div>
