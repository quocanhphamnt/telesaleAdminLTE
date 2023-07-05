@extends('layouts.app')
@extends('khachhang.script')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Danh sách khách hàng</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


    <!-- Button Group -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card m-0" style="background: none; box-shadow: none;">
                        <div class="card-body p-0">
                            <div class="row">
                                <div class="col-md-6">
                                    <a class="btn btn-app" type="button" data-toggle="modal" data-target="#modal-new">
                                        <i class="fas fa-plus"></i> Thêm mới
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <div class="margin float-right">
                                        <div class="btn-group mb-1">
                                            <button type="button" class="btn btn-info">Nhóm khách hàng</button>
                                            <button type="button" class="btn btn-info dropdown-toggle dropdown-icon" data-toggle="dropdown"></button>
                                            <div class="dropdown-menu" role="menu">
                                                <a class="dropdown-item" href="javascript:;">Nhóm A</a>
                                                <a class="dropdown-item" href="javascript:;">Nhóm B</a>
                                                <a class="dropdown-item" href="javascript:;">Nhóm C</a>
                                            </div>
                                        </div>
                                        <div class="btn-group mb-1">
                                            <button type="button" class="btn btn-success">Người phụ trách</button>
                                            <button type="button" class="btn btn-success dropdown-toggle dropdown-icon" data-toggle="dropdown"></button>
                                            <div class="dropdown-menu" role="menu">
                                                <a class="dropdown-item" href="javascript:;">Nhân viên 1</a>
                                                <a class="dropdown-item" href="javascript:;">Nhân viên 2</a>
                                                <a class="dropdown-item" href="javascript:;">Nhân viên 3</a>
                                            </div>
                                        </div>
                                        <div class="btn-group mb-1">
                                            <button type="button" class="btn btn-warning">Trạng thái</button>
                                            <button type="button" class="btn btn-warning dropdown-toggle dropdown-icon" data-toggle="dropdown"></button>
                                            <div class="dropdown-menu" role="menu">
                                                <a class="dropdown-item" href="javascript:;">Đã gọi</a>
                                                <a class="dropdown-item" href="javascript:;">Không trả lời</a>
                                                <a class="dropdown-item" href="javascript:;">Đặt hẹn</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Button Group -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Danh sách tổng</h3>
                        </div>
                        <div class="card-body">
                            <table id="tongkhachhang" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Tên khách hàng</th>
                                        <th>Email</th>
                                        <th>Số điện thoại</th>
                                        <th>Nhóm</th>
                                        <th>Người phụ trách</th>
                                        <th>Trạng thái</th>
                                        <th>Ngày tạo</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a href="javascript:;" data-toggle="modal" data-target="#modal-detail">Alexander Pierce</a></td>
                                        <td>abcxyz1@gmail.com</td>
                                        <td>0123456xx1</td>
                                        <td>Group A</td>
                                        <td>Tên nhân viên</td>
                                        <td><span class="badge badge-success">Đã gọi</span></td>
                                        <td>03/01/2023</td>
                                    </tr>
                                    <tr>
                                        <td><a href="javascript:;" data-toggle="modal" data-target="#modal-detail">Norman</a></td>
                                        <td>abcxyz2@gmail.com</td>
                                        <td>0123456xx2</td>
                                        <td>Group B</td>
                                        <td>Tên nhân viên</td>
                                        <td><span class="badge badge-secondary">Chưa gọi</span></td>
                                        <td>03/01/2023</td>
                                    </tr>
                                    <tr>
                                        <td><a href="javascript:;" data-toggle="modal" data-target="#modal-detail">Jane</a></td>
                                        <td>abcxyz3@gmail.com</td>
                                        <td>0123456xx3</td>
                                        <td>Group C</td>
                                        <td>Tên nhân viên</td>
                                        <td><span class="badge badge-danger">Không bắt máy</span></td>
                                        <td>03/01/2023</td>
                                    </tr>
                                        <tr>
                                        <td><a href="javascript:;" data-toggle="modal" data-target="#modal-detail">Alexander Pierce</a></td>
                                        <td>abcxyz1@gmail.com</td>
                                        <td>0123456xx1</td>
                                        <td>Group A</td>
                                        <td>Tên nhân viên</td>
                                        <td><span class="badge badge-success">Đã gọi</span></td>
                                        <td>03/01/2023</td>
                                    </tr>
                                        <tr>
                                        <td><a href="javascript:;" data-toggle="modal" data-target="#modal-detail">Norman</a></td>
                                        <td>abcxyz2@gmail.com</td>
                                        <td>0123456xx2</td>
                                        <td>Group B</td>
                                        <td>Tên nhân viên</td>
                                        <td><span class="badge badge-secondary">Chưa gọi</span></td>
                                        <td>03/01/2023</td>
                                    </tr>
                                        <tr>
                                        <td><a href="javascript:;" data-toggle="modal" data-target="#modal-detail">Jane</a></td>
                                        <td>abcxyz3@gmail.com</td>
                                        <td>0123456xx3</td>
                                        <td>Group C</td>
                                        <td>Tên nhân viên</td>
                                        <td><span class="badge badge-danger">Không bắt máy</span></td>
                                        <td>03/01/2023</td>
                                    </tr>
                                        <tr>
                                        <td><a href="javascript:;" data-toggle="modal" data-target="#modal-detail">Jane</a></td>
                                        <td>abcxyz3@gmail.com</td>
                                        <td>0123456xx3</td>
                                        <td>Group C</td>
                                        <td>Tên nhân viên</td>
                                        <td><span class="badge badge-info">Đặt hẹn</span></td>
                                        <td>03/01/2023</td>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <!-- TABLE -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Nhóm A</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Tên khách hàng</th>
                                        <th>Người phụ trách</th>
                                        <th>Trạng thái</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a href="javascript:;" data-toggle="modal" data-target="#modal-detail">Alexander Pierce</a></td>
                                        <td>Tên nhân viên</td>
                                        <td><span class="badge badge-success">Đã gọi</span></td>
                                    </tr>
                                    <tr>
                                        <td><a href="javascript:;" data-toggle="modal" data-target="#modal-detail">Norman</a></td>
                                        <td>Tên nhân viên</td>
                                        <td><span class="badge badge-secondary">Chưa gọi</span></td>
                                    </tr>
                                    <tr>
                                        <td><a href="javascript:;" data-toggle="modal" data-target="#modal-detail">Jane</a></td>
                                        <td>Tên nhân viên</td>
                                        <td><span class="badge badge-danger">Không bắt máy</span></td>
                                    </tr>
                                    <tr>
                                        <td><a href="javascript:;" data-toggle="modal" data-target="#modal-detail">Alexander Pierce</a></td>
                                        <td>Tên nhân viên</td>
                                        <td><span class="badge badge-success">Đã gọi</span></td>
                                    </tr>
                                        <tr>
                                        <td><a href="javascript:;" data-toggle="modal" data-target="#modal-detail">Norman</a></td>
                                        <td>Tên nhân viên</td>
                                        <td><span class="badge badge-secondary">Chưa gọi</span></td>
                                    </tr>
                                        <tr>
                                        <td><a href="javascript:;" data-toggle="modal" data-target="#modal-detail">Jane</a></td>
                                        <td>Tên nhân viên</td>
                                        <td><span class="badge badge-danger">Không bắt máy</span></td>
                                    </tr>
                                    <tr>
                                        <td><a href="javascript:;" data-toggle="modal" data-target="#modal-detail">Jane</a></td>
                                        <td>Tên nhân viên</td>
                                        <td><span class="badge badge-info">Đặt hẹn</span></td>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4">
                    <!-- TABLE -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Nhóm B</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Tên khách hàng</th>
                                        <th>Người phụ trách</th>
                                        <th>Trạng thái</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a href="javascript:;" data-toggle="modal" data-target="#modal-detail">Alexander Pierce</a></td>
                                        <td>Tên nhân viên</td>
                                        <td><span class="badge badge-success">Đã gọi</span></td>
                                    </tr>
                                    <tr>
                                        <td><a href="javascript:;" data-toggle="modal" data-target="#modal-detail">Norman</a></td>
                                        <td>Tên nhân viên</td>
                                        <td><span class="badge badge-secondary">Chưa gọi</span></td>
                                    </tr>
                                    <tr>
                                        <td><a href="javascript:;" data-toggle="modal" data-target="#modal-detail">Jane</a></td>
                                        <td>Tên nhân viên</td>
                                        <td><span class="badge badge-danger">Không bắt máy</span></td>
                                    </tr>
                                    <tr>
                                        <td><a href="javascript:;" data-toggle="modal" data-target="#modal-detail">Alexander Pierce</a></td>
                                        <td>Tên nhân viên</td>
                                        <td><span class="badge badge-success">Đã gọi</span></td>
                                    </tr>
                                        <tr>
                                        <td><a href="javascript:;" data-toggle="modal" data-target="#modal-detail">Norman</a></td>
                                        <td>Tên nhân viên</td>
                                        <td><span class="badge badge-secondary">Chưa gọi</span></td>
                                    </tr>
                                        <tr>
                                        <td><a href="javascript:;" data-toggle="modal" data-target="#modal-detail">Jane</a></td>
                                        <td>Tên nhân viên</td>
                                        <td><span class="badge badge-danger">Không bắt máy</span></td>
                                    </tr>
                                    <tr>
                                        <td><a href="javascript:;" data-toggle="modal" data-target="#modal-detail">Jane</a></td>
                                        <td>Tên nhân viên</td>
                                        <td><span class="badge badge-info">Đặt hẹn</span></td>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4">
                    <!-- TABLE -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Nhóm C</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Tên khách hàng</th>
                                        <th>Người phụ trách</th>
                                        <th>Trạng thái</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a href="javascript:;" data-toggle="modal" data-target="#modal-detail">Alexander Pierce</a></td>
                                        <td>Tên nhân viên</td>
                                        <td><span class="badge badge-success">Đã gọi</span></td>
                                    </tr>
                                    <tr>
                                        <td><a href="javascript:;" data-toggle="modal" data-target="#modal-detail">Norman</a></td>
                                        <td>Tên nhân viên</td>
                                        <td><span class="badge badge-secondary">Chưa gọi</span></td>
                                    </tr>
                                    <tr>
                                        <td><a href="javascript:;" data-toggle="modal" data-target="#modal-detail">Jane</a></td>
                                        <td>Tên nhân viên</td>
                                        <td><span class="badge badge-danger">Không bắt máy</span></td>
                                    </tr>
                                    <tr>
                                        <td><a href="javascript:;" data-toggle="modal" data-target="#modal-detail">Alexander Pierce</a></td>
                                        <td>Tên nhân viên</td>
                                        <td><span class="badge badge-success">Đã gọi</span></td>
                                    </tr>
                                        <tr>
                                        <td><a href="javascript:;" data-toggle="modal" data-target="#modal-detail">Norman</a></td>
                                        <td>Tên nhân viên</td>
                                        <td><span class="badge badge-secondary">Chưa gọi</span></td>
                                    </tr>
                                        <tr>
                                        <td><a href="javascript:;" data-toggle="modal" data-target="#modal-detail">Jane</a></td>
                                        <td>Tên nhân viên</td>
                                        <td><span class="badge badge-danger">Không bắt máy</span></td>
                                    </tr>
                                    <tr>
                                        <td><a href="javascript:;" data-toggle="modal" data-target="#modal-detail">Jane</a></td>
                                        <td>Tên nhân viên</td>
                                        <td><span class="badge badge-info">Đặt hẹn</span></td>
                                    </tr>
                                </tbody>
                            </table>
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
                    <div class="modal-header">
                        <h4 class="modal-title">Thêm mới</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Họ và Tên</label>
                                    <input type="text" class="form-control">
                                    <label>Email</label>
                                    <input type="text" class="form-control" placeholder="example@email.com">
                                    <label>Số điện thoại</label>
                                    <input type="text" class="form-control">
                                    <label>Địa chỉ</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Giới tính</label>
                                    <select class="form-control">
                                        <option>Nam</option>
                                        <option>Nữ</option>
                                    </select>
                                    <label>Nhóm</label>
                                    <select class="form-control">
                                        <option>Group A</option>
                                        <option>Group B</option>
                                        <option>Group C</option>
                                    </select>
                                    <label>Người phụ trách</label>
                                    <select class="form-control">
                                        <option>Nhân viên 1</option>
                                        <option>Nhân viên 2</option>
                                        <option>Nhân viên 3</option>
                                    </select>
                                    <label>Tỉnh thành</label>
                                    <select class="form-control">
                                        <option>Hà Nội</option>
                                        <option>Hồ Chí Minh</option>
                                        <option>Đà Nẵng</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <!-- textarea -->
                                <div class="form-group">
                                    <label>Mô tả</label>
                                    <textarea class="form-control" rows="4"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button class="btn btn-default" data-dismiss="modal">Đóng</button>
                        <button class="btn btn-primary swalDefaultSuccess">Lưu</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

        <div class="modal fade" id="modal-detail">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Hồ sơ khách hàng</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body p-0">
                        <div class="row">
                            <div class="col-12">
                                <div class="card card-tabs m-0">
                                    <div class="card-header p-0 pt-1">
                                        <ul class="nav nav-tabs" id="custom-tabs-two-tab" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="detail-profile-tab" data-toggle="pill" href="#detail-profile" role="tab" aria-controls="detail-profile" aria-selected="true">Thông tin</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="detail-dialog-tab" data-toggle="pill" href="#detail-dialog" role="tab" aria-controls="detail-dialog" aria-selected="false">Lịch sử cuộc gọi</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="detaile-note-tab" data-toggle="pill" href="#detail-note" role="tab" aria-controls="detail-note" aria-selected="false">Ghi chú</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="card-body">
                                        <div class="tab-content" id="custom-tabs-two-tabContent">
                                            <div class="tab-pane fade show active" id="detail-profile" role="tabpanel" aria-labelledby="detail-profile-tab">
                                                <div class="row">
                                                    <div class="col-sm-4 text-center">
                                                        <img src="{{url('resources/img/user2-160x160.jpg')}}" alt="User Image" class="rounded-circle">
                                                        <div class="row mt-2 justify-content-center">
                                                            <label>Alexander Pierce</label>
                                                        </div>
                                                        <div class="row justify-content-center">
                                                            <span class="badge badge-success mx-1">Đã gọi</span>
                                                        </div>
                                                        <div class="row mt-2 justify-content-center">
                                                            <button class="btn btn-success mx-1 toastsPhone"><i class="fas fa-phone"></i> Gọi</button>
                                                            <button class="btn btn-success mx-1 swalDefaultSuccess"><i class="fas fa-comments"></i> Nhắn tin</button>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <!-- text input -->
                                                        <div class="form-group">
                                                            <label>Tên khách hàng</label>
                                                            <input type="text" class="form-control">
                                                            <label>Email</label>
                                                            <input type="text" class="form-control">
                                                            <label>Số điện thoại</label>
                                                            <input type="text" class="form-control">
                                                            <label>Địa chỉ</label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <!-- text input -->
                                                        <div class="form-group">
                                                            <label>Giới tính</label>
                                                            <select class="form-control">
                                                                <option>Nam</option>
                                                                <option>Nữ</option>
                                                            </select>
                                                            <label>Nhóm</label>
                                                            <select class="form-control">
                                                                <option>Group A</option>
                                                                <option>Group B</option>
                                                                <option>Group C</option>
                                                            </select>
                                                            <label>Người phụ trách</label>
                                                            <select class="form-control">
                                                                <option>Nhân viên 1</option>
                                                                <option>Nhân viên 2</option>
                                                                <option>Nhân viên 3</option>
                                                            </select>
                                                            <label>Tỉnh thành</label>
                                                            <select class="form-control">
                                                                <option>Hà Nội</option>
                                                                <option>Hồ Chí Minh</option>
                                                                <option>Đà Nẵng</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-8">
                                                        <!-- textarea -->
                                                        <div class="form-group">
                                                            <label>Mô tả</label>
                                                            <textarea class="form-control" rows="4"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <!-- text input -->
                                                        <div class="form-group">
                                                            <label>Trạng thái</label>
                                                            <select class="form-control">
                                                                <option>Đã gọi</option>
                                                                <option>Không gọi được</option>
                                                            </select>
                                                            <label>Ngày khởi tạo</label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <button class="btn btn-danger swalDefaultError" data-toggle="modal" data-target="#modal-warning">Xóa</button>
                                                        <button class="btn btn-primary float-right swalDefaultSuccess">Lưu thay đổi</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="detail-dialog" role="tabpanel" aria-labelledby="detail-dialog-tab">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <!-- TABLE -->
                                                        <div class="card">
                                                            <!-- /.card-header -->
                                                            <div class="card-body p-0">
                                                                <div class="table-responsive">
                                                                    <table class="table table-bordered table-hover">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>Tên nhân viên</th>
                                                                                <th>Trạng thái</th>
                                                                                <th>Thời gian gọi</th>
                                                                                <th>Bắt đầu</th>
                                                                                <th>Kết thúc</th>
                                                                                <th>Nội dung</th>
                                                                                <th>Ghi chú</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td>Nhân viên 1</td>
                                                                                <td>Đã gọi</td>
                                                                                <td>360s</td>
                                                                                <td>9:24 01/04/2023</td>
                                                                                <td>9:30 01/04/2023</td>
                                                                                <td>File âm thanh</td>
                                                                                <td>Khách hàng hẹn lại cuộc gọi sau</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Nhân viên 1</td>
                                                                                <td>Đã gọi</td>
                                                                                <td>360s</td>
                                                                                <td>9:24 01/04/2023</td>
                                                                                <td>9:30 01/04/2023</td>
                                                                                <td>File âm thanh</td>
                                                                                <td>Khách hàng hẹn lại cuộc gọi sau</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Nhân viên 1</td>
                                                                                <td>Đã gọi</td>
                                                                                <td>360s</td>
                                                                                <td>9:24 01/04/2023</td>
                                                                                <td>9:30 01/04/2023</td>
                                                                                <td>File âm thanh</td>
                                                                                <td>Khách hàng hẹn lại cuộc gọi sau</td>
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
                                            <div class="tab-pane fade" id="detail-note" role="tabpanel" aria-labelledby="detaile-note-tab">

                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.card -->
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
