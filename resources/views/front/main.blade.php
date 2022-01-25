@extends('front.index')

@section('title')
    منوی اصلی
@endsection
@section('content')

    <section id="intro" class="clearfix">
        <div class="container d-flex h-100">
            <div class="row justify-content-center align-self-center">
                <div class="col-md-6 intro-info order-md-first order-last">
                    <h2>برای آموزش با لاراول یار دیر نیست <br>  <span>شروع کن!</span></h2>
                    <div>
                        <a href="#about" class="btn-get-started scrollto">بزن بریم</a>
                    </div>
                </div>

                <div class="col-md-6 intro-img order-md-last order-first">
                    <img src="img/intro-img.svg" alt="" class="img-fluid">
                </div>
            </div>

        </div>
    </section>
    <button type="button" onclick="changetext(this)" id="txtchange">ذخیره</button>
    <main id="main">
    @include('front.message')
        <!--==========================
          About Us Section
        ============================-->
        <section id="about">

            <div class="container">
                <div class="row">

                    <div class="col-lg-5 col-md-6">
                        <div class="about-img">
                            <img src="img/about-img.jpg" alt="">
                        </div>
                    </div>

                    <div class="col-lg-7 col-md-6">
                        <div class="about-content">
                            <h2>درباره آموزش لاراول یار</h2>
                            <h3>دوره جامع آموزش Laravel به همراه پروژه عملی</h3>
                            <p>فریم ورک چیست ؟  فریم ورک بستری را برای برنامه نویسان فراهم می‌کند که استفاده از کدهای از پیش ساخته شده را امکان‌پذیر می‌کند. در واقع می‌توان گفت هدف اصلی فریم ورک‌ها، راحتی کار برنامه‌ نویسان و اجتناب از نوشتن کدهای تکراری است. لاراول یکی از محبوب‌ترین فریم ورک های PHP است. PHP فریم ورک‌های متعددی دارد که از جمله آن‌ها می‌توان به Yii ،Cakephp ،codeigniter ،Nette ،Symfonyاشاره کرد. در حال حاضر اکثر برنامه ‌نویسان تحت وبی که قصد توسعه برنامه‌های کاربردی وب بر پایه معماری سه لایه (MVC) با PHP دارند، استفاده از فریم ورک لاراول را به دیگر فریم ورک‌ها ترجیح می‌دهند.</p>
                            <p>لاراول (Laravel) یک فریم ورک php مبتنی بر معماری MVC است که تیلور اوتول (Taylor Otwell) آن را ایجاد و توسعه بخشید. این فریم ورک، بسیار قدرتمند، کدباز و رایگان است. </p>
                            <h3>برخی از مزایای استفاده از لاراول : </h3>
                            <ul>
                                <li><i class="ion-android-checkmark-circle"></i>    یادگیری و بروزرسانی آسان</li>
                                <li><i class="ion-android-checkmark-circle"></i>   آسان‏ سازی کارهای معمول در روند برنامه نویسی نظیر احراز هویت، روتینگ، جلسات و کَش</li>
                                <li><i class="ion-android-checkmark-circle"></i>بهره گیری از ریموت کامپوننت  </li>
                                <li><i class="ion-android-checkmark-circle"></i> محدود کردن Eloquent با دستورات ساده </li>
                                <li><i class="ion-android-checkmark-circle"></i>بهبود سرعت و افزایش ۱۰۰ درصدی سرعت مسیرها  </li>
                                <li><i class="ion-android-checkmark-circle"></i> دلپذیر کردن فرآیند توسعه برای توسعه دهندگان بدون به خطر انداختن قابلیت های برنامه
                                    استفاده از پکیج ها  </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </section><!-- #about -->


        <!--==========================
          Services Section
        ============================-->
        <section id="services" class="section-bg">
            <div class="container">

                <header class="section-header">
                    <h3>مقاله های مرتبط با لاراول</h3>
                </header>
                <br>

                <div class="row">
                    @foreach($articles as $article)
                        <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s">
                            <div class="box">
                                <div class="icon" style="background: #fceef3;"><i class="{{$article->icon}}"
                                                                                  style="color: #ff689b;"></i></div>
                                <h4 class="title"><a  href="{{route('article', $article->slug)}}">{{ $article->name}}</a></h4>
                                <p><?php  echo mb_substr(strip_tags($article->description),0,100,'UTF8').'...'?></p>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </section><!-- #services -->

        <!--==========================
          Why Us Section
        ============================-->
