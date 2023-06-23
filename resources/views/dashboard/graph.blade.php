@extends('layout.body')

@section('main')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <div class="content-header">
      <div class="container-fluid">
      <div class="row mb-2">
         <div class="col-sm-6">
            <h1 class="m-0">Graph</h1>
         </div><!-- /.col -->
         <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
            <li class="breadcrumb-item active">Graph</li>
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
      </div>
   </section>
   <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
