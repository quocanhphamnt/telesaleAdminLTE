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
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title">Weekly Recap Report</h5>

                <div class="card-tools">
                  <div class="btn-group">
                    <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
                      <i class="fas fa-wrench"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" role="menu">
                      <a href="javascript:;" class="dropdown-item">Daily</a>
                      <a href="javascript:;" class="dropdown-item">Weekly</a>
                      <a href="javascript:;" class="dropdown-item">Monthly</a>
                    </div>
                  </div>
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <p class="text-center">
                      <strong>1 Jan, 2014 - 30 Jul, 2014</strong>
                    </p>

                    <div class="chart">
                      <!-- cusStatus Chart Canvas -->
                      <canvas id="cusStatusChart" height="300"></canvas>
                    </div>
                    <!-- /.chart-responsive -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
              <!-- ./card-body -->
              <div class="card-footer">
                <div class="row">
                    <div class="col-sm-3 col-6">
                    <div class="description-block border-right">
                      <span class="description-percentage text-success"><i class="fas fa-caret-up"></i> 17%</span>
                      <h5 class="description-header">35,210</h5>
                      <span class="description-text">PENDING</span>
                    </div>
                    <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-3 col-6">
                    <div class="description-block border-right">
                      <span class="description-percentage text-warning"><i class="fas fa-caret-left"></i> 0%</span>
                      <h5 class="description-header">10,390</h5>
                      <span class="description-text">Called</span>
                    </div>
                    <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-3 col-6">
                    <div class="description-block border-right">
                      <span class="description-percentage text-success"><i class="fas fa-caret-up"></i> 20%</span>
                      <h5 class="description-header">24,813</h5>
                      <span class="description-text">Schedule</span>
                    </div>
                    <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-3 col-6">
                    <div class="description-block">
                      <span class="description-percentage text-danger"><i class="fas fa-caret-down"></i> 18%</span>
                      <h5 class="description-header">1,200</h5>
                      <span class="description-text">Contracted</span>
                    </div>
                    <!-- /.description-block -->
                    </div>
                </div>
                <!-- /.row -->
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <div class="col-md-2">
            <!-- MAP & BOX PANE -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Region Report</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="d-md-flex">
                  <div class="p-1 flex-fill" style="overflow: hidden">
                    <!-- Map will be created here -->
                    <div id="map-markers" style="height: auto;">
                      <div class="map"></div>
                    </div>
                  </div>
                </div><!-- /.d-md-flex -->
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->

          <div class="col-md-4">
            <!-- Info Boxes Style 2 -->
            <div class="info-box mb-3 bg-warning">
              <span class="info-box-icon"><i class="fas fa-tag"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Provinces</span>
                <span class="info-box-number">64</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
            <div class="info-box mb-3 bg-success">
              <span class="info-box-icon"><i class="far fa-heart"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Customers</span>
                <span class="info-box-number">92,050</span>
              </div>
              <!-- /.info-box-content -->
            </div>

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Region</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="col-md-8">
                    <div class="chart-responsive">
                      <canvas id="pieChart" height="150"></canvas>
                    </div>
                    <!-- ./chart-responsive -->
                  </div>
                  <!-- /.col -->
                  <div class="col-md-4">
                    <ul class="chart-legend clearfix">
                      <li><i class="far fa-circle text-danger"></i>North</li>
                      <li><i class="far fa-circle text-success"></i>Center</li>
                      <li><i class="far fa-circle text-warning"></i> South</li>
                    </ul>
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer p-0">
                <ul class="nav nav-pills flex-column">
                  <li class="nav-item">
                    <a href="javascript:;" class="nav-link">
                      North
                      <span class="float-right text-danger">
                        <i class="fas fa-arrow-down text-sm"></i>
                        12%</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="javascript:;" class="nav-link">
                      Center
                      <span class="float-right text-success">
                        <i class="fas fa-arrow-up text-sm"></i> 4%
                      </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="javascript:;" class="nav-link">
                      South
                      <span class="float-right text-warning">
                        <i class="fas fa-arrow-left text-sm"></i> 0%
                      </span>
                    </a>
                  </li>
                </ul>
              </div>
              <!-- /.footer -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-sm-6">
            <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">Region List</h3>

                <div class="card-tools">
                  <div class="btn-group">
                    <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
                      <i class="fas fa-filter"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" style="padding: 0;">
                      <div class="card" style="margin: 0; min-width: 500px;">
                        <div class="card-body">
                          <div class="row">
                            <div class="col-sm-6">
                              <!-- text input -->
                              <div class="form-group">
                                <label>Text</label>
                                <input type="text" class="form-control" placeholder="Enter ...">
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="form-group">
                                <label>Text</label>
                                <input type="text" class="form-control" placeholder="Enter ...">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-sm-6">
                              <!-- select -->
                              <div class="form-group">
                                <label>Select</label>
                                <select class="form-control">
                                  <option>option 1</option>
                                  <option>option 2</option>
                                  <option>option 3</option>
                                  <option>option 4</option>
                                  <option>option 5</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="form-group">
                                <label>Select</label>
                                <select class="form-control">
                                  <option>option 1</option>
                                  <option>option 2</option>
                                  <option>option 3</option>
                                  <option>option 4</option>
                                  <option>option 5</option>
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
                      <a href="javascript:;" class="dropdown-item">
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
                        <th>Quantity
                          <button class="btn btn-tool">
                            <i class="fas fa-minus"></i>
                          </button>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Hà Nội</td>
                        <td>3,372</td>
                      </tr>
                      <tr>
                        <td>Đà Nẵng</td>
                        <td>2,531</td>
                      </tr>
                      <tr>
                        <td>Hồ Chí Minh</td>
                        <td>1,489</td>
                      </tr>
                      <tr>
                        <td>Khánh Hòa</td>
                        <td>876</td>
                      </tr>
                      <tr>
                        <td>Vũng Tàu</td>
                        <td>789</td>
                      </tr>
                      <tr>
                        <td>Phú Yên</td>
                        <td>634</td>
                      </tr>
                      <tr>
                        <td>Cam Ranh</td>
                        <td>583</td>
                      </tr>
                      <tr>
                        <td>Đăk Lăk</td>
                        <td>476</td>
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
          <div class="col-md-6">
            <!-- DIRECT CHAT -->
            <div class="card direct-chat direct-chat-info">
              <div class="card-header">
                <h3 class="card-title">Direct Chat</h3>

                <div class="card-tools">
                  <span title="3 New Messages" class="badge badge-warning">3</span>
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" title="Contacts" data-widget="chat-pane-toggle">
                    <i class="fas fa-comments"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <!-- Conversations are loaded here -->
                <div class="direct-chat-messages">
                  <!-- Message. Default to the left -->
                  <div class="direct-chat-msg">
                    <div class="direct-chat-infos clearfix">
                      <span class="direct-chat-name float-left">Alexander Pierce</span>
                      <span class="direct-chat-timestamp float-right">23 Jan 2:00 pm</span>
                    </div>
                    <!-- /.direct-chat-infos -->
                    <img class="direct-chat-img" src="{{url('resources/img/user1-128x128.jpg')}}" alt="message user image">
                    <!-- /.direct-chat-img -->
                    <div class="direct-chat-text">
                      Is this template really for free? That's unbelievable!
                    </div>
                    <!-- /.direct-chat-text -->
                  </div>
                  <!-- /.direct-chat-msg -->

                  <!-- Message to the right -->
                  <div class="direct-chat-msg right float-right">
                    <div class="direct-chat-infos clearfix">
                      <span class="direct-chat-name float-right">Sarah Bullock</span>
                      <span class="direct-chat-timestamp float-left">23 Jan 2:05 pm</span>
                    </div>
                    <!-- /.direct-chat-infos -->
                    <img class="direct-chat-img" src="{{url('resources/img/user3-128x128.jpg')}}" alt="message user image">
                    <!-- /.direct-chat-img -->
                    <div class="direct-chat-text">
                      You better believe it!
                    </div>
                    <!-- /.direct-chat-text -->
                  </div>
                  <!-- /.direct-chat-msg -->

                  <!-- Message. Default to the left -->
                  <div class="direct-chat-msg">
                    <div class="direct-chat-infos clearfix">
                      <span class="direct-chat-name float-left">Alexander Pierce</span>
                      <span class="direct-chat-timestamp float-right">23 Jan 5:37 pm</span>
                    </div>
                    <!-- /.direct-chat-infos -->
                    <img class="direct-chat-img" src="{{url('resources/img/user1-128x128.jpg')}}" alt="message user image">
                    <!-- /.direct-chat-img -->
                    <div class="direct-chat-text">
                      Working with AdminLTE on a great new app! Wanna join?
                    </div>
                    <!-- /.direct-chat-text -->
                  </div>
                  <!-- /.direct-chat-msg -->

                  <!-- Message to the right -->
                  <div class="direct-chat-msg right float-right">
                    <div class="direct-chat-infos clearfix">
                      <span class="direct-chat-name float-right">Sarah Bullock</span>
                      <span class="direct-chat-timestamp float-left">23 Jan 6:10 pm</span>
                    </div>
                    <!-- /.direct-chat-infos -->
                    <img class="direct-chat-img" src="{{url('resources/img/user3-128x128.jpg')}}" alt="message user image">
                    <!-- /.direct-chat-img -->
                    <div class="direct-chat-text">
                      I would love to.
                    </div>
                    <!-- /.direct-chat-text -->
                  </div>
                  <!-- /.direct-chat-msg -->

                </div>
                <!--/.direct-chat-messages-->

                <!-- Contacts are loaded here -->
                <div class="direct-chat-contacts">
                  <ul class="contacts-list">
                    <li>
                      <a href="javascript:;">
                        <img class="contacts-list-img" src="{{url('resources/img/user1-128x128.jpg')}}" alt="User Avatar">

                        <div class="contacts-list-info">
                          <span class="contacts-list-name">
                            Count Dracula
                            <small class="contacts-list-date float-right">2/28/2015</small>
                          </span>
                          <span class="contacts-list-msg">How have you been? I was...</span>
                        </div>
                        <!-- /.contacts-list-info -->
                      </a>
                    </li>
                    <!-- End Contact Item -->
                    <li>
                      <a href="javascript:;">
                        <img class="contacts-list-img" src="{{url('resources/img/user7-128x128.jpg')}}" alt="User Avatar">

                        <div class="contacts-list-info">
                          <span class="contacts-list-name">
                            Sarah Doe
                            <small class="contacts-list-date float-right">2/23/2015</small>
                          </span>
                          <span class="contacts-list-msg">I will be waiting for...</span>
                        </div>
                        <!-- /.contacts-list-info -->
                      </a>
                    </li>
                    <!-- End Contact Item -->
                    <li>
                      <a href="javascript:;">
                        <img class="contacts-list-img" src="{{url('resources/img/user3-128x128.jpg')}}" alt="User Avatar">

                        <div class="contacts-list-info">
                          <span class="contacts-list-name">
                            Nadia Jolie
                            <small class="contacts-list-date float-right">2/20/2015</small>
                          </span>
                          <span class="contacts-list-msg">I'll call you back at...</span>
                        </div>
                        <!-- /.contacts-list-info -->
                      </a>
                    </li>
                    <!-- End Contact Item -->
                    <li>
                      <a href="javascript:;">
                        <img class="contacts-list-img" src="{{url('resources/img/user5-128x128.jpg')}}" alt="User Avatar">

                        <div class="contacts-list-info">
                          <span class="contacts-list-name">
                            Nora S. Vans
                            <small class="contacts-list-date float-right">2/10/2015</small>
                          </span>
                          <span class="contacts-list-msg">Where is your new...</span>
                        </div>
                        <!-- /.contacts-list-info -->
                      </a>
                    </li>
                    <!-- End Contact Item -->
                    <li>
                      <a href="javascript:;">
                        <img class="contacts-list-img" src="{{url('resources/img/user6-128x128.jpg')}}" alt="User Avatar">

                        <div class="contacts-list-info">
                          <span class="contacts-list-name">
                            John K.
                            <small class="contacts-list-date float-right">1/27/2015</small>
                          </span>
                          <span class="contacts-list-msg">Can I take a look at...</span>
                        </div>
                        <!-- /.contacts-list-info -->
                      </a>
                    </li>
                    <!-- End Contact Item -->
                    <li>
                      <a href="javascript:;">
                        <img class="contacts-list-img" src="{{url('resources/img/user8-128x128.jpg')}}" alt="User Avatar">

                        <div class="contacts-list-info">
                          <span class="contacts-list-name">
                            Kenneth M.
                            <small class="contacts-list-date float-right">1/4/2015</small>
                          </span>
                          <span class="contacts-list-msg">Never mind I found...</span>
                        </div>
                        <!-- /.contacts-list-info -->
                      </a>
                    </li>
                    <!-- End Contact Item -->
                  </ul>
                  <!-- /.contacts-list -->
                </div>
                <!-- /.direct-chat-pane -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <form action="javascript:;" method="post">
                  <div class="input-group">
                    <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                    <span class="input-group-append">
                      <button type="button" class="btn btn-info">Send</button>
                    </span>
                  </div>
                </form>
              </div>
              <!-- /.card-footer-->
            </div>
            <!--/.direct-chat -->
          </div>
          <!-- /.col -->

          <div class="col-md-6">
            <!-- USERS LIST -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Group Members</h3>

                <div class="card-tools">
                  <span class="badge badge-danger">8 New Members</span>
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <ul class="users-list clearfix">
                  <li>
                    <a href="javascript:;" data-toggle="modal" data-target="#modal-business">
                      <img src="{{url('resources/img/user1-128x128.jpg')}}" alt="User Image">
                      <span class="users-list-name">Alexander Pierce</span>
                      <span class="users-list-date">Today</span>
                    </a>
                  </li>
                  <li>
                    <a href="javascript:;" data-toggle="modal" data-target="#modal-business">
                      <img src="{{url('resources/img/user8-128x128.jpg')}}" alt="User Image">
                      <span class="users-list-name">Norman</span>
                      <span class="users-list-date">Yesterday</span>
                    </a>
                  </li>
                  <li>
                    <a href="javascript:;" data-toggle="modal" data-target="#modal-business">
                      <img src="{{url('resources/img/user7-128x128.jpg')}}" alt="User Image">
                      <span class="users-list-name">Jane</span>
                      <span class="users-list-date">12 Jan</span>
                    </a>
                  </li>
                  <li>
                    <a href="javascript:;" data-toggle="modal" data-target="#modal-business">
                      <img src="{{url('resources/img/user6-128x128.jpg')}}" alt="User Image">
                      <span class="users-list-name">John</span>
                      <span class="users-list-date">12 Jan</span>
                    </a>
                  </li>
                  <li>
                    <a href="javascript:;" data-toggle="modal" data-target="#modal-business">
                      <img src="{{url('resources/img/user1-128x128.jpg')}}" alt="User Image">
                      <span class="users-list-name">Alexander Pierce</span>
                      <span class="users-list-date">Today</span>
                    </a>
                  </li>
                  <li>
                    <a href="javascript:;" data-toggle="modal" data-target="#modal-business">
                      <img src="{{url('resources/img/user8-128x128.jpg')}}" alt="User Image">
                      <span class="users-list-name">Norman</span>
                      <span class="users-list-date">Yesterday</span>
                    </a>
                  </li>
                  <li>
                    <a href="javascript:;" data-toggle="modal" data-target="#modal-business">
                      <img src="{{url('resources/img/user7-128x128.jpg')}}" alt="User Image">
                      <span class="users-list-name">Jane</span>
                      <span class="users-list-date">12 Jan</span>
                    </a>
                  </li>
                  <li>
                    <a href="javascript:;" data-toggle="modal" data-target="#modal-business">
                      <img src="{{url('resources/img/user6-128x128.jpg')}}" alt="User Image">
                      <span class="users-list-name">John</span>
                      <span class="users-list-date">12 Jan</span>
                    </a>
                  </li>
                </ul>
                <!-- /.users-list -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer text-center">
                <a href="javascript:;">View All Members</a>
              </div>
              <!-- /.card-footer -->
            </div>
            <!--/.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

        <div class="row">
          <div class="col-12">
            <!-- TABLE: LATEST ORDERS -->
            <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">Customer List</h3>

                <div class="card-tools">
                  <div class="btn-group">
                    <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
                      <i class="fas fa-filter"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" style="padding: 0;">
                      <div class="card" style="margin: 0; min-width: 500px;">
                        <div class="card-body">
                          <div class="row">
                            <div class="col-sm-6">
                              <!-- text input -->
                              <div class="form-group">
                                <label>Text</label>
                                <input type="text" class="form-control" placeholder="Enter ...">
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="form-group">
                                <label>Text</label>
                                <input type="text" class="form-control" placeholder="Enter ...">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-sm-6">
                              <!-- select -->
                              <div class="form-group">
                                <label>Select</label>
                                <select class="form-control">
                                  <option>option 1</option>
                                  <option>option 2</option>
                                  <option>option 3</option>
                                  <option>option 4</option>
                                  <option>option 5</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="form-group">
                                <label>Select</label>
                                <select class="form-control">
                                  <option>option 1</option>
                                  <option>option 2</option>
                                  <option>option 3</option>
                                  <option>option 4</option>
                                  <option>option 5</option>
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
                      <a href="javascript:;" class="dropdown-item">
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
      </div><!--/. container-fluid -->

      <div class="modal fade" id="modal-detail">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header justify-content-center">
              <h4 class="modal-title">Details</h4>
            </div>
            <div class="modal-body">
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
                    <label>Text</label>
                    <input type="text" class="form-control" placeholder="Enter ...">
                    <label>Text</label>
                    <input type="text" class="form-control" placeholder="Enter ...">
                    <label>Text</label>
                    <input type="text" class="form-control" placeholder="Enter ...">
                    <label>Text</label>
                    <input type="text" class="form-control" placeholder="Enter ...">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <!-- textarea -->
                  <div class="form-group">
                    <label>Textarea</label>
                    <textarea class="form-control" rows="4" placeholder="Enter ..."></textarea>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-6">
                  <!-- checkbox -->
                  <div class="form-group">
                    <label>Check List</label>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox">
                      <label class="form-check-label">Checkbox</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" checked>
                      <label class="form-check-label">Checkbox checked</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox">
                      <label class="form-check-label">Checkbox</label>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <!-- radio -->
                  <div class="form-group">
                    <label>Radio List</label>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="radio1">
                      <label class="form-check-label">Radio</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="radio1" checked>
                      <label class="form-check-label">Radio checked</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="radio1">
                      <label class="form-check-label">Radio</label>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-6">
                  <!-- select -->
                  <div class="form-group">
                    <label>Select</label>
                    <select class="form-control">
                      <option>option 1</option>
                      <option>option 2</option>
                      <option>option 3</option>
                      <option>option 4</option>
                      <option>option 5</option>
                    </select>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Select</label>
                    <select class="form-control">
                      <option>option 1</option>
                      <option>option 2</option>
                      <option>option 3</option>
                      <option>option 4</option>
                      <option>option 5</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button class="btn btn-default" data-dismiss="modal">Close</button>
              <button class="btn btn-primary swalDefaultSuccess">Save changes</button>
              <button class="btn btn-danger swalDefaultError" data-toggle="modal" data-target="#modal-warning">Delete</button>
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

      <div class="modal fade" id="modal-business">
        <div class="modal-dialog modal-dialog-centered modal-sm">
          <div class="modal-content">
            <div class="modal-body text-center">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <div class="row">
                <div class="col-12 text-center">
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
                    <button class="btn btn-success mx-1"><i class="fas fa-comments"></i> Message</button>
                  </div>
                </div>
              </div>
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
