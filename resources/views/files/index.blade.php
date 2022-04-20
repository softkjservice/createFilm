@extends('layouts.app')

@section('content')
    <div class="container ">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <p>Cześć {{ $user }}</p>
                <p>index.blade.php files</p>
            </div>
        </div>
        <div class="col-6">
            <a class="float-right" href="{{ route('orders.create') }}">
                <button type="button" class="btn btn-primary"><i class="fas fa-plus">Wybierz efekty</i></button>
            </a>
            <a class="float-right" href="{{ route('orders.create') }}">
                <button type="button" class="btn btn-primary"><i class="fas fa-plus">Prześlij pliki</i></button>
            </a>
        </div>


    </div>
@endsection
