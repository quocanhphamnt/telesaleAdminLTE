@extends('layouts.document')

@section('body')
<div class="login-box">
    <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <a href="javascript:;" class="h1">{{ config('app.name') }}</a>
        </div>

        <div class="card-body">
            <p class="login-box-msg">Xác nhận địa chỉ email</p>
            @if (session('resent'))
                <div class="alert alert-success" role="alert">
                    Đường kink mới đã được gửi vào địa chỉ email
                </div>
            @endif

            Trước khi tiếp tục, hãy kiểm tra email có đường link xác nhận.

            Nếu bạn không thấy email phản hồi,
            <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                @csrf
                <button type="submit" class="btn btn-link p-0 m-0 align-baseline">nhấn để gửi lại</button>.
            </form>
        </div>
    </div>
</div>
@endsection
