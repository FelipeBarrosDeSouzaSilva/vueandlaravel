@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <table class="table col-md" id="mostrarUsuario">          
            <button v-on:click="percorrerTabela">Mostrar Usurios</button>            
        <thead>
            <tr>
                <th>id</th>
                <th>nome</th>
                <th>e-mail</th>
                <th>acao</th>
            </tr>
        </thead>
        <tbody id="tabela">
          inicio @{{typeof conjunto_users}} fim
          <!--inicio <ul v-for="conjunto_users in c">
            <li>@{{c.id}}</li>
          </ul> fim-->
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>@mdo</td>
                <td>
                    <button class="btn-info btn" @click="alert(90)">alterar</button><button class="btn-danger btn">deletar</button>
                </td>
            </tr>
            <tr>
            <th scope="row">0</th>
                <td>teste</td>
                <td>@teste</td>
                <td>
                    <button class="btn-info btn" @click="alert(90)">alterar</button><button class="btn-danger btn">deletar</button>
                </td>
            </tr>

        </tbody>
    </table>

    <div class="col-md-8 col-lg-4 mx-2">
            <div class="card" id="form">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>c
        </div>

        
    </div>a
</div>
@endsection
