@include('front.layout.header')
<div class="stricky-header stricked-menu main-menu">
    <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
</div><!-- /.stricky-header -->
<section class="page-header">
    <div class="page-header__bg"
        style="background-image: url({{ asset('fronttheme/assets/images/backgrounds/page-header-bg-1-1.jpg') }});"></div>
    <!-- /.page-header__bg -->
    <div class="container">
        <ul class="thm-breadcrumb list-unstyled">
            <li><a href="index.html">Home</a></li>
            <li>/</li>
            <li><span>About</span></li>
        </ul><!-- /.thm-breadcrumb list-unstyled -->
        <h2>About Us</h2>
    </div><!-- /.container -->
</section><!-- /.page-header -->

<section class="service-one service-one__about">
    <div class="container">
        <div class="row">
            @foreach ($category as $item)
                <div class="col-md-12 col-lg-4 wow fadeInUp" data-wow-duration="1500ms">
                    <div class="service-one__box" style="margin-bottom:60px;">
                        <img src="{{ asset('uploads/' . $item->categoriesimage) }}" alt="">
                        <div class="service-one__box-content">
                            <h3><a href="{{ url('products/' . $item->id) }}">{{ $item->categoriesname }}</a></h3>
                        </div><!-- /.service-one__box-content -->
                    </div><!-- /.service-one__box -->
                </div>
            @endforeach
            {{-- <div class="col-md-12 col-lg-4">
                <div class="service-one__box">
                    <img src="{{ asset('fronttheme/assets/images/services/service-1-1.jpg') }}" alt="">
                    <div class="service-one__box-content">
                        <h3><a href="service-details.html">Agriculture Leader</a></h3>
                    </div><!-- /.service-one__box-content -->
                </div><!-- /.service-one__box -->
            </div><!-- /.col-md-12 col-lg-4 -->
            <div class="col-md-12 col-lg-4">
                <div class="service-one__box">
                    <img src="{{ asset('fronttheme/assets/images/services/service-1-2.jpg') }}" alt="">
                    <div class="service-one__box-content">
                        <h3><a href="service-details.html">Quality Standards</a></h3>
                    </div><!-- /.service-one__box-content -->
                </div><!-- /.service-one__box -->
            </div><!-- /.col-md-12 col-lg-4 -->
            <div class="col-md-12 col-lg-4">
                <div class="service-one__box">
                    <img src="{{ asset('fronttheme/assets/images/services/service-1-3.jpg') }}" alt="">
                    <div class="service-one__box-content">
                        <h3><a href="service-details.html">Organic Services</a></h3>
                    </div><!-- /.service-one__box-content -->
                </div><!-- /.service-one__box -->
            </div><!-- /.col-md-12 col-lg-4 --> --}}
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.service-one -->

{{-- <div class="client-carousel client-carousel__has-border-top client-carousel__about-page">
    <div class="container">
        <div class="thm-swiper__slider swiper-container"
            data-swiper-options='{"spaceBetween": 140, "slidesPerView": 5, "autoplay": { "delay": 5000 }, "breakpoints": {
                "0": {
                    "spaceBetween": 30,
                    "slidesPerView": 2
                },
                "375": {
                    "spaceBetween": 30,
                    "slidesPerView": 2
                },
                "575": {
                    "spaceBetween": 30,
                    "slidesPerView": 3
                },
                "767": {
                    "spaceBetween": 50,
                    "slidesPerView": 4
                },
                "991": {
                    "spaceBetween": 50,
                    "slidesPerView": 5
                },
                "1199": {
                    "spaceBetween": 100,
                    "slidesPerView": 5
                }
            }}'>
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="{{ asset('fronttheme/assets/images/resources/brand-1-1.png') }}" alt="">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="{{ asset('fronttheme/assets/images/resources/brand-1-1.png') }}" alt="">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="{{ asset('fronttheme/assets/images/resources/brand-1-1.png') }}" alt="">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="{{ asset('fronttheme/assets/images/resources/brand-1-1.png') }}" alt="">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="{{ asset('fronttheme/assets/images/resources/brand-1-1.png') }}" alt="">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="{{ asset('fronttheme/assets/images/resources/brand-1-1.png') }}" alt="">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="{{ asset('fronttheme/assets/images/resources/brand-1-1.png') }}" alt="">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="{{ asset('fronttheme/assets/images/resources/brand-1-1.png') }}" alt="">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="{{ asset('fronttheme/assets/images/resources/brand-1-1.png') }}" alt="">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="{{ asset('fronttheme/assets/images/resources/brand-1-1.png') }}" alt="">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="{{ asset('fronttheme/assets/images/resources/brand-1-1.png') }}" alt="">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="{{ asset('fronttheme/assets/images/resources/brand-1-1.png') }}" alt="">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="{{ asset('fronttheme/assets/images/resources/brand-1-1.png') }}" alt="">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="{{ asset('fronttheme/assets/images/resources/brand-1-1.png') }}" alt="">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="{{ asset('fronttheme/assets/images/resources/brand-1-1.png') }}" alt="">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="{{ asset('fronttheme/assets/images/resources/brand-1-1.png') }}" alt="">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="{{ asset('fronttheme/assets/images/resources/brand-1-1.png') }}" alt="">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="{{ asset('fronttheme/assets/images/resources/brand-1-1.png') }}" alt="">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="{{ asset('fronttheme/assets/images/resources/brand-1-1.png') }}" alt="">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="{{ asset('fronttheme/assets/images/resources/brand-1-1.png') }}" alt="">
                </div><!-- /.swiper-slide -->
            </div><!-- /.swiper-wrapper -->
        </div><!-- /.thm-swiper__slider -->
    </div><!-- /.container -->
