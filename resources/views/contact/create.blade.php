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
                    <h2 class="title">CONTACT US</h2>
                </div>
                <div class="card-body">
                    {!! Form::open(['method' => 'POST', 'route' => 'contact-store']) !!}
                    {{-- <form method="POST" action="{{ route('contact-store') }}"> --}}
                    @csrf
                    <div class="form-row">
                        <div class="name">氏名</div>
                        <div class="value">
                            <div class="input-group">
                                @if (isset($data['name']))
                                    <input id="name" type="text"
                                        class="input--style-5 form-control @error('name') is-invalid @enderror"
                                        name="name" value="{{ $data['name'] }}" required autocomplete="name"
                                        style="height: 50px; width:100%;" autofocus>
                                @else
                                    <input id="name" type="text"
                                        class="input--style-5 form-control @error('name') is-invalid @enderror"
                                        name="name" value="{{ old('name') }}" required autocomplete="name"
                                        style="height: 50px; width:100%;" autofocus>
                                @endif
                                @if ($errors->has('name'))
                                    <p class="error" style="font-weight:bold; text-align:left; color:#88336f;">
                                        {{ $errors->first('name') }}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="name">メールアドレス</div>
                        <div class="value">
                            <div class="input-group">
                                @if (isset($data['email']))
                                    <input id="email" type="email"
                                        class="input--style-5 form-control @error('email') is-invalid @enderror"
                                        name="email" value="{{ $data['email'] }}" required autocomplete="email"
                                        style="height: 50px; width:100%;">
                                @else
                                    <input id="email" type="email"
                                        class="input--style-5 form-control @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') }}" required autocomplete="email"
                                        style="height: 50px; width:100%;">
                                @endif

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
                                @if (isset($data['companyname']))
                                    <input id="companyname" type="text"
                                        class="input--style-5 form-control @error('companyname') is-invalid @enderror"
                                        name="companyname" value="{{ $data['companyname'] }}" required
                                        autocomplete="companyname" style="height: 50px; width:100%;">
                                @else
                                    <input id="companyname" type="text"
                                        class="input--style-5 form-control @error('companyname') is-invalid @enderror"
                                        name="companyname" value="{{ old('companyname') }}" required
                                        autocomplete="companyname" style="height: 50px; width:100%;">
                                @endif

                                @if ($errors->has('companyname'))
                                    <p class="error"
                                        style="font-weight:bold; text-align:center; color:#88336f;">
                                        {{ $errors->first('companyname') }}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="name">電話番号</div>
                        <div class="value">
                            <div class="input-group">
                                @if (isset($data['tel']))
                                    <input id="tel" type="tel"
                                        class="input--style-5 form-control @error('tel') is-invalid @enderror"
                                        name="tel" value="{{ $data['tel'] }}" required autocomplete="tel"
                                        style="height: 50px; width:100%;">
                                @else
                                    <input id="tel" type="tel"
                                        class="input--style-5 form-control @error('tel') is-invalid @enderror"
                                        name="tel" value="{{ old('tel') }}" required autocomplete="tel"
                                        style="height: 50px; width:100%;">
                                @endif

                                @if ($errors->has('tel'))
                                    <p class="error"
                                        style="font-weight:bold; text-align:center; color:#88336f;">
                                        {{ $errors->first('tel') }}</p>
                                @endif
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
                                    @if (isset($data['gender']))
                                        <input type="radio" class="btn-check" name="gender" id="male"
                                            autocomplete="off" value="male"
                                            {{ $data['gender'] == 'male' ? 'checked' : '' }} />
                                        <label class="btn btn-secondary" for="male">男性</label>
                                        <input type="radio" class="btn-check" name="gender" id="female"
                                            autocomplete="off" value="female"
                                            {{ $data['gender'] == 'female' ? 'checked' : '' }} />
                                        <label class="btn btn-secondary" for="female">女性</label>
                                    @else
                                        <input type="radio" class="btn-check" name="gender" id="male"
                                            autocomplete="off" value="male" />
                                        <label class="btn btn-secondary" for="male">男性</label>
                                        <input type="radio" class="btn-check" name="gender" id="female"
                                            autocomplete="off" value="female"
                                             />
                                        <label class="btn btn-secondary" for="female">女性</label>
                                    @endif

                                </div>

                                @if ($errors->has('gender'))
                                    <br>
                                    <p class="error"
                                        style="font-weight:bold; width:100%; text-align:left; color:#88336f;">
                                        {{ $errors->first('gender') }}</p>
                                @endif
                            </div>
                        </div>

                    </div>
                    <div class="form-row">
                        <div class="name">メッセージ</div>
                        <div class="value">
                            <div class="input-group">
                                @if (isset($data['content']))
                                    <textarea id="content" style="outline: none;
                                line-height:40px;
                                -moz-box-shadow: none;
                                box-shadow: none;
                                width: 100%;
                                height:200px;
                                font-family: inherit;"
                                        class="input--style-5 form-control @error('company-name') is-invalid @enderror"
                                        name="content" value="{{ old('content') }}" required autocomplete="content"
                                        rows="4" cols="4">{{ $data['content'] }}
                             </textarea>
                                @else
                                    <textarea id="content" style="outline: none;
                                line-height:40px;
                                -moz-box-shadow: none;
                                box-shadow: none;
                                width: 100%;
                                height:200px;
                                font-family: inherit;"
                                        class="input--style-5 form-control @error('company-name') is-invalid @enderror"
                                        name="content" value="{{ old('content') }}" required autocomplete="content"
                                        rows="4" cols="4"></textarea>
                                @endif
                                @if ($errors->has('content'))
                                    <p class="error"
                                        style="font-weight:bold; text-align:center; color:#88336f;">
                                        {{ $errors->first('content') }}</p>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div>
                        <button class="btn btn--radius-2 btn--red" type="submit">メール送信</button>
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
