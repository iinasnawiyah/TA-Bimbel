@extends('layout.landing')
@section('container')

<!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

<!--- PRELOADER -->
<div class="preeloader">
    <div class="preloader-spinner"></div>
</div>

<!--SCROLL TO TOP-->
<a href="#scroolup" class="scrolltotop"><i class="fa fa-long-arrow-up"></i></a>

<!--START TOP AREA-->
<header class="top-area" id="home">
    <div class="header-top-area" id="scroolup">
        <!--MAINMENU AREA-->
        <div class="mainmenu-area" id="mainmenu-area">
            <div class="mainmenu-area-bg"></div>
            <nav class="navbar">
                <div class="container">
                    <div class="navbar-header">
                        <a href="{{route('index')}}" class="stellarnav"><img src="{{ asset('') }}template2/img/20210814_153120.png" alt="logo"></a>
                    </div>
                    <div id="main-nav" class="stellarnav">
                        <ul id="nav" class="nav navbar-nav pull-right">
                            <li class="active"><a href="#home">Beranda</a></li>
                            <li><a href="#features">Tentang</a></li>
                            <li><a href="#courses">Paket Bimbel</a></li>
                            <li><a href="#contact">Kontak</a></li>

                            <li><a href="login">Login</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <!--END MAINMENU AREA END-->
    </div>

    <!--WELCOME SLIDER AREA-->
    <div class="welcome-slider-area white font16">
        <div class="welcome-single-slide">
            <div class="slide-bg-one slide-bg-overlay"><img src="{{ asset('') }}template2/img/slider/slide_1.jpg" alt="slide"></div>
            <div class="welcome-area">
                <div class="container">
                    <div class="row flex-v-center">
                        <div class="col-md-8 col-lg-7 col-sm-12 col-xs-12">
                            <div class="welcome-text">
                                <h1>Bimbel Privat bersama Taman Belajar</h1>
                                <p>Taman Belajar Merupakan lembaga bimbingan belajar privat yang hadir untuk, memenuhi kebutuhan belajarmu dan menyelesaikan permasalahan dalam belajar </p>
                                <div class="home-button">
                                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                                        <div class="enroll-button left">
                                            <a href="{{ route('register') }}">DAFTAR</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="welcome-single-slide">
            <div class="slide-bg-two slide-bg-overlay"><img src="{{ asset('') }}template2/img/slider/slide_2.jpg" alt="slide"></div>
            <div class="welcome-area">
                <div class="container">
                    <div class="row flex-v-center">
                        <div class="col-md-8 col-lg-7 col-sm-12 col-xs-12">
                            <div class="welcome-text">
                                <h1>Bimbel Privat bersama Taman Belajar</h1>
                                <p>Temukan pengalaman belajar yang menyenangkan</p>
                                <div class="home-button">
                                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                                        <div class="enroll-button left">
                                            <a href="{{ route('register') }}">DAFTAR</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="welcome-single-slide">
            <div class="slide-bg-three slide-bg-overlay"><img src="{{ asset('') }}template2/img/slider/slide_3.jpg" alt="slide"></div>
            <div class="welcome-area">
                <div class="container">
                    <div class="row flex-v-center">
                        <div class="col-md-8 col-lg-7 col-sm-12 col-xs-12">
                            <div class="welcome-text">
                                <h1>Bimbel Privat bersama Taman Belajar</h1>
                                <p>Kami siap menjadi teman belajar yang dapat membantu meningkatkan kualitas belajarmu</p>
                                <div class="home-button">
                                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                                        <div class="enroll-button left">
                                            <a href="{{ route('register') }}">DAFTAR</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--WELCOME SLIDER AREA END-->
</header>
<!--END TOP AREA-->

