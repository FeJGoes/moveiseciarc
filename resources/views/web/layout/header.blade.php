<header id="main-header">
    <figure id="nav-logo">
        <a href="{{ route('home') }}">
            <img id="logo" src="{{ asset('images/logo-branco.svg') }}" alt="moveis&cia">
        </a>
    </figure>

    <nav id="nav-header">
        <ul>
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
    </nav>
</header>
