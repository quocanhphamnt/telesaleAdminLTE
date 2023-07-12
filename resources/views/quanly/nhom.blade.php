@extends('layouts.app')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Danh sách nhóm</h1>
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
                                            <select class="form-control filter btn btn-info" data-column-index='1'>
                                                <option value="" selected>Trưởng nhóm</option>
                                                @foreach ($user as $item)
                                                    <option value="{{$item->id}}">{{$item->name}}</option>
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
                                        <th>Tên nhóm</th>
                                        <th>Trưởng nhóm</th>
                                        <th>Mô tả</th>
                                        <th>Ngày tạo</th>
                                        <th data-orderable="false"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($group as $item)
                                    <tr>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->user}}</td>
                                        <td>{{$item->describe}}</td>
                                        <td>{{$item->created_at}}</td>
                                        <td>
                                            <button type="button" class="btn btn-info editor" value="{{$item->id}}" data-toggle="modal" data-target="#modal-detail" data-id="{{$loop->index}}">
                                                <i class="fas fa-edit"></i>
                                                Chi tiết
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
                                <div class="form-group">
                                    <label>Tên nhóm</label>
                                    <input type="text" class="form-control" id="addName">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Trưởng phòng</label>
                                    <select class="form-control" id="addUser">
                                        @foreach ($user as $item)
                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
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
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Chỉnh sửa Nhóm</h4>
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
                                            <div class="col-sm-6">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <input type="hidden" class="form-control" id="detailID">
                                                    <input type="hidden" class="form-control" id="detailRow">
                                                    <label>Tên nhóm</label>
                                                    <input type="text" class="form-control" id="detailName">
                                                    <label>Trưởng phòng</label>
                                                    <select class="form-control" id="detailUser">
                                                        @foreach ($user as $item)
                                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                                        @endforeach
                                                    </select>
                                                    <label>Ngày khởi tạo</label>
                                                    <input type="text" class="form-control" id="detailDay">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label>Mô tả</label>
                                                    <textarea class="form-control" rows="4" id="detailDescribe"></textarea>
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
            'user': $('#addUser').val(),
            'describe': $('#addDescribe').val(),
        }

        $.ajax({
            type: "POST",
            url: "addGroup",
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
                        response.group.name,
                        response.user.name,
                        response.group.describe,
                        response.group.created_at,
                        '<button type="button" class="btn btn-info editor" value="'+response.group.id+'" data-toggle="modal" data-target="#modal-detail" data-id="'+dtable.rows().count()+'">\
                            <i class="fas fa-edit"></i>\
                            Chi tiết\
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
        console.log(id);
        console.log(attr);

        $.ajax({
            type: "GET",
            url: "detailGroup/"+id,
            error: function (response) {
                console.log(response);
            },
            success: function (response) {
                console.log(response);
                if(response.status == 200) {
                    $('#detailID').val(response.group.id);
                    $('#detailRow').val(attr);
                    $('#detailName').val(response.group.name);
                    $('#detailUser').children('option[value="'+response.group.id_user+'"]').prop('selected', true);
                    $('#detailDay').val(response.group.created_at);
                    $('#detailDescribe').val(response.group.describe);
                }
            }
        });
    })

    $(document).on('submit', '#detail-profile', function(e) {
        e.preventDefault();
        var id = $('#detailID').val();
        var data = {
            'name': $('#detailName').val(),
            'user': $('#detailUser').val(),
            'describe': $('#detailDescribe').val(),
        }

        $.ajax({
            type: "PUT",
            url: "updateGroup/"+id,
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
                    temp[0] = response.group.name;
                    temp[1] = response.user.name;
                    temp[2] = response.group.describe;
                    temp[3] = response.group.created_at;
                    temp[4] = '<button type="button" class="btn btn-info editor" value="'+response.group.id+'" data-toggle="modal" data-target="#modal-detail" data-id="'+attr+'">\
                                    <i class="fas fa-edit"></i>\
                                    Chi tiết\
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
            url: "deleteGroup/"+id,
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
