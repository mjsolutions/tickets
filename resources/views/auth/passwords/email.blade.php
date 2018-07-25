@extends('layouts.main')

@section('title', 'Recuperación de contraseña')

@section('description', '')

<!-- Main Content -->
@section('content')

<div class="image-header bg-5 overlay overlay-5">
    <div class="row white-text">
        <h4>Recuperar contraseña</h4>
        <div class="divider"></div>
    </div>
</div>

<div class="container">
    <div class="row mt-100">
        <div class="col s10 m8 col-center mb-30">

                <div class="row">
                    <h5 class="mt-30 raleway quote">Recuperar contraseña</h5>
                    <p><i>* ingresa el email de la cuenta con que te registraste.</i></p>
                </div>

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                {!! Form::open(['url' => '/password/email', 'method' => 'POST', 'id' => 'contactForm'])!!}

                    <div class="row">
                        
                        <div class="input-field col m12 s12">
        
                            {!! Form::label('email','Email') !!}
                            @if ($errors->has('email'))
                            {!! Form::email('email', old('email'), ['class' => 'validate invalid', 'required']) !!}
                            <span class="helper-text" data-error="{{ $errors->first('email') }}" data-success="right">{{ $errors->first('email') }}</span>
                            @else
                            {!! Form::email('email', old('email'), ['class' => 'validate', 'required']) !!}         
                            @endif
            
                        </div>

                    </div>

                    {{-- <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="col-md-4 control-label">Dirección de email</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div> --}}

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                Enviar enlace para resetear el password
                            </button>
                        </div>
                    </div>
                {!! Form::close() !!}


        </div>
    </div>
</div>
@endsection