<!--FEATURES TOP AREA-->
<section class="features-top-area" id="features">
    <div class="container">
        <div class="row promo-content">
            <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                <div class="text-icon-box mb20 xs-mb0 wow fadeInUp padding30" data-wow-delay="0.1s">
                    <div class="box-icon features-box-icon">
                        <i class="fa fa-graduation-cap"></i>
                    </div>
                    <h3 class="box-title"> Bimbel Privat </h3>
                    <p>Konsep mini class membuat siswa lebih fokus dalam belajar dan lebih mudah memahami materi yang disampaikan</p>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                <div class="text-icon-box relative mb20 xs-mb0  wow fadeInUp padding30" data-wow-delay="0.2s">
                    <div class="box-icon features-box-icon">
                        <i class="icofont icofont-business-man-alt-1"></i>
                    </div>
                    <h3 class="box-title">Mentor</h3>
                    <p>Selama program berlangsung peserta akan dibimbing oleh guru/mentor yang sudah pengalaman di bidangnya </p>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                <div class="text-icon-box relative mb20 xs-mb0 wow fadeInUp padding30" data-wow-delay="0.3s">
                    <div class="box-icon features-box-icon">
                        <i class="fa fa-rocket"></i>
                    </div>
                    <h3 class="box-title">Kualitas Belajar</h3>
                    <p>Dengan privat kelas akan membantu peserta untuk meningkatkan kualitas belajar yang nyaman dan efektif</p>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                <div class="text-icon-box relative mb20 xs-mb0 wow fadeInUp padding30 visible-sm" data-wow-delay="0.4s">
                    <div class="box-icon features-box-icon">
                        <i class="fa fa-cog"></i>
                    </div>
                    <h3 class="box-title">Quality Service</h3>
                    <p>A Google Docs scam that appears to be widespread began landing in Wednesday in what seemed to be a phishing attack.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--FEATURES TOP AREA END-->

<!--ABOUT TOP CONTENT AREA-->
<section class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2 col-sm-12 col-xs-12">
                <div class="text-center wow fadeIn">
                    <h2 class="xs-font24">Mengapa Harus Bimbel Taman Belajar?</h2>
                    <h4 class="xl-font12">* Karena memiliki tenaga pengajar yang berpengalaman</h4>
                    <h4>* Skema Pembelajaran Privat</h4>
                    <h4>* Dikelola oleh profesional</p>
                        <h4>* Membantu siswa dalam pembelajaran dan menjadi teman belajar yang menyenangkan</h4>
                </div>
            </div>
        </div>
    </div>
</section>
<!--ABOUT TOP CONTENT AREA END-->

<!--FUN FACT AREA AREA-->
<section class="fun-fact-area center white relative padding-100-70" id="fact">
    <div class="area-bg" data-stellar-background-ratio="0.6"><img src="{{ asset('') }}template2/img/fact-bg.jpg" alt=""></div>
    <div class="container">
        <!-- <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="single-fun-fact mb30 wow fadeInUp" data-wow-delay="0.1s">
                    <h3 class="font60 xs-font26"><span class="counter"></span>k</h3>
                    <p class="font600">Graduated Students</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="single-fun-fact mb30 wow fadeInUp" data-wow-delay="0.2s">
                    <h3 class="font60 xs-font26"><span class="counter">124</span></h3>
                    <p class="font600">Expert Instructors</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="single-fun-fact mb30 wow fadeInUp" data-wow-delay="0.3s">
                    <h3 class="font60 xs-font26"><span class="counter">600</span>k</h3>
                    <p class="font600">Books in our library</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="single-fun-fact mb30 wow fadeInUp" data-wow-delay="0.4s">
                    <h3 class="font60 xs-font26"><span class="counter">15</span>k</h3>
                    <p class="font600">Students get employed</p>
                </div>
            </div> -->
    </div>
    </div>
</section>
<!--FUN FACT AREA AREA END-->

