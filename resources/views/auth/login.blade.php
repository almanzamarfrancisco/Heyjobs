<!DOCTYPE html>
<html>
<head>
    <title>Hey Jobs! - Ingresa</title>
    
    {{-- https://bootsnipp.com/snippets/0ekvA --}}
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

</head>
<body style="background-repeat: no-repeat;background-position: 47%">
    <img src="{{ asset('/img/HeyJobsCorto.png') }}" alt="HeyJobs!" style="width: 10%;display: block; margin: auto;">
    <button class="button" onclick="window.location='{{ route('showProvidersLogin') }}'" style="display: block;margin: 2% auto;border: none;background-color: #1161ee;color: white;padding: 6px 3%;border-radius: 911px;">Haz click aquí para ingresar como proveedor</button>
<div class="login-wrap" style="margin-top: 5vh">
    <div class="login-html">
        <p class="text-center" style="height: 50px;"><br><br> CLIENTES <br></p>

        <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab" style="margin-left: 20%;">Entra</label>
        <input id="tab-2" type="radio" name="tab" class="for-pwd"><label for="tab-2" class="tab">Regístrate</label>
        <div class="login-form">
            <div class="sign-in-htm">
                <form action="{{ route('login') }}" method="POST" novalidate="novalidate">
                    @csrf
                    <div class="group">
                        <label for="email" class="label">Email</label>
                        <input id="email" type="email"  class="form-control input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong style="background-color: #ffffff4a">{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="group">
                        <label for="password" class="label">Contraseña</label>
                        <input id="password" type="password" class="form-control input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" data-type="password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong style="background-color: #ffffff4a">{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="group">
                        <input type="submit" class="button" value="Entrar">
                    </div>
                </form>
                <div class="hr"></div>
            </div>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <input type="hidden" name="type" value="user">
                <div class="for-pwd-htm">
                    <div class="group">
                        <label for="name" class="label">Nombre</label>
                        <input id="name" type="text"  class="form-control input @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong style="background-color: #ffffff4a">{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="group">
                        <label for="email" class="label">Email</label>
                        <input id="email" type="email"  class="form-control input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong style="background-color: #ffffff4a">{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="group">
                        <label for="password" class="label">Contraseña</label>
                        <input id="password" type="password" class="form-control input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" data-type="password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong style="background-color: #ffffff4a">{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="group">
                        <label for="password_confirmation" class="label">Confirmación de contraseña</label>
                        <input id="password_confirmation" type="password_confirmation" class="form-control input @error('password_confirmation') is-invalid @enderror" name="password_confirmation" required autocomplete="current-password" data-type="password">
                        @error('password_confirmation')
                            <span class="invalid-feedback" role="alert">
                                <strong style="background-color: #ffffff4a">{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="group">
                        <input type="submit" class="button" value="Registrarse">
                    </div>
                    <div class="hr"></div>
                </div>
            </form>
        </div>
    </div>
</div>
<style type="text/css"> 
    body {
        margin:0;
        color:#edf3ff;
        background:#c8c8c8;
        background:url({{ asset('/img/material-design-4k-2048x1152.jpg') }}) fixed;
        background-size: cover;
        font:600 16px/18px 'Open Sans',sans-serif;
    }
    :after,:before{box-sizing:border-box}
    .clearfix:after,.clearfix:before{content:'';display:table}
    .clearfix:after{clear:both;display:block}
    a{color:inherit;text-decoration:none}

    .login-wrap{
        width: 100%;
        margin:auto;
        max-width:510px;
        min-height:510px;
        position:relative;
        background:url({{ asset('/img/material-1-1000x563.jpg') }}) no-repeat center;
        background-size: cover;
        box-shadow:0 12px 15px 0 rgba(0,0,0,.24),0 17px 50px 0 rgba(0,0,0,.19);
    }
    .login-html{
        width:100%;
        height:110%;
        position:absolute;
        padding:0 70px 50px 70px;
        background:rgba(0,0,0,0.5);
    }
    .login-html .sign-in-htm,
    .login-html .for-pwd-htm{
        top:0;
        left:0;
        right:0;
        bottom:0;
        position:absolute;
        -webkit-transform:rotateY(180deg);
        transform:rotateY(180deg);
        -webkit-backface-visibility:hidden;
        backface-visibility:hidden;
        -webkit-transition:all .4s linear;
        transition:all .4s linear;
    }
    .login-html .sign-in,
    .login-html .for-pwd,
    .login-form .group .check{
        display:none;
    }
    .login-html .tab,
    .login-form .group .label,
    .login-form .group .button{
        text-transform:uppercase;
    }
    .login-html .tab{
        font-size:22px;
        margin-right:15px;
        padding-bottom:5px;
        margin:0 15px 10px 0;
        display:inline-block;
        border-bottom:2px solid transparent;
    }
    .login-html .sign-in:checked + .tab,
    .login-html .for-pwd:checked + .tab{
        color:#fff;
        border-color:#1161ee;
    }
    .login-form{
        min-height:345px;
        position:relative;
        -webkit-perspective:1000px;
        perspective:1000px;
        -webkit-transform-style:preserve-3d;
        transform-style:preserve-3d;
    }
    .login-form .group{
        margin-bottom:15px;
    }
    .login-form .group .label,
    .login-form .group .input,
    .login-form .group .button{
        width:100%;
        color:#fff;
        display:block;
    }
    .login-form .group .input,
    .login-form .group .button{
        border:none;
        padding:15px 20px;
        border-radius:25px;
        background:rgba(255,255,255,.1);
    }
    .login-form .group input[data-type="password"]{
        text-security:circle;
        -webkit-text-security:circle;
    }
    .login-form .group .label{
        color:#aaa;
        font-size:12px;
    }
    .login-form .group .button{
        background:#1161ee;
    }
    .login-form .group label .icon{
        width:15px;
        height:15px;
        border-radius:2px;
        position:relative;
        display:inline-block;
        background:rgba(255,255,255,.1);
    }
    .login-form .group label .icon:before,
    .login-form .group label .icon:after{
        content:'';
        width:10px;
        height:2px;
        background:#fff;
        position:absolute;
        -webkit-transition:all .2s ease-in-out 0s;
        transition:all .2s ease-in-out 0s;
    }
    .login-form .group label .icon:before{
        left:3px;
        width:5px;
        bottom:6px;
        -webkit-transform:scale(0) rotate(0);
        transform:scale(0) rotate(0);
    }
    .login-form .group label .icon:after{
        top:6px;
        right:0;
        -webkit-transform:scale(0) rotate(0);
        transform:scale(0) rotate(0);
    }
    .login-form .group .check:checked + label{
        color:#fff;
    }
    .login-form .group .check:checked + label .icon{
        background:#1161ee;
    }
    .login-form .group .check:checked + label .icon:before{
        -webkit-transform:scale(1) rotate(45deg);
        transform:scale(1) rotate(45deg);
    }
    .login-form .group .check:checked + label .icon:after{
        -webkit-transform:scale(1) rotate(-45deg);
        transform:scale(1) rotate(-45deg);
    }
    .login-html .sign-in:checked + .tab + .for-pwd + .tab + .login-form .sign-in-htm{
        -webkit-transform:rotate(0);
        transform:rotate(0);
    }
    .login-html .for-pwd:checked + .tab + .login-form .for-pwd-htm{
        -webkit-transform:rotate(0);
        transform:rotate(0);
    }

    .hr{
        height:2px;
        margin:60px 0 50px 0;
        background:rgba(255,255,255,.2);
    }
    .foot-lnk{
        text-align:center;
    }
</style>
</body>
</html>