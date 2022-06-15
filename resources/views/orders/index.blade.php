@extends('layouts.app')

@section('content')
    <div class="container ">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <p>Cześć {{ $user }}</p>
                <h3>  <p>Zamówienia</p></h3>
            </div>
        </div>
        <div class="col-6">

            <a class="float-right" href="{{ route('orders.create') }}">
                <button type="button" class="btn btn-primary"><i class="fas fa-plus">Utwórz zamówienie</i></button>
            </a>
        </div>


    </div>
@endsection
