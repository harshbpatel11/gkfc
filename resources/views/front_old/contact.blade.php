@include('front.layout.header')
<div class="stricky-header stricked-menu main-menu">
    <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
</div><!-- /.stricky-header -->
<section class="page-header">
    <div class="page-header__bg"
        style="background-image: url({{ asset('fronttheme/assets/images/backgrounds/page-header-bg-1-1.jpg') }});">
    </div>
    <!-- /.page-header__bg -->
    <div class="container">
        <ul class="thm-breadcrumb list-unstyled">
            <li><a href="index.html">Home</a></li>
            <li>/</li>
            <li><span>Contact Us</span></li>
        </ul><!-- /.thm-breadcrumb list-unstyled -->
        <h2>Contact</h2>
    </div><!-- /.container -->
</section><!-- /.page-header -->

<section class="contact-one">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-4">
                <div class="contact-one__content">
                    <div class="block-title">
                        <div class="block-title__image"></div><!-- /.block-title__image -->
                        <p>Contact now</p>
                        <h3>Leave A Message</h3>
                    </div><!-- /.block-title -->
                    <div class="contact-one__summery">
                        <p>Lorem ipsum dolor sit amet, consectetur notted adipisicing elit sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua lonm andhn. Aenean tincidunt id mauris
                            id
                            auctor. Donec at ligula lacus dignissim mi quis simply neque.</p>
                    </div><!-- /.contact-one__summery -->
                    <div class="contact-one__social">
                        <a href="#"><i class="fab fa-facebook-square"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div><!-- /.contact-one__social -->
                </div><!-- /.contact-one__content -->
            </div><!-- /.col-sm-12 -->
            @include('flash')
            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-8">
                <form action="{{ route('storeDirect') }}" class="contact-one__form contact-form-validated">
                    @csrf
                    @method('POST')
                    <div class="row">
                        <div class="col-lg-6">
                            <input type="text" name="fullname" placeholder="Full Name" value="{{ old('fullname') }}">
                            @error('fullname')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-6">
                            <input type="text" name="email" placeholder="Email Address"
                                value="{{ old('email') }}">
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-6">
                            <input type="text" name="phone" placeholder="Phone Number" value="{{ old('phone') }}">
                            @error('phone')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-6">
                            <input type="text" name="subject" placeholder="Subject" value="{{ old('subject') }}">
                            @error('subject')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-12">
                            <textarea value="{{ old('message') }}" name="message" placeholder="Write Message"></textarea>
                            @error('message')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div><!-- /.col-lg-12 -->
                        <div class="col-lg-12">
                            <button type="submit" class="thm-btn">Send a Message</button>
                        </div><!-- /.col-lg-12 -->
                    </div><!-- /.row -->
                </form>
            </div><!-- /.col-sm-12 col-md-6 col-lg-8 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.contact-one -->

<section class="contact-infos">
    <div class="container">
        <div class="inner-container wow fadeInUp" data-wow-duration="1500ms">
            <div class="row no-gutters">
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="contact-infos__single">
                        <h3>About Company</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit nulla sit amet lectus neque.
                        </p>
                    </div><!-- /.contact-infos__single -->
                </div><!-- /.col-sm-12 col-md-12 col-lg-4 -->
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="contact-infos__single">
                        <h3>Visit Company</h3>
                        <p>66 broklyn golden street line, New York. United States of America.</p>
                    </div><!-- /.contact-infos__single -->
                </div><!-- /.col-sm-12 col-md-12 col-lg-4 -->
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="contact-infos__single">
                        <h3>Call or Email</h3>
                        <p><a href="mailto:needhelp@company.com">needhelp@company.com</a> <br>
                            <a href="mailto:info@company.com">info@company.com</a><br>
                            <a href="tel:666-888-0000">666 888 0000</a>
                        </p>
                    </div><!-- /.contact-infos__single -->
                </div><!-- /.col-sm-12 col-md-12 col-lg-4 -->
            </div><!-- /.row -->
        </div><!-- /.inner-container -->
    </div><!-- /.container -->
</section><!-- /.contact-infos -->

<div class="google-map__home-two">
    
    <iframe title="template google map"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd"
        class="map__home-two" allowfullscreen></iframe>
</div><!-- /.google-map -->
@include('front.layout.footer')
