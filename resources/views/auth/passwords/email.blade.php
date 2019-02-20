<!--@extends('layouts.app')-->
<link  rel="stylesheet" type="text/css" href="{{asset('css/theme-default.css')}}"> 
        <link  rel="stylesheet" type="text/css" href="{{asset('css/Mensajes.css')}}">          
@section('content')
<div class="email-container">
    <div class="row">
    <div class="login-logo"></div>
        <div class="col-md-8 col-md-offset-2">
            <div class="email-body">
                <div class="email-title">Restablecer Contraseña</div>
               
                <div class="">
                    @if (session('status'))
                        <div class="alert alert-success">
                            ¡Exito!
                            <br> Revise su e-mail enviamos un link para restablecer su contraseña.
                        </div>
                    @endif
                    
                    <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail:</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>El e-mail ingresado no se encuentra en la base de datos.</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="login-footer">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-success">
                                    Restablecer
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
