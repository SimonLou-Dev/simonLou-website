@extends('layout.app')

@section('content')
    <div class="rcv-content">
        <div class="rcv-container">
            <div class="rcv-card-header">
                <h2>Vérification de l'email</h2>
            </div>
            <div class="rcv-card-body">
                @if (session('resent'))
                    <div class="alert alert-success" role="alert">
                        Un nouvel de vérification vous a bien été envoyé !
                    </div>
                @endif
                <p>Avant de continuer vous devez vérifier votre adresse mail avec le lien, si vous en avez pas reçu clikez en dessous</p>
                <form method="POST" method="POST" action="{{ route('verification.resend') }}">
                    @csrf
                    <div class="form-part">
                        <button type="submit" class="btn form-submit">
                            Renvoyer un mail
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection








