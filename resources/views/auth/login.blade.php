@extends('layout.app')

@section('content')
    <div class="rcv-content">
        <div class="rcv-container">
            <div class="rcv-card-header">
                <h2>Se connecter</h2>
            </div>
            <div class="rcv-card-body">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-part">
                        <label for="email" class="form-label">Adresse mail</label>
                        <input id="email" type="email" class="form-input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                        @enderror
                    </div>
                    <div class="form-part">
                        <label for="password" class="form-label">Mot de passe</label>
                        <input id="password" type="password" class="form-input @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required autocomplete="password" autofocus>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                        @enderror
                    </div>
                    <div class="form-end">
                        <button type="submit" class="btn form-submit">
                            Connexion
                        </button>
                        <a href="{{route('login')}}" class="form-redirect">Mot de passe perdu</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection





