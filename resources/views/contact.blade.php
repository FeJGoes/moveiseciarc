@extends('layouts.institutional')

@section('title', 'Contato, Móveis&Cia')

@section('content')
    <div class="uk-width-1-3 uk-margin-auto">
        <h3 class="uk-text-center uk-margin-medium-top">Fale Conosco</h3>
        <div class="uk-margin-middle-top">
            <label for="nome" class="uk-form-label">
                <small>*</small>
                Nome:
            </label>
            <input class="uk-input uk-form-small" id="nome" type="text" maxlength="100" required>
        </div>
        <div class="uk-margin-top">
            <label for="email" class="uk-form-label">
                <small>*</small>
                Email:
            </label>
            <input class="uk-input uk-form-small" id="email" type="text" maxlength="100" required>
        </div>
        <div class="uk-margin-top">
            <label for="mensagem" class="uk-form-label">
                <small>*</small>
                Sua mensagem:
            </label>
            <textarea class="uk-textarea" id="mensagem" cols="30" rows="5"></textarea>
        </div>
        <div class="uk-flex uk-flex-center uk-margin ">
            <button class="uk-button uk-button-small uk-width-1-3 btn-yellow">Enviar</button>
        </div>
    </div>
    <div id="section-info" class="uk-width-1-1 uk-padding">
        <h4>Meios para o Contato:</h4>
        <div id="contact-info" class="uk-width-1-1">

            <div class="box-contact">
                <h5>Contato</h5>
                <ul>
                    <li>(19) 3534-3356</li>
                    <li>(19) 3533-5244</li>
                    <li>
                        (19) 98315-0394 &nbsp
                        <span uk-icon="icon: whatsapp; ratio:.6"></span>
                    </li>
                </ul>
            </div>

            <div class="box-contact">
                <h5>Redes Sociais</h5>
                <table>
                    <tbody>
                        <tr>
                            <td><a href="">facebook@moveiseciarc &nbsp</a></td>
                            <td><span uk-icon="icon: facebook; ratio:1" ></span></td>
                        </tr>
                        <tr>
                            <td><a href="">instagram@moveiseciarc &nbsp</a></td>
                            <td><span uk-icon="icon: instagram; ratio:1"></span></td>
                        </tr>
                        <tr>
                            <td><a href="mailto:contato@moveiseciarc.com">contato@moveiseciarc.com &nbsp</a></td>
                            <td><span uk-icon="icon: mail; ratio:1"></span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div id="section-location">
        <div class="box-location uk-width-1-5">
            <h5>Endereço</h5>
            <ul>
                <li>Rua 1 - Entre Av. 3 e 5</li>
                <li>Número 961</li>
                <li>Centro</li>
                <li>Rio Claro - SP</li>
            </ul>
        </div>
        <div class="uk-width-1-5" id="map" style="background-color: red;">
            
        </div>
    </div>
@endsection