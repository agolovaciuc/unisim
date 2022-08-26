<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Login</title>
</head>
<body class="register-page" style="min-height: 570.781px;">
<div class="register-box">
    <div class="card">
        <div class="card-body register-card-body">
            <p class="login-box-msg">Registration</p>
            <form action="{{ route('user.registration') }}" method="post" >
                <div class="input-group mb-3">
                    @csrf
                    <input type="email" name="email" class="form-control" placeholder="Email">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                    @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="input-group mb-3">
                    <input type="password" name="password" class="form-control" placeholder="Password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>

                    @error('password')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="row">
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary  btn-block">Registration</button>
                    </div>

                </div>
            </form>

        </div>

    </div>
</div>
<link rel="stylesheet" href="{{asset('assets/admin/css/admin.css')}}">

<script src="{{asset('assets/admin/js/admin.js')}}"></script>


<div><div style="display: none; position: fixed; top: 30px; width: auto; max-width: 100%; text-align: center; left: 50%; transform: translateX(-50%); z-index: 99999999;"><div style="display: inline-block; font-size: 14px; font-weight: bold; border: 1px solid rgb(240, 195, 109); background-color: rgb(249, 237, 190); padding: 0px 10px; border-radius: 2px; box-shadow: rgba(0, 0, 0, 0.2) 0px 2px 4px;"></div></div></div></body>
</html>


