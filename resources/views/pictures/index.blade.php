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
<!--                    <th scope="col">{{ __('text.file.fields.index') }}</th>-->
                </tr>
                </thead>
                <tbody>
                @foreach($pictures as $picture)
                    <tr>

                        <td>{{ $picture->oryginal_name }}</td>
                        <td>{{ $picture->image_size }}</td>

                        <td>
                            <form method="POST" class="fm-inline"
                                  action="{{ route('pictures.destroy', ['picture' => $picture->id]) }}">
                                @csrf
                                @method('DELETE')

                                <input type="submit" value="Delete!" class="btn btn-danger"/>
                            </form>
                        </td>
                        <td>
                            <form method="POST" class="fm-inline"
                                  action="{{ route('up', ['picture' => $picture->id]) }}">
                                @csrf


                                <input type="submit" value="Up " class="btn btn-warning"/>
                            </form>
                        </td>
                        <td>
                            <form method="POST" class="fm-inline"
                                  action="{{ route('down', ['picture' => $picture->id]) }}">
                                @csrf


                                <input type="submit" value="Down" class="btn btn-warning"/>
                            </form>
                        </td>
                        <td>{{ $picture->index }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        <div class="col-6">
            <br><br><br>
            <a class="float-right" href="{{ route('pictures.create') }}">
                <button type="button" class="btn btn-primary"><i class="fas fa-plus">Dodaj pliki</i></button>
            </a>
        </div>


    </div>
@endsection
