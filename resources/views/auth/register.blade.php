@extends('layouts.app')


@section('content')

 <div class="col">
       <div class="row ">
            <div class="col offset-m4 m4 s12">
                <div class="card p5">
                  <h3>¡Regístrate!</h3>

                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        


                        

                        <div class="row">
                            <div class="input-field col s12">
                              <input  name="name" type="text" class="validate" value="{{ old('name') }}" required >
                              <label for="name">Nombre</label>
                            </div>
                          </div>


                         

                         <div class="row">
                            <div class="input-field col s12">
                              <input  name="email" type="email" class="validate" value="{{ old('email') }}" required >
                              <label for="email">Correo electrónico</label>
                            </div>
                          </div>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror



                            <div class="row">
                            <div class="input-field col s6">
                              <input  name="password" type="password" class="validate" value="{{ old('password') }}" required >
                              <label for="password">Contraseña</label>
                            </div>
                        @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <div class="input-field col s6">
                              <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                              <label for="password-confirm">Confirmar contraseña</label>
                            </div>
                          </div>



                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-block color-cut">
                                    {{ __('Registrar') }}
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
</div>s
@endsection
