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
