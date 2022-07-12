<html>
<head>
    <meta http-equiv="Content-Type" content="charset=utf-8" />
    <style >
        * {
            font-family: "DejaVu Sans Mono", monospace;

        }

        body{
            margin-top:20px;
            color: #484b51;
        }
        .text-secondary-d1 {
            color: #728299!important;
        }
        .page-header {
            margin: 0 0 1rem;
            padding-bottom: 1rem;
            padding-top: .5rem;
            border-bottom: 1px dotted #e2e2e2;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-pack: justify;
            justify-content: space-between;
            -ms-flex-align: center;
            align-items: center;
        }
        .page-title {
            padding: 0;
            margin: 0;
            font-size: 1.75rem;
            font-weight: 300;
        }
        .brc-default-l1 {
            border-color: #dce9f0!important;
        }

        .ml-n1, .mx-n1 {
            margin-left: -.25rem!important;
        }
        .mr-n1, .mx-n1 {
            margin-right: -.25rem!important;
        }
        .mb-4, .my-4 {
            margin-bottom: 1.5rem!important;
        }

        hr {
            margin-top: 1rem;
            margin-bottom: 1rem;
            border: 0;
            border-top: 1px solid rgba(0,0,0,.1);
        }

        .text-grey-m2 {
            color: #888a8d!important;
        }

        .text-success-m2 {
            color: #86bd68!important;
        }

        .font-bolder, .text-600 {
            font-weight: 600!important;
        }

        .text-110 {
            font-size: 110%!important;
        }
        .text-blue {
            color: #478fcc!important;
        }
        .pb-25, .py-25 {
            padding-bottom: .75rem!important;
        }

        .pt-25, .py-25 {
            padding-top: .75rem!important;
        }
        .bgc-default-tp1 {
            background-color: rgba(121,169,197,.92)!important;
        }
        .bgc-default-l4, .bgc-h-default-l4:hover {
            background-color: #f3f8fa!important;
        }
        .page-header .page-tools {
            -ms-flex-item-align: end;
            align-self: flex-end;
        }

        .btn-light {
            color: #757984;
            background-color: #f5f6f9;
            border-color: #dddfe4;
        }
        .w-2 {
            width: 1rem;
        }

        .text-120 {
            font-size: 120%!important;
        }
        .text-primary-m1 {
            color: #4087d4!important;
        }

        .text-danger-m1 {
            color: #dd4949!important;
        }
        .text-blue-m2 {
            color: #68a3d5!important;
        }
        .text-150 {
            font-size: 150%!important;
        }
        .text-60 {
            font-size: 60%!important;
        }
        .text-grey-m1 {
            color: #7b7d81!important;
        }
        .align-bottom {
            vertical-align: bottom!important;
        }

        table.c {
            table-layout: auto;
            width: 100%;
        }

    </style>

</head>
<body>
<div class="page-content container">
    <div class="page-header text-blue-d2">
        <h1 class="page-title text-secondary-d1">
            <small class="page-info">
                <i class="fa fa-angle-double-right text-80"></i>
                Zamówienie Nr: {{$order->id}}
            </small>
        </h1>


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
                        <hr class="row brc-default-l1 mx-n1 mb-4" />
                        <div class="col-12">
                            <div class="text-center text-150">
                                <i class="fa fa-book fa-2x text-success-m2 mr-1"></i>
                                <span ><h5>Elementy składowe</h5></span>
                            </div>
                        </div>
                        <!-- /.col -->
                    </div>
                    <div>
                        <table class="c">
                            <thead>
                            <tr >

                                <td><b>Tytuł</b></td>
                                <td><b>Wielkość</b></td>
                                <td><b>Kolejność</b></td>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($pictures as $picture)
                                <tr>

                                    <td>
                                        {{ $picture->oryginal_name }}
                                    </td>
                                    <td>
                                        {{ $picture->image_size }}
                                    </td>
                                    <td>
                                        {{ $picture->index }}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                    <br>
                    <hr class="row brc-default-l1 mx-n1 mb-4" />

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
                                    <br>
                                    Do zapłaty:
                                </div>
                                <div class="col-5">
                                    <span class="text-150 text-success-d3 opacity-2">100 PLN</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr />


                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
