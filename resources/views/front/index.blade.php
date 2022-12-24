@include('front.layout.header')
<div class="stricky-header stricked-menu main-menu">
    <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
</div><!-- /.stricky-header -->

<section class="main-slider">
    <div class="swiper-container thm-swiper__slider"
        data-swiper-options='{
        "slidesPerView": 1,
        "loop": true,
        "effect": "fade",
        "autoplay": {
            "delay": 5000
        },
        "navigation": {
            "nextEl": "#main-slider__swiper-button-next",
            "prevEl": "#main-slider__swiper-button-prev"
        }
    }'>
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="image-layer"
                    style="background-image: url({{ asset('fronttheme/assets/images/main-slider/main-slider-1-1.jpg') }});">
                </div>
                <!-- /.image-layer -->
                <div class="container">
                    <div class="row">
                        <div class="col-xl-7 col-lg-7">
                            <span class="tagline">Welcome to Agriculture Farm</span>
                            <h2><span>Agriculture</span> <br>
                                & Eco Farming</h2>
                            <p>There are many of passages of lorem Ipsum, but the majori have <br> suffered alteration
                                in some form.</p>
                            <a href="{{ route('about') }}" class=" thm-btn">Discover More</a>
                            <!-- /.thm-btn dynamic-radius -->
                        </div><!-- /.col-lg-7 text-right -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.swiper-slide -->
            <div class="swiper-slide">
                <div class="image-layer"
                    style="background-image: url({{ asset('fronttheme/assets/images/main-slider/main-slider-1-2.jpg') }});">
                </div>
                <!-- /.image-layer -->
                <div class="container">
                    <div class="row">
                        <div class="col-xl-7 col-lg-7">
                            <span class="tagline">Welcome to Agriculture Farm</span>
                            <h2><span>Agriculture</span><br>
                                & Eco Farming</h2>
                            <p>There are many of passages of lorem Ipsum, but the majori have <br> suffered alteration
                                in some form.</p>
                            <a href="{{ route('about') }}" class=" thm-btn">Discover More</a>
                            <!-- /.thm-btn dynamic-radius -->
                        </div><!-- /.col-lg-7 text-right -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.swiper-slide -->
        </div><!-- /.swiper-wrapper -->

        <!-- If we need navigation buttons -->
        <div class="main-slider__nav">
            <div class="swiper-button-prev" id="main-slider__swiper-button-next"><i class="agrikon-icon-left-arrow"></i>
            </div>
            <div class="swiper-button-next" id="main-slider__swiper-button-prev"><i
                    class="agrikon-icon-right-arrow"></i></div>
        </div><!-- /.main-slider__nav -->

    </div><!-- /.swiper-container thm-swiper__slider -->
</section><!-- /.main-slider -->

<section class="service-one">
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
            {{-- <div class="col-md-12 col-lg-4 wow fadeInUp" data-wow-duration="1500ms">
                <div class="service-one__box">
                    <img src="{{ asset('fronttheme/assets/images/services/service-1-1.jpg') }}" alt="">
                    <div class="service-one__box-content">
                        <h3><a href="service-details.html">Agriculture Leader</a></h3>
                    </div><!-- /.service-one__box-content -->
                </div><!-- /.service-one__box -->
            </div>
            <div class="col-md-12 col-lg-4 wow fadeInUp" data-wow-duration="1500ms">
                <div class="service-one__box">
                    <img src="{{ asset('fronttheme/assets/images/services/service-1-2.jpg') }}" alt="">
                    <div class="service-one__box-content">
                        <h3><a href="service-details.html">Quality Standards</a></h3>
                    </div><!-- /.service-one__box-content -->
                </div><!-- /.service-one__box -->
            </div>
            <div class="col-md-12 col-lg-4 wow fadeInUp" data-wow-duration="1500ms">
                <div class="service-one__box">
                    <img src="{{ asset('fronttheme/assets/images/services/service-1-3.jpg') }}" alt="">
                    <div class="service-one__box-content">
                        <h3><a href="service-details.html">Organic Services</a></h3>
                    </div><!-- /.service-one__box-content -->
                </div><!-- /.service-one__box -->
            </div> --}}
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.service-one -->

