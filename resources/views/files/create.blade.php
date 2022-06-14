 @extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
<!--            <div class="col-md-8">
                <p>Cześć {{ $user }}</p>
                <p>index.blade.php</p>
            </div>-->
    <form method="POST" action="{{ route('files.store') }}" enctype="multipart/form-data" >
        @csrf

        <div class="form-group">
            <label for="file">Filmik</label>
            <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image">
        </div>

        <button type="submit" class="btn btn-success" name="dodaj">Submit</button>
    </form>
        </div>
    </div>


@endsection

 @section('javascript')
     const filmsUrl = "{{ url('storage/films') }}/"
 @endsection
 @section('js-files')
     <script src="{{ asset('js/order.js') }}"></script>
 @endsection
