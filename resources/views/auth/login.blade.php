<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet"  href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('js/bootstrap.js')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
</head>
<body>
    <div class="container-fluid">
    <form method="POST" action="{{ route('login') }}">
            @csrf
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <h3 class="text-center">LOG IN</h3>

                <label for="email" class="label col-md-3 control-label">Email</label>
                <div class="col-md-9">
                    <input id="email" class="form-control" type="email" name="email"  required autofocus placeholder="example@org.com"/>
                </div>

                <label for="password" class="label col-md-3 control-label">Password</label>
                <div class="col-md-9">
                    <input id="password" class="form-control" type="password" name="password"   placeholder="********"/>
                </div>
                <input id="remember_me" type="checkbox" class="" name="remember">
                <label for="remember_me" class="">Remember me</label>
                <div class="col-md-9">
                @if (Route::has('password.request'))
                    <a class="btn btn-danger" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <button class="btn btn-info">
                    {{ __('Log in') }}
                </button>
            </div>
            </div>
            </div>
        </div>
    </div>
    </form>
</body>
<script src="{{ asset('js/app.js') }}"></script>
</html>