<section class="about-one">
    <img src="{{ asset('fronttheme/assets/images/icons/about-bg-icon-1-1.png') }}" class="about-one__bg-shape-1"
        alt="">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="about-one__images">
                    <img src="{{ asset('fronttheme/assets/images/resources/about-1-1.jpg') }}" alt="">
                    <img src="{{ asset('fronttheme/assets/images/resources/about-1-2.jpg') }}" alt="">
                    <div class="about-one__count wow fadeInLeft" data-wow-duration="1500ms">
                        <span>Trusted by</span>
                        <h4>8900</h4>
                    </div><!-- /.about-one__count -->
                </div><!-- /.about-one__images -->
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-7">
                <div class="about-one__content">
                    <div class="block-title text-left">
                        <div class="block-title__image"></div><!-- /.block-title__image -->
                        <p>Welcome to Gangaputr Krishak Fertilizer Company </p>
                        <p class="text-center">(GKFC)</p>
                        <h3>Better Fertilizer for
                            Better Farming</h3>
                    </div><!-- /.block-title -->
                    <div class="about-one__tagline">
                        <p>Gangaputra Krishak Fertilizer Company has been serving the farming community for over two
                            decades.</p>
                    </div><!-- /.about-one__tagline -->
                    <div class="about-one__summery">
                        <p>An impressive track record takes forward its strategy to head the leading position in the
                            organic manures and others fertilizers inputs. This strategy has been further supported with
                            improved and speciality organic, bio, and chemical fertilizers. The growth of GKFC in the
                            inputs business in a span of just 1 year has itself created a story to talk about within
                            fertilizers industry approximately 20 % per year.</p>
                    </div><!-- /.about-one__summery -->
                    <div class="about-one__icon-row">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="about-one__box">
                                    <i class="agrikon-icon-farmer"></i>
                                    <h4><a href="#">Professional
                                            Farmers</a></h4>
                                </div><!-- /.about-one__box -->
                            </div><!-- /.col-lg-6 -->
                            <div class="col-lg-6">
                                <div class="about-one__box">
                                    <i class="agrikon-icon-agriculture"></i>
                                    <h4><a href="#">Organic & Eco
                                            Solutions</a></h4>
                                </div><!-- /.about-one__box -->
                            </div><!-- /.col-lg-6 -->
                        </div><!-- /.row -->
                    </div><!-- /.about-one__icon-row -->
                    <a href="{{ route('about') }}" class="thm-btn">Discover More</a><!-- /.thm-btn -->
                </div><!-- /.about-one__content -->
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.about-one -->

