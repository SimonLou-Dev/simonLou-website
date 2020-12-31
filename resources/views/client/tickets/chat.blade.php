@extends('layout.app')

@section('content')
    <div id="ticket-chat">
        <div id="chat-content">
            <section class="informations">
                <div class="item-header">
                    <h5 class="processing"><span class="icon"><i class="fas fa-spinner"></i></span>En cours</h5>
                    <div class="divider"></div>
                    <h2>Je suis le nom</h2>
                    <h4>Je suis la catégorie</h4>
                    <h6>Je suis le nom du projet</h6>
                </div>
                <div class="item-content">
                    <p>Absolutios mori in tectum!Fortis brevis calcaria est. Nunquam locus glos. Calceus magnum accentor est.</p>
                </div>
                <div class="divider"></div>
                <div class="item-footer">
                    <h4>Créé le : 12/23/4126</h4>
                </div>
            </section>
            <section class="dialogue">
                <div class="chat-container">
                    <div class="chat-msg">
                        <div class="msg-content" id="tickets_chat">
                            <div class="me msg">
                                <h4>Claude</h4>
                                <div class="divider-container"><div class="divider"></div></div>
                                <p>Ecce, germanus fermium! Agripetas credere! Genetrix ferox ventus est. Hilotaes cantare, tanquam lotus accola.</p>
                                <div class="divider-container"><div class="divider"></div></div>
                                <h5>14/25/1000 à 13h30</h5>
                            </div>
                        </div>
                        <div class="msg-content">
                            <div class="other msg">
                                <h4>Simon Lou</h4>
                                <div class="divider-container"><div class="divider"></div></div>
                                <p>Ecce, germanus fermium! Agripetas credere! Genetrix ferox ventus est. Hilotaes cantare, tanquam lotus accola.</p>
                                <div class="divider-container"><div class="divider"></div></div>
                                <h5>14/25/1000 à 13h30</h5>
                            </div>
                        </div>
                        <div class="msg-content">
                            <div class="other msg">
                                <h4>Simon Lou</h4>
                                <div class="divider-container"><div class="divider"></div></div>
                                <p>Ecce, germanus fermium! Agripetas credere! Genetrix ferox ventus est. Hilotaes cantare, tanquam lotus accola.</p>
                                <div class="divider-container"><div class="divider"></div></div>
                                <h5>14/25/1000 à 13h30</h5>
                            </div>
                        </div>
                        <div class="msg-content">
                            <div class="me msg">
                                <h4>Claude </h4>
                                <div class="divider-container"><div class="divider"></div></div>
                                <p>Ecce, germanus fermium! Agripetas credere! Genetrix ferox ventus est. Hilotaes cantare, tanquam lotus accola. Ecce, germanus fermium! Agripetas credere! Genetrix ferox ventus est. Hilotaes cantare, tanquam lotus accola.</p>
                                <div class="divider-container"><div class="divider"></div></div>
                                <h5>14/25/1000 à 13h30</h5>
                            </div>
                        </div>
                    </div>
                    <form>
                        @csrf
                        <div class="form-left">
                            <label>Ecrire un message</label>
                            <button type="submit">Envoyer</button>
                        </div>

                        <textarea type="text" disabled> </textarea>
                    </form>
                </div>
            </section>
        </div>
    </div>
@endsection
