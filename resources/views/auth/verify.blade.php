@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verifikasi Alamat Email Anda') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Link terbaru telah dikirimkan ke alamat email anda.') }}
                        </div>
                    @endif

                    {{ __('Sebelum melanjutkan, tolong periksa link verifikasi email anda.') }}
                    {{ __('Jika anda tidak menerima email') }}, <a href="{{ route('verification.resend') }}">{{ __('klik disini untuk mendapatkannya') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection