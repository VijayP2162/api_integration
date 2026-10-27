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
            <div class="card">
              <h5 class="card-header">Complex Headers</h5>
              <div class="card-datatable text-nowrap">
                <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                  <div class="row">
                    <div class="col-sm-12 col-md-6">
                      <div class="dataTables_length" id="DataTables_Table_1_length"><label>Show <select name="DataTables_Table_1_length" aria-controls="DataTables_Table_1" class="form-select">
                            <option value="7">7</option>
                            <option value="10">10</option>
                            <option value="25">25</option>
                            <option value="50">50</option>
                            <option value="75">75</option>
                            <option value="100">100</option>
                          </select> entries</label></div>
                    </div>
                    <div class="col-sm-12 col-md-6 d-flex justify-content-center justify-content-md-end">
                      <div id="DataTables_Table_1_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control" placeholder="" aria-controls="DataTables_Table_1"></label></div>
                    </div>
                  </div>
                  <div class="table-responsive">
                    <table class="dt-complex-header table table-bordered dataTable no-footer" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info" style="width: 1346px;">
                      <thead>
                        <tr>
                          <th rowspan="2" class="sorting sorting_asc" tabindex="0" aria-controls="DataTables_Table_1" colspan="1" aria-label="Name: activate to sort column descending" style="width: 152px;" aria-sort="ascending">Name</th>
                          <th colspan="2" rowspan="1">Contact</th>
                          <th colspan="3" rowspan="1">HR Information</th>
                          <th rowspan="2" class="sorting_disabled" colspan="1" aria-label="Actions" style="width: 61px;">Actions</th>
                        </tr>
                        <tr>
                          <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="E-mail: activate to sort column ascending" style="width: 232px;">E-mail</th>
                          <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="City: activate to sort column ascending" style="width: 162px;">Mobile</th>
                          <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 223px;">Position</th>
                          <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 75px;">Salary</th>
                          <th class="border-1 sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 115px;">Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr class="odd">
                          @php
                          $i = 1;
                          @endphp
                          @foreach($employee_list as $list_data)

                          <td class="sorting_1">{{$list_data->full_name}}</td>
                          <td>{{$list_data->user_name}}</td>
                          <td>{{$list_data->mobile}}</td>
                          <td>
                            @if($list_data->role == 1)
                            Employee
                            @elseif($list_data->role == 2)
                            Admin
                            @else
                            Unknown
                            @endif
                          </td>
                          <td>$14082.44</td>
                          <td><span class="badge rounded-pill  bg-label-info">Applied</span></td>
                          <td>

                            <div class="d-inline-block"><a href="javascript:;" class="btn btn-sm btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></a>
                              <div class="dropdown-menu dropdown-menu-end m-0"><a href="javascript:;" class="dropdown-item">Details</a><a href="javascript:;" class="dropdown-item">Archive</a>
                                <div class="dropdown-divider"></div><a href="javascript:;" class="dropdown-item text-danger delete-record">Delete</a>
                              </div>
                            </div><a href="javascript:;"
                              class="btn btn-sm btn-icon item-edit"
                              data-bs-toggle="modal"
                              data-bs-target="#editUser{{ $list_data->id }}">
                              <i class="bx bxs-edit"></i>
                            </a>




                            <div class="modal fade"
                              id="editUser{{ $list_data->id }}"
                              tabindex="-1"
                              aria-hidden="true">

                              <div class="modal-dialog modal-lg modal-simple modal-edit-user">

                                <div class="modal-content p-3 p-md-5">

                                  <div class="modal-body">

                                    <button type="button"
                                      class="btn-close"
                                      data-bs-dismiss="modal"
                                      aria-label="Close">
                                    </button>

                                    <div class="text-center mb-4">
                                      <h3>Edit User Information</h3>
                                      <p>Update employee details</p>
                                    </div>

                                    <form action="{{ route('edit_employee_details', $list_data->id) }}"
                                      method="POST"
                                      class="row g-3">

                                      @csrf
                                      @method('PUT')

                                      <!-- Full Name -->
                                      <div class="col-12 col-md-6">

                                        <label class="form-label">
                                          Full Name
                                        </label>

                                        <input type="text"
                                          name="full_name"
                                          class="form-control"
                                          value="{{ $list_data->full_name }}"
                                          required>

                                      </div>


                                      <!-- Username / Email -->
                                      <div class="col-12 col-md-6">

                                        <label class="form-label">
                                          Username
                                        </label>

                                        <input type="email"
                                          name="user_name"
                                          class="form-control"
                                          value="{{ $list_data->user_name }}"
                                          required>

                                      </div>


                                      <!-- Mobile -->
                                      <div class="col-12 col-md-6">

                                        <label class="form-label">
                                          Phone Number
                                        </label>

                                        <input type="text"
                                          name="mobile"
                                          class="form-control"
                                          value="{{ $list_data->mobile }}"
                                          required>

                                      </div>


                                      <!-- Role -->
                                      <div class="col-12 col-md-6">

                                        <label class="form-label">
                                          Role
                                        </label>

                                        <select name="role"
                                          class="form-select">

                                          <option value="1"
                                            {{ $list_data->role == 1 ? 'selected' : '' }}>
                                            Employee
                                          </option>

                                          <option value="2"
                                            {{ $list_data->role == 2 ? 'selected' : '' }}>
                                            Admin
                                          </option>

                                        </select>

                                      </div>


                                      <!-- Status -->
                                      <div class="col-12 col-md-6">

                                        <label class="form-label">
                                          Status
                                        </label>

                                        <select name="user_status"
                                          class="form-select">

                                          <option value="1"
                                            {{ $list_data->user_status == 1 ? 'selected' : '' }}>
                                            Active
                                          </option>

                                          <option value="0"
                                            {{ $list_data->user_status == 0 ? 'selected' : '' }}>
                                            Inactive
                                          </option>

                                        </select>

                                      </div>


                                      <!-- Buttons -->
                                      <div class="col-12 text-center mt-4">

                                        <button type="submit"
                                          class="btn btn-primary me-sm-3 me-1">
                                          Update
                                        </button>

                                        <button type="button"
                                          class="btn btn-label-secondary"
                                          data-bs-dismiss="modal">
                                          Cancel
                                        </button>

                                      </div>

                                    </form>

                                  </div>

                                </div>

                              </div>
                            </div>


                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                  <div class="row">
                    <div class="col-sm-12 col-md-6">
                      <div class="dataTables_info" id="DataTables_Table_1_info" role="status" aria-live="polite">Showing 1 to 1 of 1 entries (filtered from 100 total entries)</div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                      <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_1_paginate">
                        <ul class="pagination">
                          <li class="paginate_button page-item previous disabled" id="DataTables_Table_1_previous"><a aria-controls="DataTables_Table_1" aria-disabled="true" role="link" data-dt-idx="previous" tabindex="-1" class="page-link">Previous</a></li>
                          <li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_1" role="link" aria-current="page" data-dt-idx="0" tabindex="0" class="page-link">1</a></li>
                          <li class="paginate_button page-item next disabled" id="DataTables_Table_1_next"><a aria-controls="DataTables_Table_1" aria-disabled="true" role="link" data-dt-idx="next" tabindex="-1" class="page-link">Next</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
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