<section class="service-two">
    <div class="service-two__bottom-curv"></div><!-- /.service-two__bottom-curv -->
    <div class="container">
        <div class="block-title text-center">
            <div class="block-title__image"></div><!-- /.block-title__image -->
            <p>Our Services list</p>
            <h3>What We’re Offering</h3>
        </div><!-- /.block-title -->
        <div class="row">
            @foreach ($product as $item)
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="service-two__card">
                        <div class="service-two__card-image">
                            <img src="{{ asset('uploads/' . $item->productimage) }}" alt="">
                        </div><!-- /.service-two__card-image -->
                        <div class="service-two__card-content">
                            <div class="service-two__card-icon">
                                <i class="agrikon-icon-tractor"></i>
                            </div><!-- /.service-two__card-icon -->
                            <h3><a href="{{ url('productdetail/' . $item->id) }}">{{ $item->name }}</a></h3>
                            {{-- <p>Lorem ium dolor sit ametad pisicing elit sed simply do ut.</p> --}}
                        </div><!-- /.service-two__card-content -->
                    </div><!-- /.service-two__card -->
                </div>
            @endforeach
            {{-- <div class="col-sm-12 col-md-6 col-lg-3">
                <div class="service-two__card">
                    <div class="service-two__card-image">
                        <img src="{{ asset('fronttheme/assets/images/services/service-2-1.jpg') }}" alt="">
                    </div><!-- /.service-two__card-image -->
                    <div class="service-two__card-content">
                        <div class="service-two__card-icon">
                            <i class="agrikon-icon-tractor"></i>
                        </div><!-- /.service-two__card-icon -->
                        <h3><a href="service-details.html">Agriculture Products</a></h3>
                        <p>Lorem ium dolor sit ametad pisicing elit sed simply do ut.</p>
                    </div><!-- /.service-two__card-content -->
                </div><!-- /.service-two__card -->
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3">
                <div class="service-two__card">
                    <div class="service-two__card-image">
                        <img src="{{ asset('fronttheme/assets/images/services/service-2-2.jpg') }}" alt="">
                    </div><!-- /.service-two__card-image -->
                    <div class="service-two__card-content">
                        <div class="service-two__card-icon">
                            <i class="agrikon-icon-organic-food"></i>
                        </div><!-- /.service-two__card-icon -->
                        <h3><a href="service-details.html">Oragnic
                                Products</a></h3>
                        <p>Lorem ium dolor sit ametad pisicing elit sed simply do ut.</p>
                    </div><!-- /.service-two__card-content -->
                </div><!-- /.service-two__card -->
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3">
                <div class="service-two__card">
                    <div class="service-two__card-image">
                        <img src="{{ asset('fronttheme/assets/images/services/service-2-3.jpg') }}" alt="">
                    </div><!-- /.service-two__card-image -->
                    <div class="service-two__card-content">
                        <div class="service-two__card-icon">
                            <i class="agrikon-icon-vegetable"></i>
                        </div><!-- /.service-two__card-icon -->
                        <h3><a href="service-details.html">Fresh
                                Vegetables</a></h3>
                        <p>Lorem ium dolor sit ametad pisicing elit sed simply do ut.</p>
                    </div><!-- /.service-two__card-content -->
                </div><!-- /.service-two__card -->
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3">
                <div class="service-two__card">
                    <div class="service-two__card-image">
                        <img src="{{ asset('fronttheme/assets/images/services/service-2-4.jpg') }}" alt="">
                    </div><!-- /.service-two__card-image -->
                    <div class="service-two__card-content">
                        <div class="service-two__card-icon">
                            <i class="agrikon-icon-dairy"></i>
                        </div><!-- /.service-two__card-icon -->
                        <h3><a href="service-details.html">Dairy
                                Products</a></h3>
                        <p>Lorem ium dolor sit ametad pisicing elit sed simply do ut.</p>
                    </div><!-- /.service-two__card-content -->
                </div><!-- /.service-two__card -->
            </div> --}}
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.service-two -->

<div class="projects-one project-one__home-one">
    <div class="container">
        <div class="block-title text-center">
            <div class="block-title__image"></div><!-- /.block-title__image -->
            <p>Our Path</p>
            <h3>Our Walk Way</h3>
        </div><!-- /.block-title -->
        <div class="thm-swiper__slider swiper-container"
            data-swiper-options='{"spaceBetween": 0, "slidesPerView": 1, "loop": true, "slidesPerGroup": 1, "pagination": {
            "el": "#projects-one__swiper-pagination",
            "type": "bullets",
            "clickable": true
        },
        "breakpoints": {
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
                "slidesPerView": 2,
                "slidesPerGroup": 2
            }
        }}'>
            <div class="swiper-wrapper">
                @foreach ($gallary as $item)
                    <div class="swiper-slide">
                        <div class="projects-one__single">
                            <img src="{{ asset('uploads/' . $item->gallaryimage) }}" alt="">
                            <div class="projects-one__content">
                                <h3>{{ $item->gallaryname }}</h3>
                                <a href="{{ url('gallarydetail/' . $item->id) }}" class="projects-one__button"><i
                                        class="agrikon-icon-right-arrow"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div><!-- /.swiper-wrapper -->
            <div class="swiper-pagination" id="projects-one__swiper-pagination"></div>
        </div><!-- /.swiper-container -->
    </div><!-- /.container -->
</div><!-- /.projects-one -->

<section class="call-to-action__three jarallax" data-jarallax data-speed="0.3" data-imgPosition="50% 50%">
    <img class="call-to-action__three__bg jarallax-img"
        src="{{ asset('fronttheme/assets/images/backgrounds/cta-1-bg-1.jpg') }}" alt="parallax-image" />
    <div class="container">
        <div class="row">
            <div class="col-lg-5 wow fadeInLeft" data-wow-duration="1500ms">
                <div class="call-to-action__three-image">
                    <img src="{{ asset('fronttheme/assets/images/resources/cta-3-1.jpg') }}" alt="">
                    <img src="{{ asset('fronttheme/assets/images/resources/cta-3-2.jpg') }}" alt="">
                </div><!-- /.call-to-action__three-image -->
            </div><!-- /.col-lg-5 -->
            <div class="col-lg-7">
                <div class="call-to-action__three-content">
                    <h3>Providing High Quality
                        Products</h3>
                    <a href="{{ route('products') }}" class="thm-btn">Discover More</a><!-- /.thm-btn -->
                </div><!-- /.call-to-action__three-content -->
            </div><!-- /.col-lg-7 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.call-to-action__three -->