</div><!-- /.client-carousel --> --}}

{{-- <section class="team-one">
    <img src="{{ asset('fronttheme/assets/images/icons/team-bg-1-1.png') }}" alt="" class="team-one__bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-xl-5">
                <div class="team-one__content">
                    <div class="block-title">
                        <div class="block-title__image"></div><!-- /.block-title__image -->
                        <p>meet the team</p>
                        <h3>Expert Farmers</h3>
                    </div><!-- /.block-title -->
                    <div class="team-one__summery">
                        <p>Lorem ipsum is simply free text available. Aenean eu leo quam. Pellentesque ornare sem
                            lacinia quam venenatis vestibulum. Aenean lacinia bibendum.</p>
                    </div><!-- /.team-one__summery -->

                    <!-- If we need navigation buttons -->
                    <div class="team-one__nav">
                        <div class="swiper-button-prev" id="team-one__swiper-button-next"><i
                                class="agrikon-icon-left-arrow"></i>
                        </div>
                        <div class="swiper-button-next" id="team-one__swiper-button-prev"><i
                                class="agrikon-icon-right-arrow"></i></div>
                    </div><!-- /.team-one__nav -->

                </div><!-- /.team-one__content -->
            </div><!-- /.col-md-12 col-lg-5 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
    <div class="team-one__carousel-wrap">
        <div class="thm-swiper__slider swiper-container"
            data-swiper-options='{"spaceBetween": 0, "slidesPerView": 1, "slidesPerGroup": 1, "autoplay": { "delay": 5000 }, "navigation": {
            "nextEl": "#team-one__swiper-button-next",
            "prevEl": "#team-one__swiper-button-prev"
        },"breakpoints": {
            "0": {
                "spaceBetween": 0,
                "slidesPerView": 1,
                "slidesPerGroup": 1
            },
            "640": {
                "spaceBetween": 30,
                "slidesPerView": 2,
                "slidesPerGroup": 2
            },
            "992": {
                "spaceBetween": 30,
                "slidesPerView": 3,
                "slidesPerGroup": 3
            },
            "1200": {
                "spaceBetween": 30,
                "slidesPerView": 3,
                "slidesPerGroup": 3
            }
        }}'>

            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="team-card">
                        <div class="team-card__image">
                            <img src="{{ asset('fronttheme/assets/images/team/team-1-1.jpg') }}" alt="Jessica Brown">
                            <div class="team-card__social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div><!-- /.team-card__social -->
                        </div><!-- /.team-card__image -->
                        <h3>Jessica Brown</h3>
                        <p>Farmer</p>
                    </div><!-- /.team-card -->
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <div class="team-card">
                        <div class="team-card__image">
                            <img src="{{ asset('fronttheme/assets/images/team/team-1-2.jpg') }}" alt="Jessica Brown">
                            <div class="team-card__social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div><!-- /.team-card__social -->
                        </div><!-- /.team-card__image -->
                        <h3>Jessica Brown</h3>
                        <p>Farmer</p>
                    </div><!-- /.team-card -->
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <div class="team-card">
                        <div class="team-card__image">
                            <img src="{{ asset('fronttheme/assets/images/team/team-1-3.jpg') }}" alt="Jessica Brown">
                            <div class="team-card__social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div><!-- /.team-card__social -->
                        </div><!-- /.team-card__image -->
                        <h3>Jessica Brown</h3>
                        <p>Farmer</p>
                    </div><!-- /.team-card -->
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <div class="team-card">
                        <div class="team-card__image">
                            <img src="{{ asset('fronttheme/assets/images/team/team-1-1.jpg') }}" alt="Jessica Brown">
                            <div class="team-card__social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div><!-- /.team-card__social -->
                        </div><!-- /.team-card__image -->
                        <h3>Jessica Brown</h3>
                        <p>Farmer</p>
                    </div><!-- /.team-card -->
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <div class="team-card">
                        <div class="team-card__image">
                            <img src="{{ asset('fronttheme/assets/images/team/team-1-2.jpg') }}" alt="Jessica Brown">
                            <div class="team-card__social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div><!-- /.team-card__social -->
                        </div><!-- /.team-card__image -->
                        <h3>Jessica Brown</h3>
                        <p>Farmer</p>
                    </div><!-- /.team-card -->
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <div class="team-card">
                        <div class="team-card__image">
                            <img src="{{ asset('fronttheme/assets/images/team/team-1-3.jpg') }}" alt="Jessica Brown">
                            <div class="team-card__social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div><!-- /.team-card__social -->
                        </div><!-- /.team-card__image -->
                        <h3>Jessica Brown</h3>
                        <p>Farmer</p>
                    </div><!-- /.team-card -->
                </div><!-- /.swiper-slide -->
            </div><!-- /.swiper-wrapper -->

        </div><!-- /.thm-swiper__slider -->
    </div><!-- /.team-one__carousel-wrap -->
