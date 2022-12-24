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
            <li><span>Products</span></li>
        </ul><!-- /.thm-breadcrumb list-unstyled -->
        <h2>Our Products</h2>
    </div><!-- /.container -->
</section><!-- /.page-header -->

<section class="service-two service-two__service-page">
    <div class="container-flued" style="margin-right: 2%; margin-left: 2%;">
        <div class="row">
            <div class="col-lg-3">
                <div class="service-sidebar">
                    <div class="service-sidebar__links">
                        <ul style="padding-left: 0px;padding-right: 0px;">
                            @if ($categoryid == null)
                                <li style="background: #f7c35f"><a href="{{ route('products') }}">All Category</a></li>
                            @else
                                <li><a href="{{ route('products') }}">All Category</a></li>
                            @endif
                            @foreach ($category as $item)
                                @if ($categoryid == $item->id)
                                    <li style="background: #f7c35f"><a
                                            href="{{ url('products/' . $item->id) }}">{{ $item->categoriesname }}</a>
                                    </li>
                                @else
                                    <li><a href="{{ url('products/' . $item->id) }}">{{ $item->categoriesname }}</a>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </div><!-- /.service-sidebar -->
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-9">
                <div class="row">
                    @foreach ($product as $item)
                        <div class="col-sm-12 col-md-6 col-lg-4 mb-2 mt-1">
                            <div class="service-two__card">
                                <div class="service-two__card-image">
                                    <img src="{{ asset('uploads/' . $item->productimage) }}" alt="">
                                </div><!-- /.service-two__card-image -->
                                <div class="service-two__card-content">
                                    <div class="service-two__card-icon">
                                        <i class="agrikon-icon-tractor"></i>
                                    </div><!-- /.service-two__card-icon -->
                                    <h3><a href="{{ url('productdetail/' . $item->id) }}">{{ $item->name }}</a></h3>
                                </div><!-- /.service-two__card-content -->
                            </div><!-- /.service-two__card -->
                        </div>
                    @endforeach
                    {{-- <div class="col-sm-12 col-md-6 col-lg-4 mb-2 mt-1">
                        <div class="service-two__card">
                            <div class="service-two__card-image">
                                <img src="{{ asset('fronttheme/assets/images/services/service-2-1.jpg') }}"
                                    alt="">
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
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="service-two__card">
                            <div class="service-two__card-image">
                                <img src="{{ asset('fronttheme/assets/images/services/service-2-2.jpg') }}"
                                    alt="">
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
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="service-two__card">
                            <div class="service-two__card-image">
                                <img src="{{ asset('fronttheme/assets/images/services/service-2-3.jpg') }}"
                                    alt="">
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
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="service-two__card">
                            <div class="service-two__card-image">
                                <img src="{{ asset('fronttheme/assets/images/services/service-2-4.jpg') }}"
                                    alt="">
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
                </div>
            </div>
        </div>
    </div>
</section>

{{-- <section class="call-to-action__two jarallax" data-jarallax data-speed="0.3" data-imgPosition="50% 50%">
    <img class="call-to-action__two__bg jarallax-img"
        src="{{ asset('fronttheme/assets/images/backgrounds/cta-2-bg-1') }}.jpg" alt="parallax-image" />
    <div class="container">
        <h3>Agriculture Matters to
            the Future</h3>
        <a href="about.html" class="thm-btn">Discover More</a><!-- /.thm-btn -->
    </div>
</section> --}}


{{-- <section class="call-to-action__three jarallax" data-jarallax data-speed="0.3" data-imgPosition="50% 50%">
    <img class="call-to-action__three__bg jarallax-img"
        src="{{ asset('fronttheme/assets/images/backgrounds/cta-1-bg-1') }}.jpg" alt="parallax-image" />
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="call-to-action__three-image">
                    <img src="{{ asset('fronttheme/assets/images/resources/cta-3-1.jpg') }}" alt="">
                    <img src="{{ asset('fronttheme/assets/images/resources/cta-3-2.jpg') }}" alt="">
                </div><!-- /.call-to-action__three-image -->
            </div><!-- /.col-lg-5 -->
            <div class="col-lg-7">
                <div class="call-to-action__three-content">
                    <h3>Providing High Quality
                        Products</h3>
                    <a href="about.html" class="thm-btn">Discover More</a><!-- /.thm-btn -->
                </div><!-- /.call-to-action__three-content -->
            </div><!-- /.col-lg-7 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.call-to-action__three --> --}}
@include('front.layout.footer')
