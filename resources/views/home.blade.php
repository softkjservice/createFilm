@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard_01') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in! / Jesteś zalogowany') }}
                </div>
                <div><br>Witaj w systemie {{ Auth::user()->name }}<br><br>Komunikat z home.blade.php</div>
            </div>
        </div>
    </div>
</div>
@endsection
