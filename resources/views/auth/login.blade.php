@extends('layout.document')

@section('body')
<div class="login-box">
<!-- /.login-logo -->
<div class="card card-outline card-primary">
    <div class="card-header text-center">
        <a href="javascript:;" class="h1">Telesale System</a>
    </div>
    <div class="card-body">
        <p class="login-box-msg">Đăng nhập</p>

        <form action="javascript:;" method="post">
            <div class="input-group mb-3">
                <input type="email" class="form-control" placeholder="Email">
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                </div>
            </div>
            </div>
            <div class="input-group mb-3">
                <input type="password" class="form-control" placeholder="Mật khẩu">
                <div class="input-group-append">
                    <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-7">
                    <div class="icheck-primary">
                        <input type="checkbox" id="remember">
                        <label for="remember">
                            Ghi nhớ tài khoản
                        </label>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-5">
                    <button type="submit" class="btn btn-primary btn-block">Đăng nhập</button>
                </div>
                <!-- /.col -->
            </div>
        </form>

        <p class="mb-1">
            <a href="javascript:;">Quên mật khẩu</a>
        </p>
        <p class="mb-0">
            <a href="register" class="text-center">Đăng ký tài khoản mới</a>
        </p>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->
</div>
<!-- /.login-box -->
@endsection