<!--        <section id="why-us" class="wow fadeIn">
            <div class="container-fluid">

                <header class="section-header">
                    <h3>Why choose us?</h3>
                    <p>Laudem latine persequeris id sed, ex fabulas delectus quo. No vel partiendo abhorreant vituperatoribus.</p>
                </header>

                <div class="row">

                    <div class="col-lg-6">
                        <div class="why-us-img">
                            <img src="img/why-us.jpg" alt="" class="img-fluid">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="why-us-content">
                            <p>Molestiae omnis numquam corrupti omnis itaque. Voluptatum quidem impedit. Odio dolorum exercitationem
                                est error omnis repudiandae ad dolorum sit.</p>
                            <p>
                                Explicabo repellendus quia labore. Non optio quo ea ut ratione et quaerat. Porro facilis deleniti porro
                                consequatur
                                et temporibus. Labore est odio.

                                Odio omnis saepe qui. Veniam eaque ipsum. Ea quia voluptatum quis explicabo sed nihil repellat..
                            </p>

                            <div class="features wow bounceInUp clearfix">
                                <i class="fa fa-diamond" style="color: #f058dc;"></i>
                                <h4>Corporis dolorem</h4>
                                <p>Commodi quia voluptatum. Est cupiditate voluptas quaerat officiis ex alias dignissimos et ipsum.
                                    Soluta at enim modi ut incidunt dolor et.</p>
                            </div>

                            <div class="features wow bounceInUp clearfix">
                                <i class="fa fa-object-group" style="color: #ffb774;"></i>
                                <h4>Eum ut aspernatur</h4>
                                <p>Molestias eius rerum iusto voluptas et ab cupiditate aut enim. Assumenda animi occaecati. Quo dolore
                                    fuga quasi autem aliquid ipsum odit. Perferendis doloremque iure nulla aut.</p>
                            </div>

                            <div class="features wow bounceInUp clearfix">
                                <i class="fa fa-language" style="color: #589af1;"></i>
                                <h4>Voluptates dolores</h4>
                                <p>Voluptates nihil et quis omnis et eaque omnis sint aut. Ducimus dolorum aspernatur. Totam dolores ut
                                    enim ullam voluptas distinctio aut.</p>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <div class="container">
                <div class="row counters">

                    <div class="col-lg-3 col-6 text-center">
                        <span data-toggle="counter-up">274</span>
                        <p>Clients</p>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                        <span data-toggle="counter-up">421</span>
                        <p>Projects</p>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                        <span data-toggle="counter-up">1,364</span>
                        <p>Hours Of Support</p>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                        <span data-toggle="counter-up">18</span>
                        <p>Hard Workers</p>
                    </div>

                </div>

            </div>
        </section>-->

        <!--==========================
          Call To Action Section
        ============================-->
<!--        <section id="call-to-action" class="wow fadeInUp">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 text-center text-lg-left">
                        <h3 class="cta-title">Call To Action</h3>
                        <p class="cta-text"> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                            nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                            anim id est laborum.</p>
                    </div>
                    <div class="col-lg-3 cta-btn-container text-center">
                        <a class="cta-btn align-middle" href="#">Call To Action</a>
                    </div>
                </div>

            </div>
        </section>&lt;!&ndash; #call-to-action &ndash;&gt;-->

        <!--==========================
          Features Section
        ============================-->
<!--        <section id="features">
            <div class="container">

                <div class="row feature-item">
                    <div class="col-lg-6 wow fadeInUp">
                        <img src="front/img/features-1.svg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0">
                        <h4>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h4>
                        <p>
                            Ipsum in aspernatur ut possimus sint. Quia omnis est occaecati possimus ea. Quas molestiae perspiciatis
                            occaecati qui rerum. Deleniti quod porro sed quisquam saepe. Numquam mollitia recusandae non ad at et a.
                        </p>
                        <p>
                            Ad vitae recusandae odit possimus. Quaerat cum ipsum corrupti. Odit qui asperiores ea corporis deserunt
                            veritatis quidem expedita perferendis. Qui rerum eligendi ex doloribus quia sit. Porro rerum eum eum.
                        </p>
                    </div>
                </div>

                <div class="row feature-item mt-5 pt-5">
                    <div class="col-lg-6 wow fadeInUp order-1 order-lg-2">
                        <img src="front/img/features-2.svg" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-6 wow fadeInUp pt-4 pt-lg-0 order-2 order-lg-1">
                        <h4>Neque saepe temporibus repellat ea ipsum et. Id vel et quia tempora facere reprehenderit.</h4>
                        <p>
                            Delectus alias ut incidunt delectus nam placeat in consequatur. Sed cupiditate quia ea quis. Voluptas nemo
                            qui aut distinctio. Cumque fugit earum est quam officiis numquam. Ducimus corporis autem at blanditiis
                            beatae incidunt sunt.
                        </p>
                        <p>
                            Voluptas saepe natus quidem blanditiis. Non sunt impedit voluptas mollitia beatae. Qui esse molestias.
                            Laudantium libero nisi vitae debitis. Dolorem cupiditate est perferendis iusto.
                        </p>
                        <p>
                            Eum quia in. Magni quas ipsum a. Quis ex voluptatem inventore sint quia modi. Numquam est aut fuga
                            mollitia exercitationem nam accusantium provident quia.
                        </p>
                    </div>

                </div>

            </div>
        </section>&lt;!&ndash; #about &ndash;&gt;-->

        <!--==========================
          Portfolio Section
        ============================-->
        <section id="portfolio" class="section-bg">
            <div class="container">

                <header class="section-header">
                    <h3 class="section-title">نمونه کارها ما</h3>
                </header>

                <div class="row">
                    <div class="col-lg-12">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".filter-app">App</li>
                            <li data-filter=".filter-card">Card</li>
                            <li data-filter=".filter-web">Web</li>
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container">

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="front/img/portfolio/app1.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4><a href="#">App 1</a></h4>
                                <p>App</p>
                                <div>
                                    <a href="front/img/portfolio/app1.jpg" data-lightbox="portfolio" data-title="App 1" class="link-preview"
                                       title="Preview"><i class="ion ion-eye"></i></a>
                                    <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.1s">
                        <div class="portfolio-wrap">
                            <img src="front/img/portfolio/web3.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4><a href="#">Web 3</a></h4>
                                <p>Web</p>
                                <div>
                                    <a href="front/img/portfolio/web3.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 3"
                                       title="Preview"><i class="ion ion-eye"></i></a>
                                    <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app" data-wow-delay="0.2s">
                        <div class="portfolio-wrap">
                            <img src="front/img/portfolio/app2.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4><a href="#">App 2</a></h4>
                                <p>App</p>
                                <div>
                                    <a href="front/img/portfolio/app2.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 2"
                                       title="Preview"><i class="ion ion-eye"></i></a>
                                    <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="front/img/portfolio/card2.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4><a href="#">Card 2</a></h4>
                                <p>Card</p>
                                <div>
                                    <a href="front/img/portfolio/card2.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 2"
                                       title="Preview"><i class="ion ion-eye"></i></a>
                                    <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.1s">
                        <div class="portfolio-wrap">
                            <img src="front/img/portfolio/web2.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4><a href="#">Web 2</a></h4>
                                <p>Web</p>
                                <div>
                                    <a href="front/img/portfolio/web2.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 2"
                                       title="Preview"><i class="ion ion-eye"></i></a>
                                    <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app" data-wow-delay="0.2s">
                        <div class="portfolio-wrap">
                            <img src="front/img/portfolio/app3.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4><a href="#">App 3</a></h4>
                                <p>App</p>
                                <div>
                                    <a href="front/img/portfolio/app3.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 3"
                                       title="Preview"><i class="ion ion-eye"></i></a>
                                    <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="front/img/portfolio/card1.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4><a href="#">Card 1</a></h4>
                                <p>Card</p>
                                <div>
                                    <a href="front/img/portfolio/card1.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 1"
                                       title="Preview"><i class="ion ion-eye"></i></a>
                                    <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card" data-wow-delay="0.1s">
                        <div class="portfolio-wrap">
                            <img src="front/img/portfolio/card3.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4><a href="#">Card 3</a></h4>
                                <p>Card</p>
                                <div>
                                    <a href="front/img/portfolio/card3.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 3"
                                       title="Preview"><i class="ion ion-eye"></i></a>
                                    <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.2s">
                        <div class="portfolio-wrap">
                            <img src="front/img/portfolio/web1.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4><a href="#">Web 1</a></h4>
                                <p>Web</p>
                                <div>
                                    <a href="front/img/portfolio/web1.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 1"
                                       title="Preview"><i class="ion ion-eye"></i></a>
                                    <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- #portfolio -->

        <!--==========================
          Team Section
        ============================-->
        <section id="team" class="section-bg">
            <div class="container">
                <div class="section-header">
                    <h3>اعضای تیم </h3>
                    <p>در لیست زیر می توانید اعضا را مشاهده کنید.</p>
                </div>

                <div class="row">

                    <div class="col-lg-3 col-md-6 wow fadeInUp">
                        <div class="member">
                            <img src="front/img/team-1.jpg" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>Walter White</h4>
                                    <span>Chief Executive Officer</span>
                                    <div class="social">
                                        <a href=""><i class="fa fa-twitter"></i></a>
                                        <a href=""><i class="fa fa-facebook"></i></a>
                                        <a href=""><i class="fa fa-google-plus"></i></a>
                                        <a href=""><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="member">
                            <img src="front/img/team-2.jpg" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>Sarah Jhonson</h4>
                                    <span>Product Manager</span>
                                    <div class="social">
                                        <a href=""><i class="fa fa-twitter"></i></a>
                                        <a href=""><i class="fa fa-facebook"></i></a>
                                        <a href=""><i class="fa fa-google-plus"></i></a>
                                        <a href=""><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="member">
                            <img src="front/img/team-3.jpg" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>William Anderson</h4>
                                    <span>CTO</span>
                                    <div class="social">
                                        <a href=""><i class="fa fa-twitter"></i></a>
                                        <a href=""><i class="fa fa-facebook"></i></a>
                                        <a href=""><i class="fa fa-google-plus"></i></a>
                                        <a href=""><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="member">
                            <img src="front/img/team-4.jpg" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>Amanda Jepson</h4>
                                    <span>Accountant</span>
                                    <div class="social">
                                        <a href=""><i class="fa fa-twitter"></i></a>
                                        <a href=""><i class="fa fa-facebook"></i></a>
                                        <a href=""><i class="fa fa-google-plus"></i></a>
                                        <a href=""><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- #team -->

        <!--==========================
          Clients Section
        ============================-->
