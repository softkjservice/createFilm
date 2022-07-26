 @extends('layouts.app')
 <link href="{{ asset('css/invoice.css') }}" rel="stylesheet">
@section('content')
    <div class="page-content container">
        <div class="page-header text-blue-d2">
            <h1 class="page-title text-secondary-d1">
                <small class="page-info">
                    <i class="fa fa-angle-double-right text-80"></i>
                    Zamówienie Nr: {{$order->id}}
                </small>
            </h1>

            <div class="page-tools">
                <div class="action-buttons">
                    <a class="btn bg-white btn-light mx-1px text-95" href="#" data-title="Print">
                        <i class="mr-1 fa fa-print text-primary-m1 text-120 w-2"></i>
                        Print
                    </a>
                    <a class="btn bg-white btn-light mx-1px text-95" href="#" data-title="PDF">
                        <i class="mr-1 fa fa-file-pdf-o text-danger-m1 text-120 w-2"></i>
                        Export
                    </a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <div>
                    <span class="text-sm text-grey-m2 align-middle">Wykonawca:</span>
                    <span class="text-600 text-110 text-blue align-middle">Milagro NIP:5360091122 Tel. 604 219 784</span>
                </div>
                <div>
                    <span class="text-sm text-grey-m2 align-middle">Odbiorca:</span>
                    <span class="text-600 text-110 text-blue align-middle">{{$user->name." , E-mail: ".$user->email}}</span>
                </div>

            </div>

        <div class="container px-0">
            <div class="row mt-4">
                <div class="col-12 col-lg-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="text-center text-150">
                                <i class="fa fa-book fa-2x text-success-m2 mr-1"></i>
                                <span class="text-default-d3">Podsumowanie zamówienia</span>
                            </div>
                        </div>
                    </div>

                    <!-- .row -->

                    <hr class="row brc-default-l1 mx-n1 mb-4" />

                    <div class="row">
                        <div class="col-sm-6">
                            <div>
                                <span class="text-sm text-grey-m2 align-middle">Tytuł filmu:</span>
                                <span class="text-600 text-110 text-blue align-middle">{{$order->title}}</span>
                            </div>
                            <div>
                                <span class="text-sm text-grey-m2 align-middle">Subtytuł:</span>
                                <span class="text-600 text-110 text-blue align-middle">{{$order->sub_title}}</span>
                            </div>
                            <div>
                                <span class="text-sm text-grey-m2 align-middle">Tekst końcowy:</span>
                                <span class="text-600 text-110 text-blue align-middle">{{$order->end_txt}}</span>
                            </div>

                        </div>
                        <!-- /.col -->

                        <div class="text-95 col-sm-6 align-self-start d-sm-flex justify-content-end">
                            <hr class="d-sm-none" />
                            <div class="text-grey-m2">
                                <div class="mt-1 mb-2 text-secondary-m1 text-600 text-125">
                                    <span class="text-sm text-grey-m2 align-middle">Animacja tytułu:</span>
                                    <span class="text-600 text-110 text-blue align-middle">{{$order->title_type}}</span>
                                </div>
                                <div class="mt-1 mb-2 text-secondary-m1 text-600 text-125">
                                    <span class="text-sm text-grey-m2 align-middle">Typ przenikania:</span>
                                    <span class="text-600 text-110 text-blue align-middle">{{$order->penetration_type}}</span>
                                </div>
                                <div class="mt-1 mb-2 text-secondary-m1 text-600 text-125">
                                    <span class="text-sm text-grey-m2 align-middle">Animacja zakończenia:</span>
                                    <span class="text-600 text-110 text-blue align-middle">{{$order->end_txt_type}}</span>
                                </div>

                                 </div>
                        </div>
                        <div class="col-12">
                            <div class="text-center text-150">
                                <i class="fa fa-book fa-2x text-success-m2 mr-1"></i>
                                <span ><h5>Elementy składowe</h5></span>
                            </div>
                        </div>
                        <!-- /.col -->
                    </div>

                    <div class="mt-4">
                        <div class="row text-600 text-white bgc-default-tp1 py-25">
                            <div class="d-none d-sm-block col-1">#</div>
                            <div class="col-9 col-sm-5">Nazwa</div>
                            <div class="d-none d-sm-block col-4 col-sm-2">Rozmiar [kB]</div>
                            <div class="d-none d-sm-block col-sm-2">Kolejność </div>

                        </div>


                        <table>
                            @foreach($pictures as $picture)
                                <tr>
                                    <div class="row mb-2 mb-sm-0 py-25 bgc-default-l4">
                                        <div class="d-none d-sm-block col-1">2</div>
                                        <div class="col-9 col-sm-5">{{ $picture->oryginal_name }}</div>
                                        <div class="d-none d-sm-block col-2">{{ $picture->image_size }}</div>
                                        <div class="d-none d-sm-block col-2">{{ $picture->index }}</div>
                                    </div>
                                </tr>
                            @endforeach
                        </table>



                        </div>

                        <div class="row border-b-2 brc-default-l2"></div>

                        <!-- or use a table instead -->

                        <div class="row mt-3">
                            <div class="col-12 col-sm-7 text-grey-d2 text-95 mt-2 mt-lg-0">
                                Nr konta: 21 2222 3333 4444 5555 6666 <br>
                                W tytule przelewu podaj numer zamówienia
                            </div>

                            <div class="col-12 col-sm-5 text-grey text-90 order-first order-sm-last">


                                <div class="row my-2 align-items-center bgc-primary-l3 p-2">
                                    <div class="col-7 text-right">
                                        Do zapłaty:
                                    </div>
                                    <div class="col-5">
                                        <span class="text-150 text-success-d3 opacity-2">100 PLN</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <hr />

                        <div>
                            <span class="text-secondary-d1 text-105">Dziękujemy za skorzystanie z naszej platformy </span>
                            <a href="{{ route('orders.index')}}" class="btn btn-success btn-bold px-4 float-right mt-3 mt-lg-0">Zatwierdź zamówienie</a>
                            <a href="{{ route('orderconfirm', ['order' => $order->id])}}" class="btn btn-success btn-bold px-4 float-right mt-3 mt-lg-0">Confirm order</a>
                            <a href="{{ url('/orders/'.$order->id.'/edit')}}" class="btn btn-secondary btn-bold px-4 float-right mt-3 mt-lg-0">Powróć do edycji</a>
                            <a href="{{ url('/orders/'.$order->id.'/edit')}}" class="btn btn-secondary btn-bold px-4 float-right mt-3 mt-lg-0">Powróć do edycji</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

