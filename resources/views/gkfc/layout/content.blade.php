  @include('gkfc.layout.header')
  @include('gkfc.layout.sidebar')
  <div class="content-wrapper">
      <section class="default-pad">
      </section>
      <section class="content">
          <div class="row">
              <div class="col-lg-3 col-6">
                  <div class="small-box bg-info">
                      <div class="inner">
                          <h3>{{ $inquiry }}</h3>
                          <p>Inquiry</p>
                      </div>
                      <div class="icon">
                          <i class="fas fa-user"></i>
                      </div>
                      <a href="{{ route('inquiry.index') }}" class="small-box-footer">
                          More info <i class="fas fa-arrow-circle-right"></i>
                      </a>
                  </div>
              </div>

              <div class="col-lg-3 col-6">

                  <div class="small-box bg-success">
                      <div class="inner">
                          <h3>{{ $product }}</h3>
                          <p>Product</p>
                      </div>
                      <div class="icon">
                          <i class="fas fa-shopping-cart"></i>
                      </div>
                      <a href="{{ route('product.index') }}" class="small-box-footer">
                          More info <i class="fas fa-arrow-circle-right"></i>
                      </a>
                  </div>
              </div>

              <div class="col-lg-3 col-6">

                  <div class="small-box bg-warning">
                      <div class="inner">
                          <h3>{{ $category }}</h3>
                          <p>Category</p>
                      </div>
                      <div class="icon">
                          <i class="fas fa-table"></i>
                      </div>
                      <a href="{{ route('category.index') }}" class="small-box-footer">
                          More info <i class="fas fa-arrow-circle-right"></i>
                      </a>
                  </div>
              </div>

              <div class="col-lg-3 col-6">

                  <div class="small-box bg-danger">
                      <div class="inner">
                          <h3>{{ $gallary }}</h3>
                          <p>Gallary</p>
                      </div>
                      <div class="icon">
                        <i class="far fa-image"></i>
                      </div>
                      <a href="{{ route('gallary.index') }}" class="small-box-footer">
                          More info <i class="fas fa-arrow-circle-right"></i>
                      </a>
                  </div>
              </div>

          </div>
      </section>
      <!-- /.content -->
  </div>
  @include('gkfc.layout.footer')
