<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PP Al ANWARI | Dashboard</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/font-awesome/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

  </head>
<body>
    {{-- <div class="container-scroller"> --}}
    <!-- partial:partials/_navbar.html -->
    @include('dashboard.layouts.partials.navbar')
      <!-- partial -->
        <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        @include('dashboard.layouts.partials.sidebar')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="d-xl-flex justify-content-between align-items-start">
                @yield('content')


            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="d-sm-flex justify-content-between align-items-center transaparent-tab-border {">
                  <ul class="nav nav-tabs tab-transparent" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link" id="home-tab" data-bs-toggle="tab" href="#" role="tab" aria-selected="true">Santri</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" id="business-tab" data-bs-toggle="tab" href="#business-1" role="tab" aria-selected="false">Diniyyah</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="performance-tab" data-bs-toggle="tab" href="#" role="tab" aria-selected="false">Sekolah</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="conversion-tab" data-bs-toggle="tab" href="#" role="tab" aria-selected="false">Pembayaran</a>
                    </li>
                  </ul>
                  <div class="d-md-block d-none">
                    <a href="#" class="text-light p-1"><i class="mdi mdi-view-dashboard"></i></a>
                    <a href="#" class="text-light p-1"><i class="mdi mdi-dots-vertical"></i></a>
                  </div>
                </div>
                <div class="tab-content tab-transparent-content">
                  <div class="tab-pane fade show active" id="business-1" role="tabpanel" aria-labelledby="business-tab">
                    <div class="row">

                        <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body text-center">
                                    <h5 class="mb-2 text-dark font-weight-normal">Daftar Santri</h5>
                                    <h2 class="mb-4 text-dark font-weight-bold">4250k</h2>
                                    <div class="dashboard-progress dashboard-progress-4 d-flex align-items-center justify-content-center item-parent"><i class="mdi mdi-cube icon-md absolute-center text-dark"></i></div>
                                    <p class="mt-4 mb-0">Decreased since yesterday</p>
                                    <h3 class="mb-0 font-weight-bold mt-2 text-dark">25%</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body text-center">
                                    <h5 class="mb-2 text-dark font-weight-normal">Daftar Diniyyah</h5>
                                    <h2 class="mb-4 text-dark font-weight-bold">4250k</h2>
                                    <div class="dashboard-progress dashboard-progress-4 d-flex align-items-center justify-content-center item-parent"><i class="mdi mdi-cube icon-md absolute-center text-dark"></i></div>
                                    <p class="mt-4 mb-0">Decreased since yesterday</p>
                                    <h3 class="mb-0 font-weight-bold mt-2 text-dark">25%</h3>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
        @include('dashboard.layouts.partials.footer')
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->


    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="assets/js/misc.js"></script>
    <script src="assets/js/dashboard.js"></script>

  </body>
</html>