<!--        <section id="clients" class="wow fadeInUp">
            <div class="container">

                <header class="section-header">
                    <h3>Our Clients</h3>
                </header>

                <div class="owl-carousel clients-carousel">
                    <img src="front/img/clients/client-1.png" alt="">
                    <img src="front/img/clients/client-2.png" alt="">
                    <img src="front/img/clients/client-3.png" alt="">
                    <img src="front/img/clients/client-4.png" alt="">
                    <img src="front/img/clients/client-5.png" alt="">
                    <img src="front/img/clients/client-6.png" alt="">
                    <img src="front/img/clients/client-7.png" alt="">
                    <img src="front/img/clients/client-8.png" alt="">
                </div>

            </div>
        </section>&lt;!&ndash; #clients &ndash;&gt;-->


        <!--==========================
          Pricing Section
        ============================-->
<!--        <section id="pricing" class="wow fadeInUp section-bg">

            <div class="container">

                <header class="section-header">
                    <h3>Pricing</h3>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
                </header>

                <div class="row flex-items-xs-middle flex-items-xs-center">

                    &lt;!&ndash; Basic Plan  &ndash;&gt;
                    <div class="col-xs-12 col-lg-4">
                        <div class="card">
                            <div class="card-header">
                                <h3><span class="currency">$</span>19<span class="period">/month</span></h3>
                            </div>
                            <div class="card-block">
                                <h4 class="card-title">
                                    Basic Plan
                                </h4>
                                <ul class="list-group">
                                    <li class="list-group-item">Odio animi voluptates</li>
                                    <li class="list-group-item">Inventore quisquam et</li>
                                    <li class="list-group-item">Et perspiciatis suscipit</li>
                                    <li class="list-group-item">24/7 Support System</li>
                                </ul>
                                <a href="#" class="btn">Choose Plan</a>
                            </div>
                        </div>
                    </div>

                    &lt;!&ndash; Regular Plan  &ndash;&gt;
                    <div class="col-xs-12 col-lg-4">
                        <div class="card">
                            <div class="card-header">
                                <h3><span class="currency">$</span>29<span class="period">/month</span></h3>
                            </div>
                            <div class="card-block">
                                <h4 class="card-title">
                                    Regular Plan
                                </h4>
                                <ul class="list-group">
                                    <li class="list-group-item">Odio animi voluptates</li>
                                    <li class="list-group-item">Inventore quisquam et</li>
                                    <li class="list-group-item">Et perspiciatis suscipit</li>
                                    <li class="list-group-item">24/7 Support System</li>
                                </ul>
                                <a href="#" class="btn">Choose Plan</a>
                            </div>
                        </div>
                    </div>

                    &lt;!&ndash; Premium Plan  &ndash;&gt;
                    <div class="col-xs-12 col-lg-4">
                        <div class="card">
                            <div class="card-header">
                                <h3><span class="currency">$</span>39<span class="period">/month</span></h3>
                            </div>
                            <div class="card-block">
                                <h4 class="card-title">
                                    Premium Plan
                                </h4>
                                <ul class="list-group">
                                    <li class="list-group-item">Odio animi voluptates</li>
                                    <li class="list-group-item">Inventore quisquam et</li>
                                    <li class="list-group-item">Et perspiciatis suscipit</li>
                                    <li class="list-group-item">24/7 Support System</li>
                                </ul>
                                <a href="#" class="btn">Choose Plan</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </section>&lt;!&ndash; #pricing &ndash;&gt;-->

        <!--==========================
          Frequently Asked Questions Section
        ============================-->
