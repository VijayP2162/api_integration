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
                    <span class="d-none d-md-inline-block">Search (Ctrl+/)</span>
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