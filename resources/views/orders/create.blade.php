 @extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
<!--            <div class="col-md-8">
                <p>Cześć {{ $user }}</p>
                <p>index.blade.php</p>
            </div>-->
    <form method="POST" action="{{ route('orders.store') }}" enctype="multipart/form-data" >
        @csrf
        <div class="form-group">
            <label for="title">Tytuł filmu:</label>
            <input type="text" class="form-control" id="title" placeholder="Wpisz tytuł filmu" name="title" >
        </div>

        <div class="form-group">
            <label for="penetration">Typ przenikania kadrów:</label><br>
            <label for="penetration 01">01</label>
            <input onclick="myFunction1()" type="radio" name="action" value="01">
            <label for="penetration 02"> &nbsp&nbsp02</label>
            <input onclick="myFunction2()" type="radio" name="action" value="02">
            <label for="penetration 03">&nbsp&nbsp 03</label>
            <input onclick="myFunction3()" type="radio" name="action" value="03">
            <label for="penetration 04"> &nbsp&nbsp04</label>
            <input onclick="myFunction4()" type="radio" name="action" value="04">
            <label for="penetration 05"> &nbsp&nbsp05</label>
            <input onclick="myFunction5()" type="radio" name="action" value="01">
            <label for="penetration 06"> &nbsp&nbsp06</label>
            <input onclick="myFunction6()" type="radio" name="action" value="02">
            <label for="penetration 07">&nbsp&nbsp 07</label>
            <input onclick="myFunction7()" type="radio" name="action" value="03">
            <label for="penetration 08"> &nbsp&nbsp08</label>
            <input onclick="myFunction8()" type="radio" name="action" value="04">


        </div>

        <div id="demo"></div>
        <div class="form-group">
            <label for="number_2">Number 2:</label>
            <input type="number" class="form-control" id="liczba_b" placeholder="Enter number 2" name="number_2" step="0.01">
        </div>
        <div class="form-group">
            <label for="file">Filmik</label>
            <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image">
        </div>
        <div class="checkbox">
            <label><input type="checkbox" name="remember"> Remember me</label>
        </div>
        <button type="submit" class="btn btn-success" name="dodaj">Submit</button>
    </form>
        </div>
    </div>

<!--    <script>
        document.getElementById("video1").style.visibility = "hidden";
        document.getElementById("video2").style.visibility = "hidden";
        function myFunction() {
            document.getElementById("demo").innerHTML = "Hello World";
        }
        /*function myFunction1() {
            document.getElementById("demo").innerHTML = '<video id="video1" width="400" controls autoplay >  <source src="{{ asset('storage/films/penetration_01.mp4') }}" type="video/mp4"> </video>';
        }
        function myFunction2() {
            document.getElementById("demo").innerHTML = '<video id="video2" width="400" controls autoplay >  <source src="{{ asset('storage/films/penetration_02.mp4') }}" type="video/mp4"> </video>';
        }
        function myFunction3() {
            document.getElementById("demo").innerHTML = '<video id="video3" width="400" controls autoplay >  <source src="{{ asset('storage/films/penetration_03.mp4') }}" type="video/mp4"> </video>';
        }
        function myFunction4() {
            document.getElementById("demo").innerHTML = '<video id="video4" width="400" controls autoplay >  <source src="{{ asset('storage/films/penetration_04.mp4') }}" type="video/mp4"> </video>';
        }
        function myFunction5() {
            document.getElementById("demo").innerHTML = '<video id="video1" width="400" controls autoplay >  <source src="{{ asset('storage/films/penetration_05.mp4') }}" type="video/mp4"> </video>';
        }
        function myFunction6() {
            document.getElementById("demo").innerHTML = '<video id="video2" width="400" controls autoplay >  <source src="{{ asset('storage/films/penetration_06.mp4') }}" type="video/mp4"> </video>';
        }
        function myFunction7() {
            document.getElementById("demo").innerHTML = '<video id="video3" width="400" controls autoplay >  <source src="{{ asset('storage/films/penetration_07.mp4') }}" type="video/mp4"> </video>';
        }
        function myFunction8() {
            document.getElementById("demo").innerHTML = '<video id="video4" width="400" controls autoplay >  <source src="{{ asset('storage/films/penetration_08.mp4') }}" type="video/mp4"> </video>';
        }*/


        var removeMedia = function () {
            _.each([$video, $audio], function ($media) {
                if (!$media.length) return;
                $media[0].pause();
                $media[0].src = '';
                $media.children('source').prop('src', '');
                $media.remove().length = 0;
            });
        };
    </script>-->
@endsection

 @section('javascript')
     const filmsUrl = "{{ url('storage/films') }}/"
 @endsection
 @section('js-files')
     <script src="{{ asset('js/order.js') }}"></script>
 @endsection
