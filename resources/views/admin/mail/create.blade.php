@extends('admin.mail.index')

@section('addsomeele')
    <div class="mail-new">
        <form>
            @csrf
            <div class="mail-content">
                <div class="mail-header">
                    <div class="head_part">
                        <input type="text" name="receiver" placeholder="destinataire">
                    </div>
                    <div class="head_part">
                        <input type="text" name="obet" placeholder="Objet">
                    </div>
                </div>
                <div class="mail-text">
                    <textarea required name="mail_content">Ecrit ici ton mail</textarea>
                </div>
            </div>
            <div class="mail-footer">
                <a href=""><i class="fas fa-paperclip"></i></a>
                <button type="submit">Envoyer</button>
            </div>
        </form>
    </div>


@endsection