<!--COURSE AREA-->
<section class="course-area padding-top" id="courses">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2 col-sm-12 col-xs-12">
                <div class="area-title text-center wow fadeIn">
                    <h2 class="xs-font26">Paket Program Bimbel</h2>
                </div>
            </div>
        </div>
        <div class="row course-list">
            <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                <div class="single-course mb20">
                    <img src="{{ asset('') }}template2/img/course/blog-1.jpg" alt="">
                    <div class="course-details padding30">
                        <h3 class="font18">How to Write a Powerful Speech</h3>
                        <p>MPs who are leaving the protection of for the campaign trail will render...</p>
                        <p class="mt30"><a href="#" class="enroll-button">Enroll the Courses</a> <span class="course-price">$29.99</span></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                <div class="single-course mb20">
                    <img src="{{ asset('') }}template2/img/course/blog-2.jpg" alt="">
                    <div class="course-details padding30">
                        <h3 class="font18">The Art and Practice of Leadership</h3>
                        <p>MPs who are leaving the protection of for the campaign trail will render...</p>
                        <p class="mt30"><a href="#" class="enroll-button">Enroll the Courses</a> <span class="course-price">$29.99</span></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                <div class="single-course mb20">
                    <img src="{{ asset('') }}template2/img/course/blog-3.jpg" alt="">
                    <div class="course-details padding30">
                        <h3 class="font18">Introduction to Resume Writing</h3>
                        <p>MPs who are leaving the protection of for the campaign trail will render...</p>
                        <p class="mt30"><a href="#" class="enroll-button">Enroll the Courses</a> <span class="course-price">$29.99</span></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                <div class="single-course mb20">
                    <img src="{{ asset('') }}template2/img/course/blog-4.jpg" alt="">
                    <div class="course-details padding30">
                        <h3 class="font18">The Art and Practice of Leadership</h3>
                        <p>MPs who are leaving the protection of for the campaign trail will render...</p>
                        <p class="mt30"><a href="#" class="enroll-button">Enroll the Courses</a> <span class="course-price">$29.99</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--COURSE AREA END-->

<!--ABOUT AREA-->
<!-- <section class="section-padding about-area" id="about">
    <div class="container">
        <div class="row flex-v-center">
            <div class="col-md-5 col-lg-5 col-sm-12 col-xs-12">
                <div class="about-content xs-mb50 wow fadeIn">
                    <h3 class="xs-font20 mb30">Education is the foundation upon which we build our future.</h3>
                    <p>A Google Docs scam that appears to be widespread began landing in users’ inboxes on Wednesday in what seemed to be a sophisticated phishing or malware attack. The deceptive invitation to edit a Google Doc on Google Docs with you.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-md-offset-1 col-lg-offset-1 col-sm-12 col-xs-12">
                <div class="video-promo-details wow fadeIn">
                    <div class="video-promo-content">
                        <span data-video-id="j1S66liv1t8" class="video-area-popup mb30"><i class="fa fa-play"></i></span>
                    </div>
                    <img src="{{ asset('') }}template2/img/about/about.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</section> -->
<!--ABOUT AREA END-->

<!--TESTMONIAL AREA AREA-->
<!-- <section class="testmonial-area bg-theme section-padding" id="testmonial">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2 col-sm-12 col-xs-12">
                <div class="area-title text-center wow fadeIn">
                    <h2>What Our Customer Say</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="testmonial-slider">
                    <div class="single-testmonial">
                        <div class="author-content mb20">
                            <p>“The recording starts with the patter of a summer squall. Later a drifting tone like that of a not-quite-tuned-in radio station rises and for a while drowns out the patter. These are the sounds encountered by NASA.”</p>
                        </div>
                        <div class="author-name-image relative">
                            <div class="author-img mb20">
                                <img src="{{ asset('') }}template2/img/testmonial/testmonial.jpg" alt="">
                            </div>
                            <h4>Harold Crouse</h4>
                            <a href="#">Sales manager</a>
                        </div>
                    </div>
                    <div class="single-testmonial">
                        <div class="author-content mb20">
                            <p>“The recording starts with the patter of a summer squall. Later a drifting tone like that of a not-quite-tuned-in radio station rises and for a while drowns out the patter. These are the sounds encountered by NASA.”</p>
                        </div>
                        <div class="author-name-image relative">
                            <div class="author-img mb20">
                                <img src="{{ asset('') }}template2/img/testmonial/testmonial.jpg" alt="">
                            </div>
                            <h4>Harold Crouse</h4>
                            <a href="#">Sales manager</a>
                        </div>
                    </div>
                    <div class="single-testmonial">
                        <div class="author-content mb20">
                            <p>“The recording starts with the patter of a summer squall. Later a drifting tone like that of a not-quite-tuned-in radio station rises and for a while drowns out the patter. These are the sounds encountered by NASA.”</p>
                        </div>
                        <div class="author-name-image relative">
                            <div class="author-img mb20">
                                <img src="{{ asset('') }}template2/img/testmonial/testmonial.jpg" alt="">
                            </div>
                            <h4>Harold Crouse</h4>
                            <a href="#">Sales manager</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!--TESTMONIAL AREA AREA END-->

