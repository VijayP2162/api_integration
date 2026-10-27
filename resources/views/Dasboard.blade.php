<!DOCTYPE html>


<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact " dir="ltr" data-theme="theme-default" data-assets-path="assets/" data-template="vertical-menu-template">

      @include('head')

<body>


  <!-- ?PROD Only: Google Tag Manager (noscript) (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5DDHKGP" height="0" width="0" style="display: none; visibility: hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-content-navbar  ">
    <div class="layout-container">
      @include('aside-part')
      <div class="layout-page">
        <nav class="layout-navbar navbar navbar-expand-xl align-items-center bg-navbar-theme" id="layout-navbar">
          <div class="container-xxl">
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0   d-xl-none ">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>
            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <div class="navbar-nav align-items-center">
                <div class="nav-item navbar-search-wrapper mb-0">
                  <a class="nav-item nav-link search-toggler px-0" href="javascript:void(0);">
                    <i class="bx bx-search-alt bx-sm"></i>
                    <span class="d-none d-md-inline-block">VIJAY (Ctrl+/)</span>
                  </a>
                </div>
              </div>

              <ul class="navbar-nav flex-row align-items-center ms-auto">
                 @include('top_nav')
              </ul>
            </div>


            <!-- Search Small Screens -->
            <div class="navbar-search-wrapper search-input-wrapper container-xxl d-none">
              <input type="text" class="form-control search-input border-0" placeholder="Search..." aria-label="Search...">
              <i class="bx bx-x bx-sm search-toggler cursor-pointer"></i>
            </div>


          </div>
        </nav>

        <div class="content-wrapper">
          <div class="container-xxl flex-grow-1 container-p-y">
            <div class="card bg-transparent border-0 my-4 shadow-none">
              <div class="card-body row p-0 pb-3">
                <div class="col-12 col-md-8 card-separator">
                  <h3>VIJAY P back, Felecia 👋🏻 </h3>
                  <div class="col-12 col-lg-7">
                    <p>Your progress this week is Awesome. let's keep it up and get a lot of points reward !</p>
                  </div>
                  <div class="d-flex justify-content-between flex-wrap gap-3 me-5">
                    <div class="d-flex align-items-center gap-3 me-4 me-sm-0">
                      <span class=" bg-label-primary p-2 rounded">
                        <i class='bx bx-laptop bx-sm'></i>
                      </span>
                      <div class="content-right">
                        <p class="mb-0">Hours Spent</p>
                        <h4 class="text-primary mb-0">34h</h4>
                      </div>
                    </div>
                    <div class="d-flex align-items-center gap-3">
                      <span class="bg-label-info p-2 rounded">
                        <i class='bx bx-bulb bx-sm'></i>
                      </span>
                      <div class="content-right">
                        <p class="mb-0">Test Results</p>
                        <h4 class="text-info mb-0">82%</h4>
                      </div>
                    </div>
                    <div class="d-flex align-items-center gap-3">
                      <span class="bg-label-warning p-2 rounded">
                        <i class='bx bx-check-circle bx-sm'></i>
                      </span>
                      <div class="content-right">
                        <p class="mb-0">Course Completed </p>
                        <h4 class="text-warning mb-0">14</h4>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- <div class="col-12 col-md-4 ps-md-3 ps-lg-5 pt-3 pt-md-0">
                  <div class="d-flex justify-content-between align-items-center">
                    <div>
                      <div>
                        <h5 class="mb-2">Time Spendings</h5>
                        <p class="mb-4">Weekly report</p>
                      </div>
                      <div class="time-spending-chart">
                        <h3 class="mb-2">231<span class="text-muted">h</span> 14<span class="text-muted">m</span> </h3>
                        <span class="badge bg-label-success">+18.4%</span>
                      </div>
                    </div>
                    <div id="leadsReportChart"></div>
                  </div>
                </div> -->
              </div>
            </div>

            <div class="row mb-4 g-4">
              <div class="col-12 col-xl-8">
                <div class="card h-100">
                  <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="card-title m-0 me-2">Topic you are interested in</h5>
                    <div class="dropdown">
                      <button class="btn p-0" type="button" id="topic" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="bx bx-dots-vertical-rounded"></i>
                      </button>
                      <div class="dropdown-menu dropdown-menu-end" aria-labelledby="topic">
                        <a class="dropdown-item" href="javascript:void(0);">Highest Views</a>
                        <a class="dropdown-item" href="javascript:void(0);">See All</a>
                      </div>
                    </div>
                  </div>
                  <div class="card-body row g-3">
                    <div class="col-md-6">
                      <div id="horizontalBarChart"></div>
                    </div>
                    <div class="col-md-6 d-flex justify-content-around align-items-center">
                      <div>
                        <div class="d-flex align-items-baseline">
                          <span class="text-primary me-2"><i class='bx bxs-circle'></i></span>
                          <div>
                            <p class="mb-2">UI Design</p>
                            <h5>35%</h5>
                          </div>
                        </div>
                        <div class="d-flex align-items-baseline my-3">
                          <span class="text-success me-2"><i class='bx bxs-circle'></i></span>
                          <div>
                            <p class="mb-2">Music</p>
                            <h5>14%</h5>
                          </div>
                        </div>
                        <div class="d-flex align-items-baseline">
                          <span class="text-danger me-2"><i class='bx bxs-circle'></i></span>
                          <div>
                            <p class="mb-2">React</p>
                            <h5>10%</h5>
                          </div>
                        </div>
                      </div>

                      <div>
                        <div class="d-flex align-items-baseline">
                          <span class="text-info me-2"><i class='bx bxs-circle'></i></span>
                          <div>
                            <p class="mb-2">UX Design</p>
                            <h5>20%</h5>
                          </div>
                        </div>
                        <div class="d-flex align-items-baseline my-3">
                          <span class="text-secondary me-2"><i class='bx bxs-circle'></i></span>
                          <div>
                            <p class="mb-2">Animation</p>
                            <h5>12%</h5>
                          </div>
                        </div>
                        <div class="d-flex align-items-baseline">
                          <span class="text-warning me-2"><i class='bx bxs-circle'></i></span>
                          <div>
                            <p class="mb-2">SEO</p>
                            <h5>9%</h5>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

             


              
            </div>
           


          </div>
          <!-- / Content -->




          <!-- Footer -->
          <footer class="content-footer footer bg-footer-theme">
            <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
              <div class="mb-2 mb-md-0">
                © <script>
                  document.write(new Date().getFullYear())
                </script> <a href="" target="_blank" class="footer-link fw-medium">PAV</a>
              </div>
             
            </div>
          </footer>
          <!-- / Footer -->


          <div class="content-backdrop fade"></div>
        </div>
        <!-- Content wrapper -->
      </div>
      <!-- / Layout page -->
    </div>



    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>


    <!-- Drag Target Area To SlideIn Menu On Small Screens -->
    <div class="drag-target"></div>

  </div>
  <!-- / Layout wrapper -->







  <!-- Core JS -->
  <!-- build:js assets/vendor/js/core.js -->

  <script src="assets/vendor/libs/jquery/jquery.js"></script>
  <script src="assets/vendor/libs/popper/popper.js"></script>
  <script src="assets/vendor/js/bootstrap.js"></script>
  <script src="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
  <script src="assets/vendor/libs/hammer/hammer.js"></script>
  <script src="assets/vendor/libs/i18n/i18n.js"></script>
  <script src="assets/vendor/libs/typeahead-js/typeahead.js"></script>
  <script src="assets/vendor/js/menu.js"></script>

  <!-- endbuild -->

  <!-- Vendors JS -->
  <script src="assets/vendor/libs/moment/moment.js"></script>
  <script src="assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>
  <script src="assets/vendor/libs/apex-charts/apexcharts.js"></script>

  <!-- Main JS -->
  <script src="assets/js/main.js"></script>


  <!-- Page JS -->
  <script src="assets/js/app-academy-dashboard.js"></script>

</body>

</html>

<!-- beautify ignore:end -->