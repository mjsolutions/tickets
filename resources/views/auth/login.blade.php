<!DOCTYPE html>
<html lang="es">
<head>
    <title>Bolematico | @yield('title','Inicio')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('css/materialize.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/styles.css')}}">
    <link href="https://file.myfontastic.com/p33ryNdn2ug99gf3MgkiUK/icons.css" rel="stylesheet">
</head>
<body>
    <header>
        @include('bolematico.nav')
    </header>
        <main>

            <div class="row">
                <div class="col s12 m4 col-center mt-50">

                    <form class="card  col s12" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <p class="card-title center-align">Bienvenido</p>
                        
                        <div class="card-content">
                            <div class="row">
                                <div class="input-field col s12 {{ $errors->has('email') ? ' has-error' : '' }}">
                                    <i class="material-icons prefix">account_circle</i>
                                    <input id="email" type="email" class="validate" name="email" value="{{ old('email') }}" required autofocus>
                                    
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                    <label for="email">Ingres tu email</label>     
                                </div>
                            </div>
                                    
                            <div class="row">
                                <div class="input-field col s12 {{ $errors->has('password') ? ' has-error' : '' }}">
                                    <i class="material-icons prefix">lock_outline</i>
                                    <input id="password" type="password" class="validate" name="password" required>
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                    <label for="password" class="validate">Password</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s5 col-center">                            
                                    <button type="submit" class="waves-effect waves-light btn pull-right">
                                        Registrar
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="card-action">
                            <div class="col s8 mb-30 center-align">
                                <a class="blue-text" href="{{ url('/password/reset') }}">
                                    ¿Olvidaste tu contraseña?
                                </a>
                            </div>
                            <div class="col s4 mb-30 center-align">
                                <a class="blue-text" href="{{ url('/register') }}">Registrarse</a>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </main>

    <footer class="page-footer grey darken-3">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Bolematico.com.mx</h5>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                <div class="row">
                    <div class="col l6">
                        Todos los derechos reservados.                  
                    </div>
                    <div class="col l6 right-align">
                        © {!! date('Y') !!}
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="{{asset('js/materialize.js')}}"></script>
    <script>
        $(document).ready(function(){
            $(".button-collapse").sideNav({
                 edge: 'right', // Choose the horizontal origin
                 closeOnClick: true
                });

            @if($errors)
            @foreach($errors->all() as $error)
            Materialize.toast('{{ $error }}', 4000);
            @endforeach
            @endif

        });
    </script>
</body>
</html>
