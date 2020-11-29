@extends('layout.app')

@section('content')
    <div class="rcv-content">
        <div class="rcv-container">
            <div class="rcv-card-header">
                <h2>S'inscrire</h2>
            </div>
            <div class="rcv-card-body">
               <form method="POST" action="{{ route('register') }}">
                   @csrf
                   <div class="form-part">
                       <label for="name" class="form-label">Nom</label>
                       <input id="name" type="text" class="form-input @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                       @error('name')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                       @enderror
                   </div>
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
                       <input id="password" type="password" class="form-input @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required autocomplete="new-password" autofocus>
                       @error('password')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                       @enderror
                   </div>
                   <div class="form-part">
                       <label for="password-confirm" class="form-label">Confirmation du mot de passe</label>
                       <input id="password-confirm" type="password" class="form-input @error('password-confirm') is-invalid @enderror" name="password_confirmation" value="{{ old('password-confirm') }}" required autocomplete="new-password" autofocus>
                       @error('password-confirm')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                       @enderror
                   </div>
                   <div class="form-end">
                       <button type="submit" class="btn form-submit">
                           S'inscrire
                       </button>
                       <a href="{{route('login')}}" class="form-redirect">Déjà un compte</a>
                   </div>
               </form>
            </div>
        </div>
    </div>
@endsection