<section class="testimonials-one">
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
            {{-- <div class="swiper-wrapper">
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
            </div><!-- /.swiper-wrapper --> --}}
        </div><!-- /#testimonials-one__thumb.swiper-container -->

        <div id="testimonials-one__meta" class="testimonials-one__carousel swiper-container">
            {{-- <div class="swiper-wrapper">
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
            </div><!-- /.swiper-wrapper --> --}}
        </div><!-- /#testimonials-one__meta.swiper-container -->
        <div class="swiper-pagination" id="testimonials-one__swiper-pagination"></div>
    </div><!-- /.container -->
</section><!-- /.testimonials-one -->

{{-- <section class="gray-boxed-wrapper home-one__boxed">
    <img src="{{ asset('fronttheme/assets/images/icons/home-1-blog-bg.png') }}" alt=""
        class="home-one__boxed-bg">
    <section class="blog-home-two blog-home-one">
        <div class="container">
            <div class="row top-row">
                <div class="col-lg-6">
                    <div class="block-title">
                        <div class="block-title__image"></div><!-- /.block-title__image -->
                        <p>From the blog post</p>
                        <h3>Latest News & Articles
                            Directly from Blog</h3>
                    </div><!-- /.block-title -->
                </div><!-- /.col-lg-6 -->
                <div class="col-lg-6">
                    <p class="block-text">Lorem ipsum is simply free text available. Aenean eu leo quam. Pellentesque
                        ornare
                        sem lacinia
                        quam venenatis vestibulum. Aenean lacinia bibendum nulla sed consectetur.</p>
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
            <div class="row">
                <div class="col-md-12 col-lg-4">
                    <div class="blog-card">
                        <div class="blog-card__image">
                            <img src="{{ asset('fronttheme/assets/images/blog/blog-grid-1.jpg') }}"
                                alt="Best Way to Do Eco and Agriculture">
                            <a href="blog-details.html"></a>
                        </div><!-- /.blog-card__image -->
                        <div class="blog-card__content">
                            <div class="blog-card__date">18 Nov</div><!-- /.blog-card__date -->
                            <div class="blog-card__meta">
                                <a href="blog-details.html"><i class="far fa-user-circle"></i> by Admin</a>
                                <a href="blog-details.html"><i class="far fa-comments"></i> 2 Comments</a>
                            </div><!-- /.blog-card__meta -->
                            <h3><a href="blog-details.html">Best Way to Do Eco and Agriculture</a></h3>
                            <a href="blog-details.html" class="thm-btn">Read More</a><!-- /.thm-btn -->
                        </div><!-- /.blog-card__content -->
                    </div><!-- /.blog-card -->
                </div><!-- /.col-md-12 col-lg-4 -->
                <div class="col-md-12 col-lg-4">
                    <div class="blog-card">
                        <div class="blog-card__image">
                            <img src="{{ asset('fronttheme/assets/images/blog/blog-grid-2.jpg') }}"
                                alt="Leverage agile frameworks to provide">
                            <a href="blog-details.html"></a>
                        </div><!-- /.blog-card__image -->
                        <div class="blog-card__content">
                            <div class="blog-card__date">18 Nov</div><!-- /.blog-card__date -->
                            <div class="blog-card__meta">
                                <a href="blog-details.html"><i class="far fa-user-circle"></i> by Admin</a>
                                <a href="blog-details.html"><i class="far fa-comments"></i> 2 Comments</a>
                            </div><!-- /.blog-card__meta -->
                            <h3><a href="blog-details.html">Leverage agile frameworks to provide</a></h3>
                            <a href="blog-details.html" class="thm-btn">Read More</a><!-- /.thm-btn -->
                        </div><!-- /.blog-card__content -->
                    </div><!-- /.blog-card -->
                </div><!-- /.col-md-12 col-lg-4 -->
                <div class="col-md-12 col-lg-4">
                    <div class="blog-card">
                        <div class="blog-card__image">
                            <img src="{{ asset('fronttheme/assets/images/blog/blog-grid-3.jpg') }}"
                                alt="Organically grow the holistic world view">
                            <a href="blog-details.html"></a>
                        </div><!-- /.blog-card__image -->
                        <div class="blog-card__content">
                            <div class="blog-card__date">18 Nov</div><!-- /.blog-card__date -->
                            <div class="blog-card__meta">
                                <a href="blog-details.html"><i class="far fa-user-circle"></i> by Admin</a>
                                <a href="blog-details.html"><i class="far fa-comments"></i> 2 Comments</a>
                            </div><!-- /.blog-card__meta -->
                            <h3><a href="blog-details.html">Organically grow the holistic world view</a></h3>
                            <a href="blog-details.html" class="thm-btn">Read More</a><!-- /.thm-btn -->
                        </div><!-- /.blog-card__content -->
                    </div><!-- /.blog-card -->
                </div><!-- /.col-md-12 col-lg-4 -->
            </div><!-- /.row -->
            <hr />
        </div><!-- /.container -->
    </section><!-- /.blog-home-two -->
    <div class="blog-home__slogan">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="blog-home__slogan-main">
                        <i class="agrikon-icon-farm"></i>
                        <div class="blog-home__slogan-content">
                            <h3>We Care About Our Agriculture Growth</h3>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered in some form, by injected humour words.</p>
                        </div><!-- /.blog-home__slogan-content -->
                    </div><!-- /.blog-home__slogan-main -->
                </div><!-- /.col-lg-9 -->
                <div class="col-lg-3">
                    <div class="blog-home__slogan-image">
                        <img src="{{ asset('fronttheme/assets/images/resources/blog-cta-1.png') }}" alt="">
                    </div><!-- /.blog-home__slogan-image -->
                </div><!-- /.col-lg-3 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.blog-home__slogan -->
</section><!-- /.gray-boxed-wrapper --> --}}

