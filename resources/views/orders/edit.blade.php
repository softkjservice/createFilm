 @extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">

    <form method="POST" action="{{ route('orders.update',$order) }}" enctype="multipart/form-data" >
        {{ method_field('PUT') }}
        @csrf
        <div class="form-group">
            <label for="title">Tytuł filmu:</label>
            <input type="text" class="form-control" id="title" placeholder="Wpisz tytuł filmu" name="title" value="{{$order->title}}">
        </div>
        @error('title')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror


        <div class="form-group">
            <label for="title">Subtytuł:</label>
            <input type="text" class="form-control" id="sub_title" placeholder="Wpisz dodatkowy tekst" name="sub_title" value="{{$order->sub_title}}">
        </div>
        @error('sub_title')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <label for="title">Wpisz tekst na zakończenie filmu:</label>
            <input type="text" class="form-control" id="end_txt"  name="end_txt" value="{{$order->end_txt}}" >
        </div>
        @error('end_txt')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
<br>
        <div class="form-group" >
            <label for="penetration">Wybierz animację dla tytułu:</label><br>
            <label for="titleAnimation 01">01</label>
            <input onclick="titleAnimation_1()" type="radio" name="title_type" value="01">
            <label for="titleAnimation 02"> &nbsp&nbsp02</label>
            <input onclick="titleAnimation_2()" type="radio" name="title_type" value="02">
            <label for="titleAnimation 03">&nbsp&nbsp 03</label>
            <input onclick="titleAnimation_3()" type="radio" name="title_type" value="03">
            <label for="titleAnimation 04"> &nbsp&nbsp04</label>
            <input onclick="titleAnimation_4()" type="radio" name="title_type" value="04">
            <label for="titleAnimation 05"> &nbsp&nbsp05</label>
            <input onclick="titleAnimation_5()" type="radio" name="title_type" value="05">
            <label for="titleAnimation 06"> &nbsp&nbsp06</label>
            <input onclick="titleAnimation_6()" type="radio" name="title_type" value="06">
            <label for="titleAnimation 07">&nbsp&nbsp 07</label>
            <input onclick="titleAnimation_7()" type="radio" name="title_type" value="07">
            <label for="titleAnimation 08"> &nbsp&nbsp08</label>
            <input onclick="titleAnimation_8()" type="radio" name="title_type" value="08">
            <label > &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Wcześniej wybrano: <b>{{$order->title_type}}</b></label>
        </div>
        @error('title_type')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div id="titleAnimation"></div>
        <div class="form-group"><br>
            <label for="penetration">Wybierz typ przenikania kadrów:</label><br>
            <label for="penetration 01">01</label>
            <input onclick="penetration_1()" type="radio" name="penetration_type" value="01">
            <label for="penetration 02"> &nbsp&nbsp02</label>
            <input onclick="penetration_2()" type="radio" name="penetration_type" value="02">
            <label for="penetration 03">&nbsp&nbsp 03</label>
            <input onclick="penetration_3()" type="radio" name="penetration_type" value="03">
            <label for="penetration 04"> &nbsp&nbsp04</label>
            <input onclick="penetration_4()" type="radio" name="penetration_type" value="04">
            <label for="penetration 05"> &nbsp&nbsp05</label>
            <input onclick="penetration_5()" type="radio" name="penetration_type" value="05">
            <label for="penetration 06"> &nbsp&nbsp06</label>
            <input onclick="penetration_6()" type="radio" name="penetration_type" value="06">
            <label for="penetration 07">&nbsp&nbsp 07</label>
            <input onclick="penetration_7()" type="radio" name="penetration_type" value="07">
            <label for="penetration 08"> &nbsp&nbsp08</label>
            <input onclick="penetration_8()" type="radio" name="penetration_type" value="08">
            <label > &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Wcześniej wybrano: <b>{{$order->penetration_type}}</b></label>
        </div>
        @error('penetration_type')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div id="penetration"></div>


        <div class="form-group"><br>
            <label for="endAnimation">Wybierz animację zakończenia filmu:</label><br>
            <label for="endAnimation 01">01</label>
            <input onclick="endAnimation_1()" type="radio" name="end_txt_type" value="01">
            <label for="endAnimation 02"> &nbsp&nbsp02</label>
            <input onclick="endAnimation_2()" type="radio" name="end_txt_type" value="02">
            <label for="endAnimation 03">&nbsp&nbsp 03</label>
            <input onclick="endAnimation_3()" type="radio" name="end_txt_type" value="03">
            <label for="endAnimation 04"> &nbsp&nbsp04</label>
            <input onclick="endAnimation_4()" type="radio" name="end_txt_type" value="04">
            <label for="endAnimation 05"> &nbsp&nbsp05</label>
            <input onclick="endAnimation_5()" type="radio" name="end_txt_type" value="05">
            <label for="endAnimation 06"> &nbsp&nbsp06</label>
            <input onclick="endAnimation_6()" type="radio" name="end_txt_type" value="06">
            <label for="endAnimation 07">&nbsp&nbsp 07</label>
            <input onclick="endAnimation_7()" type="radio" name="end_txt_type" value="07">
            <label for="endAnimation 08"> &nbsp&nbsp08</label>
            <input onclick="endAnimation_8()" type="radio" name="end_txt_type" value="08">
            <label > &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Wcześniej wybrano: <b>{{$order->end_txt_type}}</b></label>
        </div>
        @error('end_txt_type')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div id="endAnimation"></div>

<!--        <div id="demo"></div>
        <div class="form-group">
            <label for="number_2">Number 2:</label>
            <input type="number" class="form-control" id="liczba_b" placeholder="Enter number 2" name="number_2" step="0.01">
        </div>-->
        <br>
<!--        <div class="form-group">
            <label for="file">Filmik</label>
            <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image">
        </div>-->
<!--        <div class="checkbox">
            <label><input type="checkbox" name="remember"> Remember me</label>
        </div>-->
<!--        @if($errors->any())
            <div>
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif-->

        <button type="submit" class="btn btn-success" name="dodaj">Enter</button>
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
