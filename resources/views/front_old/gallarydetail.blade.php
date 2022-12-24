@include('front.layout.header')
<div class="stricky-header stricked-menu main-menu">
    <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
</div><!-- /.stricky-header -->
<section class="page-header">
    <div class="page-header__bg"
        style="background-image: url({{ asset('fronttheme/assets/images/backgrounds/page-header-bg-1-1.jpg') }}') }});">
    </div>
    <!-- /.page-header__bg -->
    <div class="container">
        <ul class="thm-breadcrumb list-unstyled">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li>/</li>
            <li><span>Gallary Details</span></li>
        </ul><!-- /.thm-breadcrumb list-unstyled -->
        <h2>Gallary Details</h2>
    </div><!-- /.container -->
</section><!-- /.page-header -->

<section class="project-details">
    <div class="container">
        <img src="{{ asset('uploads/' . $gallary->gallaryimage) }}" class="img-fluid" alt="">
        {{-- <ul class="list-unstyled project-details__list">
            <li>
                <span>Date:
                </span>
                20 July, 2020
            </li>
            <li>
                <span>Client:
                </span>
                Mike Hardson
            </li>
            <li>
                <span>Category:
                </span>
                Agriculture, Eco
            </li>
            <li>
                <span>Service:
                </span>
                Organic Products
            </li>
        </ul><!-- /.list-unstyled project-details__list --> --}}
        <h2>{{ $gallary->gallaryname }}</h2>
        {!! $gallary->gallarydescription !!}
        <!-- /.bottom-content -->
    </div><!-- /.container -->
</section><!-- /.project-details -->

@include('front.layout.footer')