<section class="contact-two">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-5">
                <div class="contact-two__image">
                    <div class="contact-two__image-bubble-1"></div><!-- /.contact-two__image-bubble-1 -->
                    <div class="contact-two__image-bubble-2"></div><!-- /.contact-two__image-bubble-2 -->
                    <div class="contact-two__image-bubble-3"></div><!-- /.contact-two__image-bubble-3 -->
                    <img src="{{ asset('fronttheme/assets/images/resources/contact-1-1.jpg') }}" class="img-fluid"
                        alt="">
                </div><!-- /.contact-two__image -->
            </div><!-- /.col-sm-12 col-md-12 col-lg-12 col-xl-5 -->
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-3">
                <div class="contact-two__content">
                    <div class="block-title">
                        <div class="block-title__image"></div><!-- /.block-title__image -->
                        <p>Contact now</p>
                        <h3>Leave Us A
                            Message</h3>
                    </div><!-- /.block-title -->
                    <div class="contact-two__summery">
                        <p>Lorem ipsum dolor sit amet, consectetur notted adipisicing elit sed do eiusmod tempor
                            incididunt
                            ut labore et dolore magna aliqua lonm andhn. Aenean tincidunt id mauris id auctor. Donec at
                            ligula lacus dignissim mi quis simply neque.</p>
                    </div><!-- /.contact-two__summery -->
                </div><!-- /.contact-two__content -->
            </div><!-- /.col-sm-12 col-md-12 col-lg-12 col-xl-4 -->
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">
                <form action="{{ route('storeDirect') }}" class="contact-one__form contact-form-validated">
                    @csrf
                    @method('POST')
                    <div class="row">
                        <div class="col-lg-12">
                            <input type="text" name="fullname" placeholder="Full Name">
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-12">
                            <input type="text" name="email" placeholder="Email Address">
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-12">
                            <input type="text" name="phone" placeholder="Phone Number">
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-12">
                            <textarea name="message" placeholder="Write Message"></textarea>
                        </div><!-- /.col-lg-12 -->
                        <div class="col-lg-12">
                            <button type="submit" class="thm-btn">Send Message</button><!-- /.thm-btn -->
                        </div><!-- /.col-lg-12 -->
                    </div><!-- /.row -->
                </form>
            </div><!-- /.col-sm-12 col-md-12 col-lg-12 col-xl-4 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.contact-two -->



{{-- <div class="client-carousel client-carousel__has-border-top">
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
@include('front.layout.footer')
