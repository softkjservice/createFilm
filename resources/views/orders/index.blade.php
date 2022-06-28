@extends('layouts.app')

@section('content')
    <div class="container ">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <p>Cześć {{ $user->name }}</p>
                <h3>  <p>Zamówienia</p></h3>
            </div>
        </div>

        <div class="row">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">{{ __('text.file.fields.oryginal_name') }}</th>
                    <th scope="col">{{ __('text.file.fields.image_size') }}</th>
                    <th scope="col">{{ __('text.file.fields.index') }}</th>
                    <th scope="col">{{ __('text.file.fields.index') }}</th>
                </tr>
                </thead>
                <tbody>
                @foreach($orders as $order)
                    <tr>
                        <td>{{ $order->title }}</td>
                        <td>{{ $order->sub_title }}</td>
                        <td>{{ $order->end_txt }}</td>
                        <td>
                            <form method="POST" class="fm-inline" action="{{ route('orders.show', ['order' => $order->id]) }}">
                                {{ method_field('GET') }}
                                @csrf
                                <input type="submit" value="Pokaż" class="btn btn-warning"/>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        <div class="col-6">
            <a class="float-right" href="{{ route('orders.create') }}">
                <button type="button" class="btn btn-primary"><i class="fas fa-plus">Utwórz zamówienie</i></button>
            </a>
        </div>
    </div>
@endsection
