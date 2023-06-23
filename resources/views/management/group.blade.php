@extends('layout.body')

@section('main')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Group</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
              <li class="breadcrumb-item active">Group</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- TABLE -->
            <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">Group List</h3>

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

                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="form-group">

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
                        <th>Leader
                          <button class="btn btn-tool">
                            <i class="fas fa-minus"></i>
                          </button>
                        </th>
                        <th>Description
                          <button class="btn btn-tool">
                            <i class="fas fa-minus"></i>
                          </button>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><a href="javascript:;" data-toggle="modal" data-target="#modal-detail">Group A</a></td>
                        <td>Leader 1</td>
                        <td>Morbi turpis dolor, vulputate vitae felis non, tincidunt congue mauris.</td>
                      </tr>
                      <tr>
                        <td><a href="javascript:;" data-toggle="modal" data-target="#modal-detail">Group B</a></td>
                        <td>Leader 2</td>
                        <td>Morbi turpis dolor, vulputate vitae felis non, tincidunt congue mauris.</td>
                      </tr>
                      <tr>
                        <td><a href="javascript:;" data-toggle="modal" data-target="#modal-detail">Group C</a></td>
                        <td>Leader 3</td>
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
                <div class="col-12">
                  <!-- text input -->
                  <div class="form-group">
                    <label>Group Name</label>
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
                    <label>Leader</label>
                    <select class="form-control">
                      <option>Leader 1</option>
                      <option>Leader 2</option>
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
            <div class="modal-header justify-content-center">
              <h4 class="modal-title">Detail</h4>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-12">
                  <!-- text input -->
                  <div class="form-group">
                    <label>Group Name</label>
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
                    <label>Leader</label>
                    <select class="form-control">
                      <option>Leader 1</option>
                      <option>Leader 2</option>
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
