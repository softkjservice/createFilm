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
                    <th scope="col">{{ __('text.orderIndexTable.title') }}</th>
                    <th scope="col">{{ __('text.orderIndexTable.subtitle') }}</th>
                    <th scope="col">{{ __('text.orderIndexTable.end') }}</th>

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
                                <input type="submit" value="Edytuj" class="btn btn-warning"/>
                            </form>
                        </td>
                        <td><a href="{{ url('/orderpdf/'.$order->id)}}" class="btn btn-secondary btn-bold px-4 float-right mt-3 mt-lg-0">PDF</a></td>
                        @can('isAdmin')
                            <td><a href="{{ url('/adminPicturesDownload/'.$order->id)}}" class="btn btn-dark btn-bold px-4 float-right mt-3 mt-lg-0">Pobierz pliki</a></td>
{{--                            <td>{{$order->confirmed}}</td>--}}
                            <td>{{$order->user_id}}</td>
                        @endcan
<!--                        <td><a href="{{ url('/orders.destroy/'.$order->id)}}" class="btn btn-danger btn-bold px-4 float-right mt-3 mt-lg-0">Usuń</a></td>-->

                        <td>
                            <form method="POST" class="fm-inline"
                                  action="{{ route('orders.destroy', ['order' => $order->id]) }}">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Delete!" class="btn btn-danger"/>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        {{ $orders->links("pagination::bootstrap-4") }}
        <div class="col-6">
            <a class="float-right" href="{{ route('orders.create') }}">
                <button type="button" class="btn btn-primary"><i class="fas fa-plus">Utwórz zamówienie</i></button>
            </a>
        </div>
    </div>
@endsection
