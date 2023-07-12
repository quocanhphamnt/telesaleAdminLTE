@extends('layouts.app')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Danh sách nhân viên</h1>
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
                                                <option value="" selected>Nhóm</option>
                                                @foreach ($group as $item)
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
                            <table id="list" class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Tên nhân viên</th>
                                        <th>Email</th>
                                        <th>Số điện thoại</th>
                                        <th>Nhóm</th>
                                        <th>Ngày tạo</th>
                                        <th data-orderable="false"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($user as $item)
                                    <tr>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->email}}</td>
                                        <td>{{$item->phone}}</td>
                                        <td>{{$item->group}}</td>
                                        <td>{{$item->created_at}}</td>
                                        <td>
                                            <button type="button" class="btn btn-info editor" value="{{$item->id}}" data-toggle="modal" data-target="#modal-detail" data-id="{{$loop->index}}">
                                                <i class="fas fa-edit"></i>
                                                Chi tiết
                                            </button>
                                            <button class="btn btn-success mx-1" value="{{$item->id}}">
                                                <i class="fas fa-phone"></i>
                                                Gọi
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
                <form class="modal-content" id="add">
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
                                    <label>Nhóm</label>
                                    <select class="form-control" id="addGroup">
                                        @foreach ($group as $item)
                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                        @endforeach
                                    </select>
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
                                    <label>Mật Khẩu</label>
                                    <input type="text" class="form-control" id="addPassword">
                                    <label>Địa chỉ</label>
                                    <input type="text" class="form-control" id="addAddress">
                                    <label>Chức vụ</label>
                                    <select class="form-control" id="addRole">
                                        @foreach ($role as $item)
                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                        @endforeach
                                    </select>
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
                        <h4 class="modal-title">Hồ sơ nhân viên</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body p-0">
                        <div class="row">
                            <div class="col-12">
                                <div class="card m-0">
                                    <form class="card-body" id="detail-profile">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <input type="hidden" class="form-control" id="detailID">
                                                    <input type="hidden" class="form-control" id="detailRow">
                                                    <label>Tên nhân viên</label>
                                                    <input type="text" class="form-control" id="detailName">
                                                    <label>Email</label>
                                                    <input type="text" class="form-control" id="detailEmail">
                                                    <label>Số điện thoại</label>
                                                    <input type="text" class="form-control" id="detailPhone">
                                                    <label>Nhóm</label>
                                                    <select class="form-control" id="detailGroup">
                                                        @foreach ($group as $item)
                                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                                        @endforeach
                                                    </select>

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
                                                    <label>Mật khẩu</label>
                                                    <input type="text" class="form-control" id="detailPassword">
                                                    <label>Địa chỉ</label>
                                                    <input type="text" class="form-control" id="detailAddress">
                                                    <label>Chức vụ</label>
                                                    <select class="form-control" id="detailRole">
                                                        @foreach ($role as $item)
                                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label>Ngày khởi tạo</label>
                                                    <input type="text" class="form-control" id="detailDay">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="message">

                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <button class="btn btn-danger" id="delete">Xóa</button>
                                                <button class="btn btn-primary float-right" type="submit">Lưu thay đổi</button>
                                            </div>
                                        </div>
                                    </form>
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
    var dtable = $('#list').DataTable({
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

    $(document).on('submit', '#add', function(e) {
        e.preventDefault();
        var data = {
            'name': $('#addName').val(),
            'email': $('#addEmail').val(),
            'password': $('#addPassword').val(),
            'phone': $('#addPhone').val(),
            'gender': $('#addGender').val(),
            'group': $('#addGroup').val(),
            'role': $('#addRole').val(),
            'address': $('#addAddress').val(),
        }

        $.ajax({
            type: "POST",
            url: "add",
            data: data,
            dataType: "json",
            error: function (response) {
                console.log(response);
            },
            success: function (response) {
                console.log(response);
                if(response.status == 404) {
                    $('#add .message').html('');
                    $.each(response.errors, function (key, err_values) {
                        $('#add .message').append('<p class="text-danger m-0 p-0">'+err_values+'</p>');
                    });
                } else {
                    $('#modal-new').modal('hide');
                    $('#add .message').html('');
                    $('#add').find('input').val('');
                    dtable.row.add([
                        response.user.name,
                        response.user.email,
                        response.user.phone,
                        response.group.name,
                        response.user.created_at,
                        '<button type="button" class="btn btn-info editor" value="'+response.user.id+'" data-toggle="modal" data-target="#modal-detail" data-id="'+dtable.rows().count()+'">\
                            <i class="fas fa-edit"></i>\
                            Chi tiết\
                        </button>\
                        <button class="btn btn-success mx-1 toastsPhone" value="'+response.user.id+'">\
                            <i class="fas fa-phone"></i>\
                            Gọi\
                        </button>',
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
            url: "detailUser/"+id,
            error: function (response) {
                console.log(response);
            },
            success: function (response) {
                console.log(response);
                if(response.status == 200) {
                    $('#detailID').val(response.user.id);
                    $('#detailRow').val(attr);
                    $('#detailName').val(response.user.name);
                    $('#detailEmail').val(response.user.email);
                    $('#detailPhone').val(response.user.phone);
                    $('#detailPassword').val(response.user.password);
                    $('#detailAddress').val(response.user.address);
                    $('#detailGender').children('option[value="'+response.user.gender+'"]').prop('selected', true);
                    $('#detailRole').children('option[value="'+response.user.id_role+'"]').prop('selected', true);
                    $('#detailGroup').children('option[value="'+response.user__group.id_group+'"]').prop('selected', true);
                    $('#detailDay').val(response.user.created_at);
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
            'password': $('#detailPassword').val(),
            'role': $('#detailRole').val(),
        }

        $.ajax({
            type: "PUT",
            url: "updateUser/"+id,
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
                    temp[0] = response.user.name;
                    temp[1] = response.user.email;
                    temp[2] = response.user.phone;
                    temp[3] = response.group.name;
                    temp[4] = response.user.created_at;
                    temp[5] = '<button type="button" class="btn btn-info editor" value="'+response.user.id+'" data-toggle="modal" data-target="#modal-detail" data-id="'+attr+'">\
                                    <i class="fas fa-edit"></i>\
                                    Chi tiết\
                                </button>\
                                <button class="btn btn-success mx-1" value="'+response.user.id+'">\
                                    <i class="fas fa-phone"></i>\
                                    Gọi\
                                </button>';
                    dtable.row(attr).data(temp).draw(false);
                }
            }
        });
    });

    $(document).on('click', '#delete', function(e) {
        e.preventDefault();
        var id = $('#detailID').val();
        // console.log(id);

        $.ajax({
            type: "DELETE",
            url: "deleteUser/"+id,
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
