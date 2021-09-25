<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content col-md-6 bg-dark p-4">
                <h5 class="text-center mb-5"><b>G-MAIL</b></h5>
                <div class="bg-dark">
                    <form action="{{url('send')}}" method="POST">
                        {{csrf_field()}}
                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label text-primary"><h4>Name</h4></label>
                            <div class="col-md-8">
                                <input type="text" name="user" class="form-control" required="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label text-primary"><h4>Email</h4></label>
                            <div class="col-md-8">
                                <input type="email" name="email" class="form-control" required="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label text-primary"><h4>TEL</h4></label>
                            <div class="col-md-8">
                                <input type="number" name="tel" class="form-control" required="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label text-primary"><h4>Reason</h4></label>
                            <div class="col-md-8">
                                <input type="text" name="reason" class="form-control" required="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label text-primary"><h4>Message</h4></label>
                            
                                <input type="textarea" name="message" class="form-control" required="">
                            
                        </div>
                        <button type="submit" class="btn btn-danger text-white">SEND GMAIL</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
