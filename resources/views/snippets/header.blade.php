<!-- Header -->
<header>
    <!-- Header desktop -->
    <div class="wrap-menu-header gradient1 trans-0-4">
        <div class="container h-full">
            <div class="wrap_header trans-0-3">
                <!-- Logo -->
                <div class="logo">
                    <a href="/">
                        <img src="images/icons/logo.png" alt="IMG-LOGO" data-logofixed="images/icons/logo2.png">
                    </a>
                </div>

                <!-- Menu -->
                <div class="wrap_menu p-l-45 p-l-0-xl">
                    <nav class="menu">
                        <ul class="main_menu">
                            @php
                                $currentPath = basename(request()->path());
                                $active = "active_link";
                            @endphp
                            <li class="{{ ($currentPath ==  'inicio' || $currentPath == '/') ? $active : '' }}">
                                <a href="{{ route('index') }}">Início</a>
                            </li>

                            <li class="{{ $currentPath ==  'cardapio' ? $active : '' }}">
                                <a href="{{ route('cardapio') }}" class="">Cardápio</a>
                            </li>

                            <li class="{{ $currentPath ==  'reservas' ? $active : '' }}">
                                <a href="{{ route('reservas') }}" class="">Reservas</a>
                            </li>

                            <li class="{{ $currentPath ==  'galeria' ? $active : '' }}">
                                <a href="{{ route('galeria') }}" class="">Galeria</a>
                            </li>

                            <li class="{{ $currentPath ==  'sobre' ? $active : '' }}">
                                <a href="{{ route('sobre') }}" class="">Sobre</a>
                            </li>

                            <li class="{{ $currentPath ==  'blog' ? $active : '' }}">
                                <a href="{{ route('blog') }}" class="">Blog</a>
                            </li>

                            <li class="{{ $currentPath ==  'contato' ? $active : '' }}">
                                <a href="{{ route('contato') }}" class="">Contato</a>
                            </li>
                        </ul>
                    </nav>
                </div>

                <!-- Social -->
                <div class="social flex-w flex-l-m p-r-20">
                    <a href="#"><i class="fa fa-tripadvisor" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-facebook m-l-21" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-instagram m-l-21" aria-hidden="true"></i></a>

                    <button class="btn-show-sidebar m-l-33 trans-0-4"></button>
                </div>
            </div>
        </div>
    </div>
</header>
