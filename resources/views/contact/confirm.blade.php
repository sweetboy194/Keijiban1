<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Yu Contact
    </title>

    <!-- Icons font CSS-->
    <link href="{{ asset('registertest/vendor/mdi-font/css/material-design-iconic-font.min.css') }}" rel="stylesheet"
        media="all">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <link href="{{ asset('registertest/vendor/font-awesome-4.7/css/font-awesome.min.css') }}" rel="stylesheet"
        media="all">

    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i"
        rel="stylesheet">


    <!-- Vendor CSS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.css" rel="stylesheet" />

    <link href="{{ asset('registertest/vendor/select2/select2.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('registertest/vendor/datepicker/daterangepicker.css') }}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{ asset('registertest/css/main.css') }}" rel="stylesheet" media="all">

    <!-- Google Fonts -->
    <!-- MDB -->

</head>

<body>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">CONFIRM</h2>
                </div>
                <div class="card-body">
                    {!! Form::open(['method' => 'POST', 'route' => 'contact-action']) !!}
                    {{-- <form method="POST" action="{{ route('contact-store') }}"> --}}
                    @csrf
                    <div class="form-row">
                        <div class="name">氏名</div>
                        <div class="value">
                            <div class="input-group">
                                <input id="name" type="text"
                                    class="input--style-5 form-control @error('name') is-invalid @enderror" name="name"
                                    required autocomplete="name" style="height: 50px; width:100%;" autofocus hidden
                                    value="{{ $data['name'] }}">{{ $data['name'] }}
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="name">メールアドレス</div>
                        <div class="value">
                            <div class="input-group">
                                <input id="email" type="email"
                                    class="input--style-5 form-control @error('email') is-invalid @enderror"
                                    name="email" hidden value="{{ $data['email'] }}" required autocomplete="email"
                                    style="height: 50px; width:100%;">
                                {{ $data['email'] }}

                                @if ($errors->has('email'))
                                    <p class="error"
                                        style="font-weight:bold; text-align:center; color:#88336f;">
                                        {{ $errors->first('email') }}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="name">会社名</div>
                        <div class="value">
                            <div class="input-group">
                                <input id="companyname" type="text"
                                    class="input--style-5 form-control @error('company-name') is-invalid @enderror"
                                    name="companyname" hidden value="{{ $data['companyname'] }}" required
                                    autocomplete="company-name" style="height: 50px; width:100%;">
                                {{ $data['companyname'] }}
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="name">電話番号</div>
                        <div class="value">
                            <div class="input-group">
                                <input id="tel" type="tel"
                                    class="input--style-5 form-control @error('tel') is-invalid @enderror" name="tel"
                                    value="{{ $data['tel'] }}" hidden required autocomplete="tel"
                                    style="height: 50px; width:100%;"> {{ $data['tel'] }}
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="name">
                            <p class="col-sm-4 col-form-label">性別</p>
                        </div>
                        <div class="value">
                            <div class="input-group">
                                <div class="btn-group">
                                    @if ($data['gender'] == 'male')
                                        <input type="radio" class="btn-check" name="gender" id="male"
                                            autocomplete="off" checked value="male" />
                                        <label class="btn btn-secondary" for="male">男性</label>
                                    @endif
                                    @if($data['gender']=='female')
                                    <input type="radio" class="btn-check" name="gender" id="female"
                                        autocomplete="off" checked value="female" />
                                    <label class="btn btn-secondary" for="female">女性</label>
                                    @endif
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="form-row">
                        <div class="name">メッセージ</div>
                        <div class="value">
                            <div class="input-group">
                                <input id="content" hidden style="
                                    line-height:20px;
                                    width: 100%;
                                    height:25px;
                                    font-family: inherit;"
                                    name="content" value="{{$data['content']}}"
                                    > {{$data['content']}}
                            </div>
                        </div>
                    </div>

                    <div style="text-align: center;">
                        <button class="btn btn--radius-2 btn--red" name="action" value="sendmail" type="submit">メール送信</button>
                        <button class="btn btn--radius-2 btn--red" name="action" value="edit" type="submit">修正する</button>

                    </div>
                    {{-- </form> --}}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <!-- MDB -->
    <script src="{{ asset('registertest/vendor/jquery/jquery.min.js') }}"></script>
    <!-- Vendor JS-->
    <script src="{{ asset('registertest/vendor/select2/select2.min.js') }}"></script>
    <script src="{{ asset('registertest/vendor/datepicker/moment.min.js') }}"></script>
    <script src="{{ asset('registertest/vendor/datepicker/daterangepicker.js') }}"></script>

    <!-- Main JS-->
    <script src="{{ asset('registertest/js/global.js') }}"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
