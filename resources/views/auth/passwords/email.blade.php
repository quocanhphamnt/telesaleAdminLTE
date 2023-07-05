@extends('layouts.document')

@section('body')
<div class="login-box">
    <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <a href="javascript:;" class="h1">{{ config('app.name') }}</a>
        </div>

        <div class="card-body">
            <p class="login-box-msg h4">Đặt lại mật khẩu</p>

            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <div class="input-group mb-3">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="row mb-1 justify-content-end">
                    <div class="col-sm-7">
                        <button type="submit" class="btn btn-primary btn-block">Gửi link mật khẩu</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
