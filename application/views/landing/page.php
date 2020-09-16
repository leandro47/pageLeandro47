<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!--  ======================= Start Main Area ================================ -->
<main class="site-main">
        <!--  ======================= Start Banner Area =======================  -->
        <section id="home">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-6 col-md-12 site-title">
                        <h3 class="title-text font-mobile">Hey devs</h3>
                        <h1 class="title-text text-uppercase font-mobile">I am Leandro</h1>
                        <h4 class="title-text text-uppercase font-mobile">Web developer</h4>
                        <div class="site-buttons">
                            <div class="d-flex flex-row flex-wrap">
                                <a href="<?php echo site_url('start/curriculo') ?>"
                                    class="btn button secondary-button text-uppercase font-mobile">Get cv</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 banner-image">
                        <img src="<?php echo base_url('assets/img/banner/banner-image.png') ?>" alt="banner-img"
                            class="img-fluid">
                    </div>
                </div>
            </div>
        </section>
        <!--  ======================= End Banner Area =======================  -->

        <!--  ========================= About Area ==========================  -->

        <section class="about-area" id="aboutme">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="about-image">
                            <img src="<?php echo base_url('assets/img/about-us.png') ?>" alt="About us"
                                class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 about-title">
                        <h2 class="text-uppercase font-mobile pt-5">
                            <span class="font-mobile">Let me</span>
                            <span class="font-mobile">introduce</span>
                            <span class="font-mobile">myself</span>
                        </h2>
                        <div class="paragraph py-4 w-75">
                            <p class="para font-mobile">
                                My name is Leandro da Silva
                            </p>
                            <p class="para font-mobile">
                                I live in Mafra-SC, I'm 22 years old, currently I'm single, graduated in ADS, currently
                                working as a fullstack programmer and supporting Mercedes-Benz for two years,
                                I'm self-taught and I love learning new technologies, I am passionate about FPS games
                                and MIBR fan.
                            </p>
                        </div>
                        <a href="<?php echo site_url('start/curriculo') ?>"
                            class="btn button primary-button font-mobile text-uppercase">Download cv</a>
                    </div>
                </div>
            </div>
        </section>

        <!--  ========================= End About Area ==========================  -->


        <!--  ====================== Start Educatin Area =============================  -->
        <section class="services-area" id="education">
            <div class="container fluid">
                <hr>
                <div class="row">
                    <div class="col-lg-12 text-center services-title">
                        <h1 class="text-uppercase title-text font-mobile">Education</h1>
                        <p class="para font-mobile">
                            <span style="font-size: 48px; color: #4758DD;">
                                <i class="fas fa-university"></i>
                            </span>
                            Graduated in Systems Analysis and Development
                            At UNOPAR University North of Paraná - 2015-2018
                        </p>
                    </div>
                </div>
                <hr>
                <div class="container-fluid">
                    <p class="text-uppercase title-text text-center title-session font-mobile">Tecnologies</p>
                    <div class="row">
                        <!-- php  -->
                        <div class="col-lg-4 col-md-6 pb-5 col- pb-5sm-12">
                            <div class="card card-background  p-3 rounded">
                                <div class="card-body text-info text-center">
                                    <span style="font-size: 60px; color: #4758DD;">
                                        <i class="fab fa-php"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- html 5  -->
                        <div class="col-lg-4 col-md-6 col-sm-12 pb-5">
                            <div class="card card-background  p-3 rounded">
                                <div class="card-body text-info text-center">
                                    <span style="font-size: 60px; color: #E34F26;">
                                        <i class="fab fa-html5"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- css  -->
                        <div class="col-lg-4 col-md-6 col-sm-12 pb-5">
                            <div class="card card-background  p-3 rounded">
                                <div class="card-body text-info text-center">
                                    <span style="font-size: 60px; color: #3A6DC0;">
                                        <i class="fab fa-css3-alt"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- javascript  -->
                        <div class="col-lg-4 col-md-6 col-sm-12 pb-5">
                            <div class="card card-background  p-3 rounded">
                                <div class="card-body text-info text-center">
                                    <span style="font-size: 60px; color: #F7DF1E;">
                                        <i class="fab fa-js"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- bootstrap  -->
                        <div class="col-lg-4 col-md-6 col-sm-12 pb-5">
                            <div class="card card-background  p-3 rounded">
                                <div class="card-body text-info text-center">
                                    <span style="font-size: 60px; color: #6B439C;">
                                        <i class="fab fa-bootstrap"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- CodeIgniter  -->
                        <div class="col-lg-4 col-md-6 col-sm-12 pb-5">
                            <div class="card card-background  p-3 rounded">
                                <div class="card-body text-info text-center">
                                    <span style="font-size: 60px; color: #EE4323;">
                                        <i class="fab fa-free-code-camp"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Experience  -->
        <section class="about-area" id="experience">
            <hr>
            <div class="container-fluid">
                <h1 class="text-uppercase title-text title-session text-center font-mobile">Experience</h1>
                <div class="container">
                    <div class="card w-100 mb-4 mycard">
                        <div class="card-body">
                            <h5 class="card-title title-text experience-title font-mobile">CLA RIBEIRO AGENCY</h5>
                            <p class="card-text experience-description font-mobile">
                                (Small business in the fashion segment)
                                image and video editor
                                Edit images with photoshop and also videos, assist photographer.</p>
                            <p class="card-text"><small class="text-muted">From January / 2017 to September /
                                    2017</small></p>
                        </div>
                    </div>
                    <div class="card w-100 mb-4 mycard">
                        <div class="card-body">
                            <h5 class="card-title title-text experience-title font-mobile">MERCEDES-BENZ | MALLON</h5>
                            <p class="card-text experience-description font-mobile">
                                (Midsize company in the automotive segment)
                                IT SUPPORT
                                Support for users using computers and electronics in general, manage email servers,
                                manage network,
                                WEB developer, ERP support and other Mercedes-Benz systems.</p>
                            <p class="card-text"><small class="text-muted">From May / 2018 to the present moment</small>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!--  ======================= End Project Area =============================  -->
</main>
<!--  ======================= End Main Area ================================ -->