</section><!-- /.team-one --> --}}

<section class="testimonials-one testimonials-one__about">
    <img src="{{ asset('fronttheme/assets/images/icons/testimonials-bg-1-1.png') }}" class="testimonials-one__bg"
        alt="">
    <div class="container">
        <h2 class="testimonials-one__title">Our Vision</h2>
        <div id="testimonials-one__carousel" class="testimonials-one__carousel swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="testimonials-one__icons">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div><!-- /.testimonials-one__icons -->
                    <p>GKFC is also working on development of new value-added products and comprehensive Soil Research
                        that includes Soil health analysis, repair & maintenance, study & development of Plant Nutrients
                        and other emergent methodologies as the key focus areas.
                    </p>
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <div class="testimonials-one__icons">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div><!-- /.testimonials-one__icons -->
                    <p>Quality will be our guiding principle in all aspects of our business. As a result, the basic
                        concepts of quality management and problem solving as well as continuous improvement through
                        creative innovation shall contribute to higher product quality and work quality at all levels.
                    </p>
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <div class="testimonials-one__icons">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div><!-- /.testimonials-one__icons -->
                    <p>We are committed to continual improvement in all processes, systems and skills and maintain
                        integrity of purpose.</p>
                </div><!-- /.swiper-slide -->
            </div><!-- /.swiper-wrapper -->
        </div><!-- /#testimonials-one__carousel -->

        <div id="testimonials-one__thumb" class="swiper-container">
        </div>

        <div id="testimonials-one__meta" class="testimonials-one__carousel swiper-container">
        </div><!-- /#testimonials-one__meta.swiper-container -->
        <div class="swiper-pagination" id="testimonials-one__swiper-pagination"></div>
    </div><!-- /.container -->