<!--        <section id="faq">
            <div class="container">
                <header class="section-header">
                    <h3>Frequently Asked Questions</h3>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
                </header>

                <ul id="faq-list" class="wow fadeInUp">
                    <li>
                        <a data-toggle="collapse" class="collapsed" href="#faq1">Non consectetur a erat nam at lectus urna duis? <i
                                class="ion-android-remove"></i></a>
                        <div id="faq1" class="collapse" data-parent="#faq-list">
                            <p>
                                Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur
                                gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                            </p>
                        </div>
                    </li>

                    <li>
                        <a data-toggle="collapse" href="#faq2" class="collapsed">Feugiat scelerisque varius morbi enim nunc faucibus
                            a pellentesque? <i class="ion-android-remove"></i></a>
                        <div id="faq2" class="collapse" data-parent="#faq-list">
                            <p>
                                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id
                                donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit
                                ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                            </p>
                        </div>
                    </li>

                    <li>
                        <a data-toggle="collapse" href="#faq3" class="collapsed">Dolor sit amet consectetur adipiscing elit
                            pellentesque habitant morbi? <i class="ion-android-remove"></i></a>
                        <div id="faq3" class="collapse" data-parent="#faq-list">
                            <p>
                                Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum
                                integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt.
                                Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                            </p>
                        </div>
                    </li>

                    <li>
                        <a data-toggle="collapse" href="#faq4" class="collapsed">Ac odio tempor orci dapibus. Aliquam eleifend mi in
                            nulla? <i class="ion-android-remove"></i></a>
                        <div id="faq4" class="collapse" data-parent="#faq-list">
                            <p>
                                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id
                                donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit
                                ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                            </p>
                        </div>
                    </li>

                    <li>
                        <a data-toggle="collapse" href="#faq5" class="collapsed">Tempus quam pellentesque nec nam aliquam sem et
                            tortor consequat? <i class="ion-android-remove"></i></a>
                        <div id="faq5" class="collapse" data-parent="#faq-list">
                            <p>
                                Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc
                                vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus
                                gravida quis blandit turpis cursus in
                            </p>
                        </div>
                    </li>

                    <li>
                        <a data-toggle="collapse" href="#faq6" class="collapsed">Tortor vitae purus faucibus ornare. Varius vel
                            pharetra vel turpis nunc eget lorem dolor? <i class="ion-android-remove"></i></a>
                        <div id="faq6" class="collapse" data-parent="#faq-list">
                            <p>
                                Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada
                                nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis
                                tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas
                                fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
                            </p>
                        </div>
                    </li>

                </ul>

            </div>
        </section>&lt;!&ndash; #faq &ndash;&gt;-->

    </main>
@endsection
