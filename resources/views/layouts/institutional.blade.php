<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon" />

        <title>@yield('title')</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/uikit.min.css') }}" rel="stylesheet">
        <script src="{{ asset('js/uikit.min.js') }}"></script>
        <script src="{{ asset('js/uikit-icons.min.js') }}"></script>

    </head>
    <body>
        <header id="main-header">
            <figure id="nav-logo">
                <a href="{{ route('home') }}">
                    <img id="logo" src="{{ asset('images/logo-branco.svg') }}" alt="moveis&cia">
                </a>
            </figure>
        
            <nav id="nav-header">
                <ul>
                    <li><a href="{{ route('home') }}" class="nav-item {{Request::is('inicio') ?'active':''}}">início</a></li>
                    <li><a href="{{ route('empresa') }}" class="nav-item {{Request::is('empresa') ?'active':''}}">empresa</a></li>
                    <li><a href="{{ route('catalogo') }}" class="nav-item {{Request::is('catalogos') ?'active':''}}">catálogos</a></li>
                    <li><a href="{{ route('contato') }}" class="nav-item {{Request::is('contato') ?'active':''}}">contato</a></li>
                </ul>
            </nav>
        </header>

        <main>
            @yield('content')
        </main>

        <footer id="main-footer">
            <div id="info-footer">
                <div class="box-footer">
                    <h5>Endereço</h5>
                    <ul>
                        <li>Rua 1 - Entre Av. 9 e 11</li>
                        <li>Número 961</li>
                        <li>Centro</li>
                        <li>Rio Claro - SP</li>
                    </ul>
                </div>
                <div class="box-footer">
                    <h5>Contato</h5>
                    <ul>
                        <li>(19) 3534-3356</li>
                        <li>(19) 3533-5244</li>
                        <li>
                            (19) 98315-0394 &nbsp
                            <span uk-icon="icon: whatsapp; ratio:.6" style="color: #25d366;"></span>
                        </li>
                    </ul>
                </div>
                <div class="box-footer">
                    <h5>Redes Sociais</h5>
                    <table>
                        <tbody>
                            <tr>
                                <td><a href="">facebook@moveiseciarc &nbsp</a></td>
                                <td><span uk-icon="icon: facebook; ratio:1" style="color:#3b5998;"></span></td>
                            </tr>
                            <tr>
                                <td><a href="">instagram@moveiseciarc &nbsp</a></td>
                                <td><span uk-icon="icon: instagram; ratio:1" style="color:#833AB4;"></span></td>
                            </tr>
                            <tr>
                                <td><a href="mailto:contato@moveiseciarc.com">contato@moveiseciarc.com &nbsp</a></td>
                                <td><span uk-icon="icon: mail; ratio:1" style="color:#D44638;"></span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div id="copyright-footer">
                <small>Móveis & Cia &copy Todos os direitos reservados.</small>
            </div>
        </footer>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