<!--BLOG AREA-->
<!-- <section class="blog-feed-area padding-top" id="blog">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2 col-sm-12 col-xs-12">
                <div class="area-title text-center wow fadeIn">
                    <h2>From Our Blog</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                <div class="single-blog-item sm-mb30 xs-mb30 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="blog-thumb">
                        <a href="blog.html"><img src="{{ asset('') }}template2/img/blog/blog-1.jpg" alt=""></a>
                    </div>
                    <div class="blog-details padding30">
                        <h3 class="blog-title font20 mb30"><a href="blog.html">Blazeon Scrambles to Police Content Amid Rapid Growth</a></h3>
                        <p class="blog-meta font14 mt20"><a href="#">Feb 01, 2016 </a> by <a href="#">Mark Stonis</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                <div class="single-blog-item sm-mb30 xs-mb30 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="blog-thumb">
                        <a href="blog.html"><img src="{{ asset('') }}template2/img/blog/blog-2.jpg" alt=""></a>
                    </div>
                    <div class="blog-details padding30">
                        <h3 class="blog-title font20 mb30"><a href="blog.html">Blazeon Scrambles to Police Content Amid Rapid Growth</a></h3>
                        <p class="blog-meta font14 mt20"><a href="#">Feb 01, 2016 </a> by <a href="#">Mark Stonis</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                <div class="single-blog-item sm-mb30 xs-mb30 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="blog-thumb">
                        <a href="blog.html"><img src="{{ asset('') }}template2/img/blog/blog-3.jpg" alt=""></a>
                    </div>
                    <div class="blog-details padding30">
                        <h3 class="blog-title font20 mb30"><a href="blog.html">Blazeon Scrambles to Police Content Amid Rapid Growth</a></h3>
                        <p class="blog-meta font14 mt20"><a href="#">Feb 01, 2016 </a> by <a href="#">Mark Stonis</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                <div class="single-blog-item wow fadeInUp visible-sm" data-wow-delay="0.4s">
                    <div class="blog-thumb">
                        <a href="blog.html"><img src="{{ asset('') }}template2/img/blog/blog-1.jpg" alt=""></a>
                    </div>
                    <div class="blog-details padding30">
                        <h3 class="blog-title font20 mb30"><a href="blog.html">Blazeon Scrambles to Police Content Amid Rapid Growth</a></h3>
                        <p class="blog-meta font14 mt20"><a href="#">Feb 01, 2016 </a> by <a href="#">Mark Stonis</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!--BLOG AREA END-->


<!--FAQS AREA-->
<!-- <section class="faqs-area padding-100-50" id="faqs">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                <div class="area-title text-center wow fadeIn">
                    <h2>FAQS</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                <div class="text-icon-box relative mb50 wow fadeInUp" data-wow-delay="0.1s">
                    <h3 class="box-title">1.Two Very Different Australias?</h3>
                    <p>A Google Docs scam that appears to be widespread began landing in users’ inboxes on Wednesday in what seemed to be a sophisticated phishing.</p>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                <div class="text-icon-box relative mb50 wow fadeInUp" data-wow-delay="0.2s">
                    <h3 class="box-title">2.What Does Darwin Mean to You?</h3>
                    <p>A Google Docs scam that appears to be widespread began landing in users’ inboxes on Wednesday in what seemed to be a sophisticated phishing.</p>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                <div class="text-icon-box relative mb50 wow fadeInUp" data-wow-delay="0.3s">
                    <h3 class="box-title">3.Where Totem Poles Are a Living Art ?</h3>
                    <p>A Google Docs scam that appears to be widespread began landing in users’ inboxes on Wednesday in what seemed to be a sophisticated phishing.</p>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                <div class="text-icon-box relative mb50 wow fadeInUp" data-wow-delay="0.1s">
                    <h3 class="box-title">1.Two Very Different Australias?</h3>
                    <p>A Google Docs scam that appears to be widespread began landing in users’ inboxes on Wednesday in what seemed to be a sophisticated phishing.</p>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                <div class="text-icon-box relative mb50 wow fadeInUp" data-wow-delay="0.2s">
                    <h3 class="box-title">2.What Does Darwin Mean to You?</h3>
                    <p>A Google Docs scam that appears to be widespread began landing in users’ inboxes on Wednesday in what seemed to be a sophisticated phishing.</p>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                <div class="text-icon-box relative mb50 wow fadeInUp" data-wow-delay="0.3s">
                    <h3 class="box-title">3.Where Totem Poles Are a Living Art ?</h3>
                    <p>A Google Docs scam that appears to be widespread began landing in users’ inboxes on Wednesday in what seemed to be a sophisticated phishing.</p>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!--FAQS AREA END-->

