@extends('layouts.app')

@section('content')
    <div class="container ">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <p>Cześć {{ $user->name }}</p>
                <h3>  <p>Panel administratora</p></h3>
            </div>
        </div>

        <div class="row">

        </div>

        <div class="col-12">
            <a class="float-right" href="{{ route('adminOrderListToDo') }}">
                <button type="button" class="btn btn-primary"><i class="fas fa-plus">Zamówienia do realizacji</i></button>
            </a>
            <a class="float-right" href="{{ route('adminOrderList') }}">
                <button type="button" class="btn btn-primary"><i class="fas fa-plus">Wszystkie zamówienia</i></button>
            </a>
<!--            <a class="float-right" href="{{ route('orders.create') }}">
                <button type="button" class="btn btn-primary"><i class="fas fa-plus">Zamówienia użytkownika</i></button>
            </a>-->
            <a class="float-right" href="{{ route('adminOrderListToDelete') }}">
                <button type="button" class="btn btn-primary"><i class="fas fa-plus">Zamówienia nie zatwierdzone</i></button>
            </a>
        </div>
    </div>
@endsection