</section>
< {{-- <section class="testimonials-one testimonials-one__about">
    <img src="{{ asset('fronttheme/assets/images/icons/testimonials-bg-1-1.png') }}" class="testimonials-one__bg"
        alt="">
    <div class="container">
        <h2 class="testimonials-one__title">Testimonials</h2>
        <div id="testimonials-one__carousel" class="testimonials-one__carousel swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="testimonials-one__icons">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div><!-- /.testimonials-one__icons -->
                    <p>This is due to their excellent service, competitive pricing and customer support. It’s throughly
                        refresing to get such a personal touch. Duis aute lorem ipsum is simply free text irure dolor in
                        reprehenderit in esse nulla pariatur.</p>
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <div class="testimonials-one__icons">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div><!-- /.testimonials-one__icons -->
                    <p>This is due to their excellent service, competitive pricing and customer support. It’s throughly
                        refresing to get such a personal touch. Duis aute lorem ipsum is simply free text irure dolor in
                        reprehenderit in esse nulla pariatur.</p>
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <div class="testimonials-one__icons">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div><!-- /.testimonials-one__icons -->
                    <p>This is due to their excellent service, competitive pricing and customer support. It’s throughly
                        refresing to get such a personal touch. Duis aute lorem ipsum is simply free text irure dolor in
                        reprehenderit in esse nulla pariatur.</p>
                </div><!-- /.swiper-slide -->
            </div><!-- /.swiper-wrapper -->
        </div><!-- /#testimonials-one__carousel -->

        <div id="testimonials-one__thumb" class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="testimonials-one__image">
                        <img src="{{ asset('fronttheme/assets/images/resources/testimonials-1-1.jpg') }}"
                            alt="">
                    </div><!-- /.testimonials-one__image -->
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <div class="testimonials-one__image">
                        <img src="{{ asset('fronttheme/assets/images/resources/testimonials-1-2.jpg') }}"
                            alt="">
                    </div><!-- /.testimonials-one__image -->
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <div class="testimonials-one__image">
                        <img src="{{ asset('fronttheme/assets/images/resources/testimonials-1-3.jpg') }}"
                            alt="">
                    </div><!-- /.testimonials-one__image -->
                </div><!-- /.swiper-slide -->
            </div><!-- /.swiper-wrapper -->
        </div><!-- /#testimonials-one__thumb.swiper-container -->

        <div id="testimonials-one__meta" class="testimonials-one__carousel swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="testimonials-one__meta">
                        <h4>Jessica Brown</h4>
                        <span>Customer</span>
                    </div><!-- /.testimonials-one__meta -->
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <div class="testimonials-one__meta">
                        <h4>Caleb Hoffman</h4>
                        <span>Customer</span>
                    </div><!-- /.testimonials-one__meta -->
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <div class="testimonials-one__meta">
                        <h4>Bradley Kim</h4>
                        <span>Customer</span>
                    </div><!-- /.testimonials-one__meta -->
                </div><!-- /.swiper-slide -->
            </div><!-- /.swiper-wrapper -->
        </div><!-- /#testimonials-one__meta.swiper-container -->
        <div class="swiper-pagination" id="testimonials-one__swiper-pagination"></div>
    </div><!-- /.container -->
</section><!-- /.testimonials-one --> --}} <section class="about-three">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-three__image">
                    <img src="{{ asset('fronttheme/assets/images/resources/about-3-2.jpg') }}" alt="">
                </div><!-- /.about-three__image -->
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-6">
                <div class="about-three__content">
                    <div class="block-title">
                        <div class="block-title__image"></div><!-- /.block-title__image -->
                        <p>Who We Are</p>
                        <h3>Gangaputr Krishak Fertilizer Company </h3>
                    </div><!-- /.block-title -->
                    <div class="about-three__summery">
                        <p>Gangaputra Krishak Fertilizer Company has been serving the farming community for over two
                            decades. An impressive track record takes forward its strategy to head the leading position
                            in the organic manures and others fertilizers inputs. This strategy has been further
                            supported with improved and speciality organic, bio, and chemical fertilizers. The growth of
                            GKFC in the inputs business in a span of just 1 year has itself created a story to talk
                            about within fertilizers industry approximately 20 % per year. </p>
                    </div><!-- /.about-three__summery -->
                    {{-- <div class="about-three__signs">
                        <img src="{{ asset('fronttheme/assets/images/resources/about-3-1.png') }}" alt="">
                        <img src="{{ asset('fronttheme/assets/images/resources/sign-1-1.png') }}" alt="">
                    </div><!-- /.about-three__signs --> --}}
                </div><!-- /.about-three__content -->
            </div><!-- /.col-lg-6 -->
            <div class="col-md-12 about-three__summery">
                <h3>About Company</h3>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Gangaputra Krishak Fertilizer Company believes that 'the growth of India
                is directly related to the
                growth of the rural areas'. Farmers being the central focus of rural India, and farming being the main
                profession. It becomes necessary to give them a helping hand by providing them with top-of-the-line
                agricultural inputs and services.
                <br><br>
                <h3>So Our Slogan is "Bheeshma ka vada Har fasal jyada.</h3>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; GKFC introduce it self with the brand name of “BHEESHMA”.
                With this as a core initiative, Gangaputra Krishak Fertilizer Company has been serving the farming
                community for over one & half decades. An impressive track record takes forward its strategy to head the
                leading position in the organic manures and other fertilizers inputs. This strategy has been further
                supported with improved and speciality organic and chemical fertilizers.
                <br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Now, Gangaputra Krishak Fertilizer Company is firmly positioned to
                address the emerging local and
                national challenges. We help in providing the farmers not just customized Products but customized
                solutions, developing and evaluating Products and processes for improving their satisfaction.
                <br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Our extensive high-quality product range that includes organic manure,
                chemical fertilizers,
                micronutrients, soil conditioners, water soluble Products, further supports this goal. We offer amongst
                the best list of farm nutrients and associated Products in India.
                <br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; We have now ventured to extend our vision in serving the farming
                community by introducing a toll free
                number, printed on each bags/containers. Through that contact number three things can be checked -
                quality, reliability, and services that ensure a healthy crop produce to farmers.
                <br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; GKFC offers a healthy working environment that cultivates speed, teamwork
                and growing partnerships. We
                have a diverse group of talented people who discover, develop, manufacture and market farm inputs. A
                unique distributor network helps in serving this purpose effectively.
                <br>
                <h3>Our Vision</h3>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; GKFC is also working on development of new value-added products and
                comprehensive Soil Research that
                includes Soil health analysis, repair & maintenance, study & development of Plant Nutrients and other
                emergent methodologies as the key focus areas.
                <br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Quality will be our guiding principle in all aspects of our business. As
                a result, the basic concepts of
                quality management and problem solving as well as continuous improvement through creative innovation
                shall contribute to higher product quality and work quality at all levels.
                <br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; We are committed to continual improvement in all processes, systems and
                skills and maintain integrity of
                purpose.
                <br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; We shall abide by Statutory, Legal, Environmental and other applicable
                Regulations while carrying out
                activities.
                <br><br>
                <h3>Our Quality Policy</h3>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; We shall endeavour to achieve total Customer Satisfaction by exceeding
                Customer's expectations through
                Superior Products, Service and Innovations in the field of Agricultural inputs. We are committed to
                bring excellence in service standards with introduction of innovative Products in farm nutrient
                management. Moreover, “QUALITY and ZERO DEFECT” shall be our core commitment.
                <br>
                <ul>
                    <li>Our domestic business has an extensive network, which strengthens our market penetration.</li>
                    <li>We have various distributers across 10 states of the nation marking our ever growing market
                        presence.</li>
                    <li>Our dealers are considered to be agents of change and significant effort is devoted in
                        recruiting
                        them. Through our dealers, we seek to establish a ‘single window’ concept where GKFC dealers
                        serve as a
                        one-stop shop for all agricultural inputs.</li>
                    <li>As a market leader, we ensure availability of products and services within close proximity to
                        our
                        customer.Through our wide spread distribution</li>
                </ul>
                {{-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;•
                <br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;•
                <br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;•
                <br>
                •  --}}
            </div>
        </div><!-- /.row -->
    </div><!-- /.container -->
    </section><!-- /.about-three -->


    <section class="call-to-action jarallax" data-jarallax data-speed="0.3" data-imgPosition="-80% 50%">
        <img class="call-to-action__bg jarallax-img"
            src="{{ asset('fronttheme/assets/images/backgrounds/cta-1-bg-1.jpg') }}" alt="parallax-image" />
        <!-- /.call-to-action__bg -->
        <div class="container">
            <div class="call-to-action__content">
                <i class="call-to-action__icon agrikon-icon-agriculture-2"></i>
                <h3>We’re popular leader in agriculture
                    market globally</h3>
            </div><!-- /.call-to-action__content -->
            <div class="call-to-action__button">
                <a href="{{ route('products') }}" class="thm-btn">Discover More</a><!-- /.thm-btn -->
            </div><!-- /.call-to-action__button -->
        </div><!-- /.container -->
    </section><!-- /.call-to-action -->
    @include('front.layout.footer')