<!--CONTACT US AREA-->
<section class="contact-area sky-gray-bg" id="contact">
    <div class="container-fluid no-padding">
        <div class="row no-margin">
            <div class="no-padding col-md-6 col-lg-6 col-sm-12 col-xs-12">
                <div class="map-area relative">
                    <div id="map" style="width: 100%; height: 600px;"> </div>
                </div>
            </div>
            <div class="no-padding col-md-4 col-lg-4 col-sm-12 col-xs-12">
                <div class="contact-form-content padding50 xs-padding20">
                    <div class="contact-title wow fadeIn">
                        <h3 class="font28 mb50 xs-mb30 xs-font22 xs-mt20">Ada Pertanyaan? Jangan Khawatir Hubungi Admin.</h3>
                    </div>
                    <div class="contact-form wow fadeIn">
                        <form action="process.php" id="contact-form" method="post">
                            <div class="row">
                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                    <div class="form-group" id="name-field">
                                        <div class="form-input">
                                            <input type="text" class="form-control" id="form-name" name="form-name" placeholder="Name.." required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                    <div class="form-group" id="email-field">
                                        <div class="form-input">
                                            <input type="email" class="form-control" id="form-email" name="form-email" placeholder="Email.." required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                    <div class="form-group" id="phone-field">
                                        <div class="form-input">
                                            <input type="text" class="form-control" id="form-phone" name="form-phone" placeholder="Subject..">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                    <div class="form-group" id="message-field">
                                        <div class="form-input">
                                            <textarea class="form-control" rows="6" id="form-message" name="form-message" placeholder="Your Message Here..." required></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                    <div class="form-group mb0">
                                        <button type="submit">Kirim Pesan</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--CONTACT US AREA END-->

<!-- CLIENT AREA-->
<!-- <div class="client-area  padding-bottom mt100 sm-mt10 xs-mt0">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                <div class="client-slider">
                    <div class="single-client">
                        <img src="{{ asset('') }}template2/img/client/client-6.png" alt="">
                    </div>
                    <div class="single-client">
                        <img src="{{ asset('') }}template2/img/client/client-7.png" alt="">
                    </div>
                    <div class="single-client">
                        <img src="{{ asset('') }}template2/img/client/client-8.png" alt="">
                    </div>
                    <div class="single-client">
                        <img src="{{ asset('') }}template2/img/client/client-9.png" alt="">
                    </div>
                    <div class="single-client">
                        <img src="{{ asset('') }}template2/img/client/client-10.png" alt="">
                    </div>
                    <div class="single-client">
                        <img src="{{ asset('') }}template2/img/client/client-6.png" alt="">
                    </div>
                    <div class="single-client">
                        <img src="{{ asset('') }}template2/img/client/client-7.png" alt="">
                    </div>
                    <div class="single-client">
                        <img src="{{ asset('') }}template2/img/client/client-8.png" alt="">
                    </div>
                    <div class="single-client">
                        <img src="{{ asset('') }}template2/img/client/client-9.png" alt="">
                    </div>
                    <div class="single-client">
                        <img src="{{ asset('') }}template2/img/client/client-10.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!--CLIENT AREA END -->

<!--ADDMISSION AREA-->
<section class="admition-area padding-50-50 bg-theme">
    <div class="container">
        <div class="row flex-v-center">
            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                <div class="admition-content xs-center xs-mb30">
                    <h3 class="xs-font20">Menerima Siswa Baru </h3>
                    <p>Segera daftarkan diri anda untuk mengikuti program paket bimbingan belajar bersama Taman Belajar untuk menjadi teman belajar yang asik dan menyenangkan</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                <div class="enroll-button right xs-center">
                    <a href="#">Enroll Now</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--ADDMISSION AREA END-->
@endsection