@extends('admin.layouts.master')

@section('admin.content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">

            <!-- Customers Card -->
            <div class="col-xxl-4 col-xl-12">

              <div class="card info-card customers-card">

                <div class="filter">
                  <a href="{{route('admin.user')}}" class="btn btn-primary">Show</a>
                </div>
                <div class="card-body">
                  <h5 class="card-title">Users <span></span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{$count_users}}</h6>
                      <span class="text-danger small pt-1 fw-bold"></span> <span class="text-muted small pt-2 ps-1"></span>

                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End Customers Card -->

            <!-- Customers Card -->
            <div class="col-xxl-4 col-xl-12">

              <div class="card info-card customers-card">

                <div class="filter">
                  <a href="{{route('admin.post')}}" class="btn btn-primary">Show</a>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Posts <span></span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-file-image"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{$count_posts}}</h6>
                      <span class="text-danger small pt-1 fw-bold"></span> <span class="text-muted small pt-2 ps-1"></span>

                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End Customers Card -->

            <!-- Customers Card -->
            <div class="col-xxl-4 col-xl-12">
            </div><!-- End Customers Card -->
                        <!-- Customers Card -->
                        <div class="col-xxl-4 col-xl-12">

                          <div class="card info-card customers-card">
                            <div class="filter">
                              <a href="" class="btn btn-primary">Show</a>
                            </div>
            
                            <div class="card-body">
                              <h5 class="card-title">Comments <span></span></h5>
            
                              <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                  <i class="bi bi-folder"></i>
                                </div>
                                <div class="ps-3">
                                  <h6>{{$count_comments}}</h6>
                                  <span class="text-danger small pt-1 fw-bold"></span> <span class="text-muted small pt-2 ps-1"></span>
            
                                </div>
                              </div>
            
                            </div>
                          </div>
            
                        </div><!-- End Customers Card -->
                                    <!-- Customers Card -->
            <div class="col-xxl-4 col-xl-12">

              <div class="card info-card customers-card">

                <div class="filter">
                  <a href="{{route('admin.tag')}}" class="btn btn-primary">Show</a>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Tags <span></span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-file"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{$count_tags}}</h6>
                      <span class="text-danger small pt-1 fw-bold"></span> <span class="text-muted small pt-2 ps-1"></span>

                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End Customers Card -->
                        <!-- Customers Card -->
                        <div class="col-xxl-4 col-xl-12">

                          <div class="card info-card customers-card">
            
                            <div class="filter">
                              <a href="{{route('admin.message')}}" class="btn btn-primary">Show</a>
                            </div>
            
                            <div class="card-body">
                              <h5 class="card-title">Messages <span></span></h5>
            
                              <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                  <i class="bi bi-alarm"></i>
                                </div>
                                <div class="ps-3">
                                  <h6>{{$count_messages}}</h6>
                                  <span class="text-danger small pt-1 fw-bold"></span> <span class="text-muted small pt-2 ps-1"></span>
            
                                </div>
                              </div>
            
                            </div>
                          </div>
            
                        </div><!-- End Customers Card -->
                                    <!-- Customers Card -->
            <div class="col-xxl-4 col-xl-12">
              <div class="card info-card customers-card">
                <div class="filter">
                  <a href="" class="btn btn-primary">Show</a>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Replies <span></span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-file-text"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{$count_replies}}</h6>
                      <span class="text-danger small pt-1 fw-bold"></span> <span class="text-muted small pt-2 ps-1"></span>

                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End Customers Card -->
      </div>
    </section>

  </main><!-- End #main -->
@endsection