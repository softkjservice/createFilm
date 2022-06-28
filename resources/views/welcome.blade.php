@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-left">
            <div class="col-6">
                <a  href="{{ route('orders.index') }}">
                    <button type="button" class="btn btn-primary"><i class="fas fa-plus">Twoje zamówienia</i></button>
                </a>
                <a  href="{{ route('orders.create') }}">
                    <button type="button" class="btn btn-primary"><i class="fas fa-plus">Kreator filmu</i></button>
                </a>
            </div>


        </div>
        strona startowa
    </div>

@endsection

@section('javascript')
    const filmsUrl = "{{ url('storage/films') }}/"
@endsection
@section('js-files')
    <script src="{{ asset('js/order.js') }}"></script>
@endsection
