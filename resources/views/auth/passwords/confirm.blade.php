@extends('layouts.document')

@section('body')
<div class="login-box">
    <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <a href="javascript:;" class="h1">{{ config('app.name') }}</a>
        </div>

        <div class="card-body">
            <p class="login-box-msg">Xác nhận mật khẩu trước khi tiếp tục</p>

            <form method="POST" action="{{ route('password.confirm') }}">
                @csrf

                <div class="input-group mb-3">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Mật khẩu">
                    <div class="input-group-append">
                        <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                        </div>
                    </div>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="row mb-0 justify-content-end">
                    <div class="col-sm-7">
                        <button type="submit" class="btn btn-primary btn-block">Xác nhận mật khẩu</button>
                    </div>
                </div>

                <p class="mb-1">
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}">Quên mật khẩu</a>
                    @endif
                </p>
            </form>
        </div>
    </div>
</div>
@endsection
