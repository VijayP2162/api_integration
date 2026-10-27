<!DOCTYPE html>


<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact " dir="ltr" data-theme="theme-default" data-assets-path="assets/" data-template="vertical-menu-template">

@include('head')

<body>
  <div class="layout-wrapper layout-content-navbar  ">
    <div class="layout-container">
      @include('aside-part')
      <div class="layout-page">
        @include('top_aside')
        <div class="container-xxl flex-grow-1 container-p-y">
          <h4 class="py-3 breadcrumb-wrapper mb-4"><span class="text-muted fw-light">Register</span></h4>

          <!-- Basic Layout -->
          <div class="row">
            <div class="col-6">
              <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                  <h5 class="mb-0">Employee Register</h5> <small class="text-muted float-end"></small>
                </div>
                <div class="card-body">
                  <form id="registration_form">
                    @csrf
                    <div class="mb-3">
                      <label class="form-label" for="basic-default-fullname">Full Name</label>
                      <input type="text" class="form-control" id="full_name" placeholder="John Doe" name="full_name">
                    </div>
                    <div class="mb-3">
                      <label class="form-label" for="basic-default-company">Password</label>
                      <input type="text" class="form-control" id="user_password" placeholder="ACME Inc." name="user_password">
                    </div>
                    <div class="mb-3">
                      <label class="form-label" for="basic-default-email">Email</label>
                      <div class="input-group input-group-merge">
                        <input type="text" id="user_name" class="form-control" placeholder="john.doe" aria-label="john.doe" aria-describedby="basic-default-email2" name="user_name">
                        <span class="input-group-text" id="basic-default-email2">@gmail.com</span>
                      </div>
                      <div class="form-text"> You can use letters, numbers &amp; periods </div>
                    </div>
                    <div class="mb-3">
                      <label class="form-label" for="basic-default-phone">Phone No</label>
                      <input type="text" id="user_mobile" class="form-control phone-mask" placeholder="658 799 8941" name="user_mobile">
                    </div>
                    <div class="mb-3">
                      <label class="form-label" for="basic-default-message">Message</label>
                      <select id="multicol-country" class="select2 form-select select2-hidden-accessible" data-allow-clear="true" data-select2-id="user_role" tabindex="-1" aria-hidden="true" name="user_role">
                        <option value="" data-select2-id="2">Select</option>
                        <option value="1">Admin</option>
                          <option value="2">Employee</option>
                         
                      </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Send</button>
                  </form>
                </div>
              </div>
            </div>

          </div>



        </div>




        <div class="layout-overlay layout-menu-toggle"></div>
        <div class="drag-target"></div>
      </div>








      <!-- Core JS -->
      <!-- build:js assets/vendor/js/core.js -->
      <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
      <script>
        $(document).ready(function() {

          $("#registration_form").on('submit', function(e) {
            e.preventDefault();

            var full_name = $("#full_name").val().trim();
            var user_password = $("#user_password").val();
            var user_name = $("#user_name").val().trim();
            var user_mobile = $("#user_mobile").val().trim();
            var user_role = $("#user_role").val();

            var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            // Full Name validation
            if (full_name == "") {
              Swal.fire({
                title: "Full Name is Missing",
                icon: "warning",
                confirmButtonColor: "blue",
                confirmButtonText: "OK"
              });
              return;
            }

            // Password validation
            if (user_password == "") {
              Swal.fire({
                title: "Password is Missing",
                icon: "warning",
                confirmButtonColor: "blue",
                confirmButtonText: "OK"
              });
              return;
            }

            if (user_password.length < 8) {
              Swal.fire({
                title: "Password Too Short",
                text: "Password must be at least 8 characters.",
                icon: "warning",
                confirmButtonColor: "blue",
                confirmButtonText: "OK"
              });
              return;
            }

            // Username validation
            if (user_name == "") {
              Swal.fire({
                title: "Username is Missing",
                icon: "warning",
                confirmButtonColor: "blue",
                confirmButtonText: "OK"
              });
              return;
            }
            if (!emailPattern.test(user_name)) {
              Swal.fire({
                title: "Invalid Email",
                text: "Please enter a valid email address.",
                icon: "warning",
                confirmButtonColor: "blue",
                confirmButtonText: "OK"
              });
              return;
            }

            // Mobile validation
            if (user_mobile == "" || user_mobile.length != 10) {
              Swal.fire({
                title: "Invalid Mobile Number",
                text: "Mobile number must be exactly 10 digits.",
                icon: "warning",
                confirmButtonColor: "blue",
                confirmButtonText: "OK"
              });
              return;
            }
            // Role validation
            if (user_role == "") {
              Swal.fire({
                title: "Role is Missing",
                icon: "warning",
                confirmButtonColor: "blue",
                confirmButtonText: "OK"
              });
              return;
            }


            $.ajax({
              url: "{{ route('register_data') }}",
              type: "POST",
              data: $(this).serialize(),

              success: function(response) {
                if (response.status) {
                  Swal.fire({
                    title: "Successfully Registered",
                    icon: "success",
                    confirmButtonColor: "blue",
                    confirmButtonText: "OK"
                  }).then(function () {

                        // Change this route if necessary
                        window.location.href = "{{ route('Employee_list') }}";

                    });
                }
              },

              error: function(xhr) {
                console.log(xhr.responseJSON);
              }
            });
          });

        });
      </script>
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