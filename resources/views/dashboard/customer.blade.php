@extends('layout.body')

@section('main')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Customers</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
              <li class="breadcrumb-item active">Customers</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <a class="info-box" href="javascript:;">
              <span class="info-box-icon bg-secondary elevation-1"><i class="fas fa-info-circle"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Customers haven't called</span>
                <span class="info-box-number">41,410</span>
              </div>
              <!-- /.info-box-content -->
            </a>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <a class="info-box mb-3" href="javascript:;">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-phone"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Customers called</span>
                <span class="info-box-number">41,410</span>
              </div>
              <!-- /.info-box-content -->
            </a>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <a class="info-box mb-3" href="javascript:;">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-calendar-alt"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Schedule customers</span>
                <span class="info-box-number">760</span>
              </div>
              <!-- /.info-box-content -->
            </a>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <a class="info-box mb-3" href="javascript:;">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-thumbs-up"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Contracted</span>
                <span class="info-box-number">100</span>
              </div>
              <!-- /.info-box-content -->
            </a>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

        <div class="row">
          <div class="col-12">
            <!-- TABLE -->
            <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">Customer List</h3>

                <div class="card-tools">
                  <div class="btn-group">
                    <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
                      <i class="fas fa-filter"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-filter" style="padding: 0;">
                      <div class="card" style="margin: 0; min-width: 500px;">
                        <div class="card-body">
                          <div class="row">
                            <div class="col-sm-6">
                              <!-- select -->
                              <div class="form-group">
                                <label>Group</label>
                                <select class="form-control">
                                  <option>Group A</option>
                                  <option>Group B</option>
                                  <option>Group C</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="form-group">
                                <label>Status</label>
                                <select class="form-control">
                                  <option>Pending</option>
                                  <option>Called</option>
                                  <option>Schedule</option>
                                  <option>Contracted</option>
                                </select>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="card-footer">
                          <button class="btn btn-info float-right">Filter</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="btn-group">
                    <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
                      <i class="fas fa-wrench"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" role="menu">
                      <a type="button" class="dropdown-item" data-toggle="modal" data-target="#modal-new">
                        <i class="fas fa-user-plus"></i>
                        Add New
                      </a>
                      <a href="javascript:;" class="dropdown-item">
                        <i class="fas fa-upload"></i>
                        Export to Excel
                      </a>
                      <a href="javascript:;" class="dropdown-item">
                        <i class="fas fa-download"></i>
                        Import from Excel
                      </a>
                    </div>
                  </div>
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table m-0">
                    <thead>
                      <tr>
                        <th>Name
                          <button class="btn btn-tool">
                            <i class="fas fa-minus"></i>
                          </button>
                        </th>
                        <th>Email
                          <button class="btn btn-tool">
                            <i class="fas fa-minus"></i>
                          </button>
                        </th>
                        <th>Phone
                          <button class="btn btn-tool">
                            <i class="fas fa-minus"></i>
                          </button>
                        </th>
                        <th>Group
                          <button class="btn btn-tool">
                            <i class="fas fa-minus"></i>
                          </button>
                        </th>
                        <th>Status
                          <button class="btn btn-tool">
                            <i class="fas fa-minus"></i>
                          </button>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><a href="javascript:;" data-toggle="modal" data-target="#modal-detail">Alexander Pierce</a></td>
                        <td>abcxyz1@gmail.com</td>
                        <td>0123456xx1</td>
                        <td>Group A</td>
                        <td><span class="badge badge-success">Called</span></td>
                      </tr>
                      <tr>
                        <td><a href="javascript:;" data-toggle="modal" data-target="#modal-detail">Norman</a></td>
                        <td>abcxyz2@gmail.com</td>
                        <td>0123456xx2</td>
                        <td>Group B</td>
                        <td><span class="badge badge-secondary">Pending</span></td>
                      </tr>
                      <tr>
                        <td><a href="javascript:;" data-toggle="modal" data-target="#modal-detail">Jane</a></td>
                        <td>abcxyz3@gmail.com</td>
                        <td>0123456xx3</td>
                        <td>Group C</td>
                        <td><span class="badge badge-info">Schedule</span></td>
                      </tr>
                      <tr>
                        <td><a href="javascript:;" data-toggle="modal" data-target="#modal-detail">Alexander Pierce</a></td>
                        <td>abcxyz1@gmail.com</td>
                        <td>0123456xx1</td>
                        <td>Group A</td>
                        <td><span class="badge badge-success">Called</span></td>
                      </tr>
                      <tr>
                        <td><a href="javascript:;" data-toggle="modal" data-target="#modal-detail">Norman</a></td>
                        <td>abcxyz2@gmail.com</td>
                        <td>0123456xx2</td>
                        <td>Group B</td>
                        <td><span class="badge badge-secondary">Pending</span></td>
                      </tr>
                      <tr>
                        <td><a href="javascript:;" data-toggle="modal" data-target="#modal-detail">Jane</a></td>
                        <td>abcxyz3@gmail.com</td>
                        <td>0123456xx3</td>
                        <td>Group C</td>
                        <td><span class="badge badge-info">Schedule</span></td>
                      </tr>
                      <tr>
                        <td><a href="javascript:;" data-toggle="modal" data-target="#modal-detail">Jane</a></td>
                        <td>abcxyz3@gmail.com</td>
                        <td>0123456xx3</td>
                        <td>Group C</td>
                        <td><span class="badge badge-warning">Contracted</span></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix text-center">
                <a href="javascript:;" class="btn btn-sm btn-secondary float-left">
                  <i class="fas fa-chevron-left"></i>
                  <i class="fas fa-chevron-left"></i>
                </a>
                <span>Page 1/30</span>
                <a href="javascript:;" class="btn btn-sm btn-secondary float-right">
                  <i class="fas fa-chevron-right"></i>
                  <i class="fas fa-chevron-right"></i>
                </a>
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

        <div class="row">
          <div class="col-sm-4">
              <!-- TABLE -->
            <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">Group A</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table m-0">
                    <thead>
                      <tr>
                        <th>Name
                          <button class="btn btn-tool">
                            <i class="fas fa-minus"></i>
                          </button>
                        </th>
                        <th>Status
                          <button class="btn btn-tool">
                            <i class="fas fa-minus"></i>
                          </button>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><a href="javascript:;" data-toggle="modal" data-target="#modal-detail">Alexander Pierce</a></td>
                        <td><span class="badge badge-success">Called</span></td>
                      </tr>
                      <tr>
                        <td><a href="javascript:;" data-toggle="modal" data-target="#modal-detail">Norman</a></td>
                        <td><span class="badge badge-secondary">Pending</span></td>
                      </tr>
                      <tr>
                        <td><a href="javascript:;" data-toggle="modal" data-target="#modal-detail">Jane</a></td>
                        <td><span class="badge badge-info">Schedule</span></td>
                      </tr>
                      <tr>
                        <td><a href="javascript:;" data-toggle="modal" data-target="#modal-detail">Alexander Pierce</a></td>
                        <td><span class="badge badge-success">Called</span></td>
                      </tr>
                      <tr>
                        <td><a href="javascript:;" data-toggle="modal" data-target="#modal-detail">Norman</a></td>
                        <td><span class="badge badge-secondary">Pending</span></td>
                      </tr>
                      <tr>
                        <td><a href="javascript:;" data-toggle="modal" data-target="#modal-detail">Jane</a></td>
                        <td><span class="badge badge-info">Schedule</span></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix text-center">
                <a href="javascript:;" class="btn btn-sm btn-secondary float-left">
                  <i class="fas fa-chevron-left"></i>
                  <i class="fas fa-chevron-left"></i>
                </a>
                <span>Page 1/30</span>
                <a href="javascript:;" class="btn btn-sm btn-secondary float-right">
                  <i class="fas fa-chevron-right"></i>
                  <i class="fas fa-chevron-right"></i>
                </a>
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-sm-4">
            <!-- TABLE -->
            <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">Group B</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table m-0">
                    <thead>
                      <tr>
                        <th>Name
                          <button class="btn btn-tool">
                            <i class="fas fa-minus"></i>
                          </button>
                        </th>
                        <th>Status
                          <button class="btn btn-tool">
                            <i class="fas fa-minus"></i>
                          </button>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><a href="javascript:;" data-toggle="modal" data-target="#modal-detail">Alexander Pierce</a></td>
                        <td><span class="badge badge-success">Called</span></td>
                      </tr>
                      <tr>
                        <td><a href="javascript:;" data-toggle="modal" data-target="#modal-detail">Norman</a></td>
                        <td><span class="badge badge-secondary">Pending</span></td>
                      </tr>
                      <tr>
                        <td><a href="javascript:;" data-toggle="modal" data-target="#modal-detail">Jane</a></td>
                        <td><span class="badge badge-info">Schedule</span></td>
                      </tr>
                      <tr>
                        <td><a href="javascript:;" data-toggle="modal" data-target="#modal-detail">Alexander Pierce</a></td>
                        <td><span class="badge badge-success">Called</span></td>
                      </tr>
                      <tr>
                        <td><a href="javascript:;" data-toggle="modal" data-target="#modal-detail">Norman</a></td>
                        <td><span class="badge badge-secondary">Pending</span></td>
                      </tr>
                      <tr>
                        <td><a href="javascript:;" data-toggle="modal" data-target="#modal-detail">Jane</a></td>
                        <td><span class="badge badge-info">Schedule</span></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix text-center">
                <a href="javascript:;" class="btn btn-sm btn-secondary float-left">
                  <i class="fas fa-chevron-left"></i>
                  <i class="fas fa-chevron-left"></i>
                </a>
                <span>Page 1/30</span>
                <a href="javascript:;" class="btn btn-sm btn-secondary float-right">
                  <i class="fas fa-chevron-right"></i>
                  <i class="fas fa-chevron-right"></i>
                </a>
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-sm-4">
            <!-- TABLE -->
            <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">Group C</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table m-0">
                    <thead>
                      <tr>
                        <th>Name
                          <button class="btn btn-tool">
                            <i class="fas fa-minus"></i>
                          </button>
                        </th>
                        <th>Status
                          <button class="btn btn-tool">
                            <i class="fas fa-minus"></i>
                          </button>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><a href="javascript:;" data-toggle="modal" data-target="#modal-detail">Alexander Pierce</a></td>
                        <td><span class="badge badge-success">Called</span></td>
                      </tr>
                      <tr>
                        <td><a href="javascript:;" data-toggle="modal" data-target="#modal-detail">Norman</a></td>
                        <td><span class="badge badge-secondary">Pending</span></td>
                      </tr>
                      <tr>
                        <td><a href="javascript:;" data-toggle="modal" data-target="#modal-detail">Jane</a></td>
                        <td><span class="badge badge-info">Schedule</span></td>
                      </tr>
                      <tr>
                        <td><a href="javascript:;" data-toggle="modal" data-target="#modal-detail">Alexander Pierce</a></td>
                        <td><span class="badge badge-success">Called</span></td>
                      </tr>
                      <tr>
                        <td><a href="javascript:;" data-toggle="modal" data-target="#modal-detail">Norman</a></td>
                        <td><span class="badge badge-secondary">Pending</span></td>
                      </tr>
                      <tr>
                        <td><a href="javascript:;" data-toggle="modal" data-target="#modal-detail">Jane</a></td>
                        <td><span class="badge badge-info">Schedule</span></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix text-center">
                <a href="javascript:;" class="btn btn-sm btn-secondary float-left">
                  <i class="fas fa-chevron-left"></i>
                  <i class="fas fa-chevron-left"></i>
                </a>
                <span>Page 1/30</span>
                <a href="javascript:;" class="btn btn-sm btn-secondary float-right">
                  <i class="fas fa-chevron-right"></i>
                  <i class="fas fa-chevron-right"></i>
                </a>
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!--/. container-fluid -->

      <div class="modal fade" id="modal-new">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header justify-content-center">
              <h4 class="modal-title">ADD NEW</h4>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-sm-6 text-center">
                  <div class="row justify-content-center">
                    <img src="{{url('resources/img/user2-160x160.jpg')}}" alt="User Image" class="rounded-circle">
                  </div>
                  <div class="row mt-2 justify-content-center">
                    <button class="btn btn-success mx-1"><i class="fas fa-file-image-o"></i> Change IMAGE</button>
                  </div>
                  <div class="row mt-2 justify-content-center">
                    <span>Asign for new customer</span>
                  </div>
                </div>
                <div class="col-sm-6">
                  <!-- text input -->
                  <div class="form-group">
                    <label>Customer Name</label>
                    <input type="text" class="form-control">
                    <label>Email</label>
                    <input type="text" class="form-control">
                    <label>Number Phone</label>
                    <input type="text" class="form-control">
                    <label>Address</label>
                    <input type="text" class="form-control">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <!-- textarea -->
                  <div class="form-group">
                    <label>Describe</label>
                    <textarea class="form-control" rows="4"></textarea>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-6">
                  <!-- select -->
                  <div class="form-group">
                    <label>Group</label>
                    <select class="form-control">
                      <option>Group A</option>
                      <option>Group B</option>
                      <option>Group C</option>
                    </select>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Region</label>
                    <select class="form-control">
                      <option>North</option>
                      <option>Center</option>
                      <option>South</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button class="btn btn-default" data-dismiss="modal">Close</button>
              <button class="btn btn-primary swalDefaultSuccess">Save</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->

      <div class="modal fade" id="modal-detail">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-body">
              <div class="row">
                <div class="col-12">
                  <div class="card card-primary card-tabs">
                    <div class="card-header p-0 pt-1">
                      <ul class="nav nav-tabs" id="custom-tabs-two-tab" role="tablist">
                        <li class="pt-2 px-3"><h3 class="card-title">Detail</h3></li>
                        <li class="nav-item">
                          <a class="nav-link active" id="detail-profile-tab" data-toggle="pill" href="#detail-profile" role="tab" aria-controls="detail-profile" aria-selected="true">Profile</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="detail-schedule-tab" data-toggle="pill" href="#detail-schedule" role="tab" aria-controls="detail-schedule" aria-selected="false">Schedule</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="detaile-note-tab" data-toggle="pill" href="#detail-note" role="tab" aria-controls="detail-note" aria-selected="false">Note</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="detaile-contract-tab" data-toggle="pill" href="#detail-contract" role="tab" aria-controls="detail-contract" aria-selected="false">Contract</a>
                        </li>
                      </ul>
                    </div>
                    <div class="card-body">
                      <div class="tab-content" id="custom-tabs-two-tabContent">
                        <div class="tab-pane fade show active" id="detail-profile" role="tabpanel" aria-labelledby="detail-profile-tab">
                          <div class="row">
                            <div class="col-sm-6 text-center">
                              <img src="{{url('resources/img/user2-160x160.jpg')}}" alt="User Image" class="rounded-circle">
                              <div class="row mt-2 justify-content-center">
                                <label>Alexander Pierce</label>
                              </div>
                              <div class="row justify-content-center">
                                <span class="badge badge-danger mx-1">Admin</span>
                                <span class="badge badge-warning mx-1">Leader</span>
                                <span class="badge badge-success mx-1">Employee</span>
                              </div>
                              <div class="row mt-2 justify-content-center">
                                <button class="btn btn-success mx-1 toastsPhone"><i class="fas fa-phone"></i> Call</button>
                                <button class="btn btn-success mx-1 swalDefaultSuccess"><i class="fas fa-comments"></i> Message</button>
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <!-- text input -->
                              <div class="form-group">
                                <label>Customer Name</label>
                                <input type="text" class="form-control">
                                <label>Email</label>
                                <input type="text" class="form-control">
                                <label>Number Phone</label>
                                <input type="text" class="form-control">
                                <label>Address</label>
                                <input type="text" class="form-control">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-12">
                              <!-- textarea -->
                              <div class="form-group">
                                <label>Describe</label>
                                <textarea class="form-control" rows="4"></textarea>
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-sm-6">
                              <!-- select -->
                              <div class="form-group">
                                <label>Group</label>
                                <select class="form-control">
                                  <option>Group A</option>
                                  <option>Group B</option>
                                  <option>Group C</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="form-group">
                                <label>Region</label>
                                <select class="form-control">
                                  <option>North</option>
                                  <option>Center</option>
                                  <option>South</option>
                                </select>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-12">
                              <button class="btn btn-danger swalDefaultError" data-toggle="modal" data-target="#modal-warning">Delete</button>
                              <button class="btn btn-primary float-right swalDefaultSuccess">Save changes</button>
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane fade" id="detail-schedule" role="tabpanel" aria-labelledby="detail-schedule-tab">
                          <div class="row my-2">
                            <div class="col-12">
                              <div class="row">
                                <div class="col-12">
                                  <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Enter Date">
                                    <button class="btn btn-primary float-right mt-2 swalDefaultSuccess">Save changes</button>
                                  </div>
                                </div>
                              </div>
                              <div class="row my-2">
                                <div class="col-12">
                                  <!-- TABLE -->
                                  <div class="card">
                                    <!-- /.card-header -->
                                    <div class="card-body p-0">
                                      <div class="table-responsive">
                                        <table class="table m-0">
                                          <thead>
                                            <tr>
                                              <th>Date</th>
                                              <th>Content</th>
                                            </tr>
                                          </thead>
                                          <tbody>
                                            <tr>
                                              <td>dd/mm/yyyy</td>
                                              <td>Morbi turpis dolor, vulputate vitae felis non, tincidunt congue mauris.</td>
                                            </tr>
                                            <tr>
                                              <td>dd/mm/yyyy</td>
                                              <td>Morbi turpis dolor, vulputate vitae felis non, tincidunt congue mauris.</td>
                                            </tr>
                                          </tbody>
                                        </table>
                                      </div>
                                      <!-- /.table-responsive -->
                                    </div>
                                    <!-- /.card-body -->
                                  </div>
                                  <!-- /.card -->
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane fade" id="detail-note" role="tabpanel" aria-labelledby="detaile-note-tab">
                          <div class="row my-2">
                            <div class="col-12">
                              <div class="row">
                                <div class="col-12">
                                  <!-- textarea -->
                                  <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Enter Title">
                                    <textarea class="form-control" rows="4"></textarea>
                                    <button class="btn btn-primary float-right mt-2 swalDefaultSuccess">Save changes</button>
                                  </div>
                                </div>
                              </div>
                              <div class="row my-2">
                                <div class="col-12">
                                  <!-- TABLE -->
                                  <div class="card">
                                    <!-- /.card-header -->
                                    <div class="card-body p-0">
                                      <div class="table-responsive">
                                        <table class="table m-0">
                                          <thead>
                                            <tr>
                                              <th>Title</th>
                                              <th>Content</th>
                                              <th>Date</th>
                                              <th>Employee</th>
                                            </tr>
                                          </thead>
                                          <tbody>
                                            <tr>
                                              <td>Title 1</td>
                                              <td>Morbi turpis dolor, vulputate vitae felis non, tincidunt congue mauris.</td>
                                              <td>dd/mm/yyyy</td>
                                              <td>Employee 1</td>
                                            </tr>
                                            <tr>
                                              <td>Title 2</td>
                                              <td>Morbi turpis dolor, vulputate vitae felis non, tincidunt congue mauris.</td>
                                              <td>dd/mm/yyyy</td>
                                              <td>Employee 2</td>
                                            </tr>
                                          </tbody>
                                        </table>
                                      </div>
                                      <!-- /.table-responsive -->
                                    </div>
                                    <!-- /.card-body -->
                                  </div>
                                  <!-- /.card -->
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane fade" id="detail-contract" role="tabpanel" aria-labelledby="detaile-contract-tab">
                          <div class="row my-2">
                            <div class="col-12">
                              <div class="row">
                                <div class="col-12">
                                  <!-- textarea -->
                                  <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Enter Title">
                                    <textarea class="form-control" rows="4"></textarea>
                                    <button class="btn btn-primary float-right mt-2 swalDefaultSuccess">Save changes</button>
                                  </div>
                                </div>
                              </div>
                              <div class="row my-2">
                                <div class="col-12">
                                  <!-- TABLE -->
                                  <div class="card">
                                    <!-- /.card-header -->
                                    <div class="card-body p-0">
                                      <div class="table-responsive">
                                        <table class="table m-0">
                                          <thead>
                                            <tr>
                                              <th>Title</th>
                                              <th>Content</th>
                                              <th>File</th>
                                              <th>Employee</th>
                                            </tr>
                                          </thead>
                                          <tbody>
                                            <tr>
                                              <td>Title 1</td>
                                              <td>Morbi turpis dolor, vulputate vitae felis non, tincidunt congue mauris.</td>
                                              <td>contract.docx</td>
                                              <td>Employee 1</td>
                                            </tr>
                                            <tr>
                                              <td>Title 2</td>
                                              <td>Morbi turpis dolor, vulputate vitae felis non, tincidunt congue mauris.</td>
                                              <td>contract.docx</td>
                                              <td>Employee 2</td>
                                            </tr>
                                          </tbody>
                                        </table>
                                      </div>
                                      <!-- /.table-responsive -->
                                    </div>
                                    <!-- /.card-body -->
                                  </div>
                                  <!-- /.card -->
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /.card -->
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->

      <div class="modal fade" id="modal-warning">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header bg-warning justify-content-center">
              <h4 class="modal-title">Warning</h4>
            </div>
            <div class="modal-body text-center">
              <p>Really want to Delete?</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
              <button type="button" class="btn btn-warning swalDefaultSuccess">Yes</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
