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
            <li><span>Gallary</span></li>
        </ul><!-- /.thm-breadcrumb list-unstyled -->
        <h2>Gallary</h2>
    </div><!-- /.container -->
</section><!-- /.page-header -->

<div class="projects-one">
    <div class="container">
        <div class="row">
            @foreach ($gallary as $item)
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="projects-one__single">
                        <img src="{{ asset('uploads/' . $item->gallaryimage) }}" alt="">
                        <div class="projects-one__content">
                            <h3>{{ $item->gallaryname }}</h3>
                            <a href="{{ url('gallarydetail/' . $item->id) }}" class="projects-one__button"><i
                                    class="agrikon-icon-right-arrow"></i></a><!-- /.projects-one__button -->
                        </div><!-- /.projects-one__content -->
                    </div><!-- /.projects-one__single -->
                </div>
            @endforeach
            {{-- <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="projects-one__single">
                            <img src="{{ asset('fronttheme/assets/images/projects/project-1-1.jpg') }}" alt="">
                            <div class="projects-one__content">
                                <h3>Harvest Innovation</h3>
                                <a href="project-details.html" class="projects-one__button"><i class="agrikon-icon-right-arrow"></i></a><!-- /.projects-one__button -->
                            </div><!-- /.projects-one__content -->
                        </div><!-- /.projects-one__single -->
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="projects-one__single">
                            <img src="{{ asset('fronttheme/assets/images/projects/project-1-2.jpg') }}" alt="">
                            <div class="projects-one__content">
                                <h3>Harvest Innovation</h3>
                                <a href="project-details.html" class="projects-one__button"><i class="agrikon-icon-right-arrow"></i></a><!-- /.projects-one__button -->
                            </div><!-- /.projects-one__content -->
                        </div><!-- /.projects-one__single -->
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="projects-one__single">
                            <img src="{{ asset('fronttheme/assets/images/projects/project-1-3.jpg') }}" alt="">
                            <div class="projects-one__content">
                                <h3>Harvest Innovation</h3>
                                <a href="project-details.html" class="projects-one__button"><i class="agrikon-icon-right-arrow"></i></a><!-- /.projects-one__button -->
                            </div><!-- /.projects-one__content -->
                        </div><!-- /.projects-one__single -->
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="projects-one__single">
                            <img src="{{ asset('fronttheme/assets/images/projects/project-1-4.jpg') }}" alt="">
                            <div class="projects-one__content">
                                <h3>Harvest Innovation</h3>
                                <a href="project-details.html" class="projects-one__button"><i class="agrikon-icon-right-arrow"></i></a><!-- /.projects-one__button -->
                            </div><!-- /.projects-one__content -->
                        </div><!-- /.projects-one__single -->
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="projects-one__single">
                            <img src="{{ asset('fronttheme/assets/images/projects/project-1-5.jpg') }}" alt="">
                            <div class="projects-one__content">
                                <h3>Harvest Innovation</h3>
                                <a href="project-details.html" class="projects-one__button"><i class="agrikon-icon-right-arrow"></i></a><!-- /.projects-one__button -->
                            </div><!-- /.projects-one__content -->
                        </div><!-- /.projects-one__single -->
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="projects-one__single">
                            <img src="{{ asset('fronttheme/assets/images/projects/project-1-6.jpg') }}" alt="">
                            <div class="projects-one__content">
                                <h3>Harvest Innovation</h3>
                                <a href="project-details.html" class="projects-one__button"><i class="agrikon-icon-right-arrow"></i></a><!-- /.projects-one__button -->
                            </div><!-- /.projects-one__content -->
                        </div><!-- /.projects-one__single -->
                    </div> --}}
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.projects-one -->
@include('front.layout.footer')
