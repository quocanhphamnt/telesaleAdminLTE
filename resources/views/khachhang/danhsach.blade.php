@extends('layouts.app')

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
                                            <select class="form-control filter btn btn-info" data-column-index='3'>
                                                <option value="" selected>Nhóm khách hàng</option>
                                                @foreach ($group as $item)
                                                    <option value="{{$item->name}}">{{$item->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="btn-group mb-1">
                                            <select class="form-control filter btn btn-success" data-column-index='4'>
                                                <option value="" selected>Người phụ trách</option>
                                                @foreach ($user as $item)
                                                    <option value="{{$item->name}}">{{$item->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="btn-group mb-1">
                                            <select class="form-control filter btn btn-default" data-column-index='5'>
                                                <option value="" selected>Trạng thái</option>
                                                @foreach ($status as $item)
                                                    <option value="{{$item->name}}">{{$item->name}}</option>
                                                @endforeach
                                            </select>
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
                            <table id="customerList" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Tên khách hàng</th>
                                        <th>Email</th>
                                        <th>Số điện thoại</th>
                                        <th>Nhóm</th>
                                        <th>Người phụ trách</th>
                                        <th>Trạng thái</th>
                                        <th>Ngày tạo</th>
                                        <th data-orderable="false"></th>
                                        <th data-orderable="false"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($customer as $item)
                                        <tr>
                                            <td>{{$item->name}}</td>
                                            <td>{{$item->email}}</td>
                                            <td>{{$item->phone}}</td>
                                            <td>{{$item->group}}</td>
                                            <td>{{$item->user}}</td>
                                            <td>{{$item->status}}</td>
                                            <td>{{$item->created_at}}</td>
                                            <td>
                                                <button type="button" class="btn btn-tool editor" value="{{$item->id}}" data-toggle="modal" data-target="#modal-detail" data-id="{{$loop->index}}">
                                                    <i class="fas fa-edit"></i>
                                                    Edit
                                                </button>
                                            </td>
                                            <td>
                                                <button class="btn btn-success mx-1 toastsPhone" value="{{$item->id}}">
                                                    <i class="fas fa-phone"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div><!--/. container-fluid -->

        <div class="modal fade" id="modal-new">
            <div class="modal-dialog modal-dialog-centered">
                <form class="modal-content" id="addCustomer">
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
                                    <input type="text" class="form-control" id="addName">
                                    <label>Email</label>
                                    <input type="text" class="form-control" id="addEmail" placeholder="example@email.com">
                                    <label>Số điện thoại</label>
                                    <input type="text" class="form-control" id="addPhone">
                                    <label>Địa chỉ</label>
                                    <input type="text" class="form-control" id="addAddress">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Giới tính</label>
                                    <select class="form-control" id="addGender">
                                        <option value="1">Nam</option>
                                        <option value="2">Nữ</option>
                                    </select>
                                    <label>Nhóm</label>
                                    <select class="form-control" id="addGroup">
                                        @foreach ($group as $item)
                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                    <label>Người phụ trách</label>
                                    <select class="form-control" id="addUser">
                                        @foreach ($user as $item)
                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                    <label>Tỉnh thành</label>
                                    <select class="form-control" id="addRegion">
                                        @foreach ($region as $item)
                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <!-- textarea -->
                                <div class="form-group">
                                    <label>Mô tả</label>
                                    <textarea class="form-control" rows="4" id="addDescribe"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="message">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button class="btn btn-default" data-dismiss="modal">Đóng</button>
                        <button class="btn btn-primary" type="submit">Lưu</button>
                    </div>
                </form>
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
                                            <form class="tab-pane fade show active" id="detail-profile" role="tabpanel" aria-labelledby="detail-profile-tab">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <!-- text input -->
                                                        <div class="form-group">
                                                            <input type="hidden" class="form-control" id="detailID">
                                                            <input type="hidden" class="form-control" id="detailRow">
                                                            <label>Tên khách hàng</label>
                                                            <input type="text" class="form-control" id="detailName">
                                                            <label>Email</label>
                                                            <input type="text" class="form-control" id="detailEmail">
                                                            <label>Số điện thoại</label>
                                                            <input type="text" class="form-control" id="detailPhone">
                                                            <label>Địa chỉ</label>
                                                            <input type="text" class="form-control" id="detailAddress">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <!-- text input -->
                                                        <div class="form-group">
                                                            <label>Giới tính</label>
                                                            <select class="form-control" id="detailGender">
                                                                <option value="1">Nam</option>
                                                                <option value="2">Nữ</option>
                                                            </select>
                                                            <label>Nhóm</label>
                                                            <select class="form-control" id="detailGroup">
                                                                @foreach ($group as $item)
                                                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                                                @endforeach
                                                            </select>
                                                            <label>Người phụ trách</label>
                                                            <select class="form-control" id="detailUser">
                                                                @foreach ($user as $item)
                                                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                                                @endforeach
                                                            </select>
                                                            <label>Tỉnh thành</label>
                                                            <select class="form-control" id="detailName"id="detailRegion">
                                                                @foreach ($region as $item)
                                                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <!-- text input -->
                                                        <div class="form-group">
                                                            <label>Trạng thái</label>
                                                            <select class="form-control" id="detailStatus">
                                                                @foreach ($status as $item)
                                                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                                                @endforeach
                                                            </select>
                                                            <label>Ngày khởi tạo</label>
                                                            <input type="text" class="form-control" id="detailDay">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-8">
                                                        <!-- textarea -->
                                                        <div class="form-group">
                                                            <label>Mô tả</label>
                                                            <textarea class="form-control" rows="4" id="detailDescribe"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="message">

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <button class="btn btn-danger" id="deleteCustomer">Xóa</button>
                                                        <button class="btn btn-primary float-right" type="submit">Lưu thay đổi</button>
                                                    </div>
                                                </div>
                                            </form>
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
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection

@section('script')
<script>
$( document ).ready(function() {
    var dtable = $('#customerList').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
    });

    $(document).on('change', '.filter', function(e) {
        e.preventDefault();
        //clear global search values
        dtable.search('');
        $('.filter').each(function () {
            var valueSelected = this.value;
            if(this.value.length){
                dtable.column($(this).data('columnIndex')).search(this.value);
            } else {
                dtable.column($(this).data('columnIndex')).search('');
            }
        });
        dtable.draw();
    });

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(document).on('submit', '#addCustomer', function(e) {
        e.preventDefault();
        var data = {
            'name': $('#addName').val(),
            'email': $('#addEmail').val(),
            'phone': $('#addPhone').val(),
            'address': $('#addAddress').val(),
            'gender': $('#addGender').val(),
            'group': $('#addGroup').val(),
            'user': $('#addUser').val(),
            'region': $('#addRegion').val(),
            'describe': $('#addDescribe').val(),
        }

        $.ajax({
            type: "POST",
            url: "addCustomer",
            data: data,
            dataType: "json",
            error: function (response) {
                console.log(response);
            },
            success: function (response) {
                console.log(response);
                if(response.status == 404) {
                    $('#addCustomer .message').html('');
                    $.each(response.errors, function (key, err_values) {
                        $('#addCustomer .message').append('<p class="text-danger m-0 p-0">'+err_values+'</p>');
                    });
                } else {
                    $('#modal-new').modal('hide');
                    $('#addCustomer .message').html('');
                    $('#addCustomer').find('input').val('');
                    dtable.row.add([
                        response.customer.name,
                        response.customer.email,
                        response.customer.phone,
                        response.user.name,
                        response.group.name,
                        response.status.name,
                        response.customer.created_at,
                        '<button type="button" class="btn btn-tool editor" value="'+response.customer.id+'" data-toggle="modal" data-target="#modal-detail" data-id="'+dtable.rows().count()+'"><i class="fas fa-edit"></i>Edit</button>',
                        '<button class="btn btn-success mx-1 toastsPhone" value="'+response.customer.id+'"><i class="fas fa-phone"></i></button>',
                    ]).draw();
                }
            }
        });
    });

    $(document).on('click', '.editor', function(e) {
        e.preventDefault();
        var id = $(this).val();
        var attr = $(this).attr("data-id");

        $.ajax({
            type: "GET",
            url: "detailCustomer/"+id,
            error: function (response) {
                console.log(response);
            },
            success: function (response) {
                console.log(response);
                if(response.status == 404) {

                } else {
                    $('#detailID').val(response.customer.id);
                    $('#detailRow').val(attr);
                    $('#detailName').val(response.customer.name);
                    $('#detailEmail').val(response.customer.email);
                    $('#detailPhone').val(response.customer.phone);
                    $('#detailAddress').val(response.customer.address);
                    $('#detailGender').children('option[value="'+response.customer.gender+'"]').prop('selected', true);
                    $('#detailGroup').children('option[value="'+response.customer.id_group+'"]').prop('selected', true);
                    $('#detailUser').children('option[value="'+response.user__customer.id_user+'"]').prop('selected', true);
                    $('#detailRegion').children('option[value="'+response.customer.region+'"]').prop('selected', true);
                    $('#detailStatus').children('option[value="'+response.customer.id_status+'"]').prop('selected', true);
                    $('#detailDay').val(response.customer.created_at);
                    $('#detailDescribe').val(response.customer.describe);
                }
            }
        });
    })

    $(document).on('submit', '#detail-profile', function(e) {
        e.preventDefault();
        var id = $('#detailID').val();
        var data = {
            'name': $('#detailName').val(),
            'email': $('#detailEmail').val(),
            'phone': $('#detailPhone').val(),
            'address': $('#detailAddress').val(),
            'gender': $('#detailGender').val(),
            'group': $('#detailGroup').val(),
            'user': $('#detailUser').val(),
            'region': $('#detailRegion').val(),
            'status': $('#detailStatus').val(),
            'describe': $('#detailDescribe').val(),
        }

        $.ajax({
            type: "PUT",
            url: "updateCustomer/"+id,
            data: data,
            dataType: "json",
            error: function (response) {
                console.log(response);
            },
            success: function (response) {
                console.log(response);
                if(response.status == 400) {
                    $('#detail-profile .message').html('');
                    $.each(response.errors, function (key, err_values) {
                        $('#detail-profile .message').append('<p class="text-danger m-0 p-0">'+err_values+'</p>');
                    });
                } else if(response.status == 404) {
                    $('#detail-profile .message').html('');
                    $('#detail-profile .message').append('<p class="text-danger m-0 p-0">'+response.message+'</p>');
                } else {
                    $('#modal-detail').modal('hide');
                    $('#detail-profile .message').html('');
                    $('#detail-profile').find('input').val('');

                    var attr = $('#detailRow').val();
                    var temp = dtable.row(attr).data();
                    temp[0] = response.customer.name;
                    temp[1] = response.customer.email;
                    temp[2] = response.customer.phone;
                    temp[3] = response.group.name;
                    temp[4] = response.user.name;
                    temp[5] = response.status.name;
                    temp[6] = response.customer.created_at;
                    temp[7] = '<button type="button" class="btn btn-tool editor" value="'+response.customer.id+'" data-toggle="modal" data-target="#modal-detail" data-id="'+attr+'"><i class="fas fa-edit"></i>Edit</button>',
                    temp[8] = '<button class="btn btn-success mx-1 toastsPhone" value="'+response.customer.id+'"><i class="fas fa-phone"></i></button>';
                    dtable.row(attr).data(temp).draw(false);
                }
            }
        });
    });

    $(document).on('click', '#deleteCustomer', function(e) {
            e.preventDefault();
            var id = $('#detailID').val();
            // console.log(id);

            $.ajax({
                type: "DELETE",
                url: "deleteCustomer/"+id,
                error: function (response) {
                    console.log(response);
                },
                success: function (response) {
                    console.log(response);
                    $('#modal-detail').modal('hide');

                    var attr = $('#detailRow').val();
                    dtable.row(attr).remove().draw();
                }
            });
        });
});
</script>
@endsection
