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
            <label for="number_1">Number 1:</label>
            <input type="number" class="form-control" id="liczba_a" placeholder="Enter number 1" name="number_1" step="0.01">
        </div>

        <div class="form-group">
            <label for="number_2">Add</label>
            <input onclick="myFunction1()" type="radio" name="action" value="Add">
            <label for="number_2">&nbsp;&nbsp;&nbsp; Subtract</label>
            <input onclick="myFunction2()" type="radio" name="action" value="Subtract">
            <label for="number_2">&nbsp;&nbsp;&nbsp; Multiply</label>
            <input onclick="myFunction3()" type="radio" name="action" value="Multiply">
            <label for="number_2">&nbsp;&nbsp;&nbsp; Devide</label>
            <input onclick="myFunction4()" type="radio" name="action" value="Devide">
        </div>
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
@endsection
