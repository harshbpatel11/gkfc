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
            <li><span>Product Details</span></li>
        </ul><!-- /.thm-breadcrumb list-unstyled -->
        <h2>Product Details</h2>
    </div><!-- /.container -->
</section><!-- /.page-header -->

<section class="project-details">
    <div class="container">
        <img src="{{ asset('uploads/' . $product->productimage) }}" class="img-fluid" alt="">
        <h2>{{ $product->name }}</h2>
        {!! $product->productdescription !!}
        <!-- /.bottom-content -->
    </div><!-- /.container -->
</section><!-- /.project-details -->

@include('front.layout.footer')
