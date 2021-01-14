<nav id="offcanvas-header" uk-offcanvas="overlay: true; mode: slide">
    <div class="uk-offcanvas-bar uk-flex uk-flex-column">
        <span class="uk-offcanvas-close app-offcanvas-close" uk-icon="icon: close; ratio:1.5"></span>
        <ul class="uk-nav uk-nav-center uk-margin-large-top app-offcanvas">
            <li>
                <a class="nav-item {{Request::is('inicio') ?'active':''}}"
                    href="{{ route('home') }}">
                    início
                </a>
            </li>
            <li>
                <a class="nav-item {{Request::is('empresa') ?'active':''}}"
                    href="{{ route('empresa') }}">
                    empresa
                </a>
            </li>
            <li>
                <a class="nav-item {{Request::is('catalogos') ?'active':''}}"
                    href="{{ route('catalogo') }}">
                    catálogos
                </a>
            </li>
            <li>
                <a class="nav-item {{Request::is('contato') ?'active':''}}"
                    href="{{ route('contato') }}">
                    contato
                </a>
            </li>
        </ul>
    </div>
</nav>
