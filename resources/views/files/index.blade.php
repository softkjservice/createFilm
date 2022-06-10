@extends('layouts.app')

@section('content')
    <div class="container ">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <p>Cześć {{ $user }}</p>
                <h3>  <p>Pliki do montażu</p></h3>
            </div>
        </div>

        <div class="row">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">{{ __('text.file.fields.oryginal_name') }}</th>
                    <th scope="col">{{ __('text.file.fields.image_size') }}</th>
                    <th scope="col">{{ __('text.file.fields.index') }}</th>
                </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>

        <div class="col-6">
            <br><br><br>
            <a class="float-right" href="{{ route('orders.create') }}">
                <button type="button" class="btn btn-primary"><i class="fas fa-plus">Dodaj pliki</i></button>
            </a>
        </div>


    </div>
@endsection
