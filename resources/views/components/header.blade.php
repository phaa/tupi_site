<!-- Header -->
<header>
    <!-- Header desktop -->
    <div class="wrap-menu-header gradient1 trans-0-4">
        <div class="container h-full">
            <div class="wrap_header trans-0-3">
                <!-- Logo -->
                <div class="logo">
                    <a href="/">
                        <img src="images/icons/tupi_logo.png" alt="IMG-LOGO">
                    </a>
                </div>

                <!-- Menu -->
                <div class="wrap_menu p-l-45 p-l-0-xl">
                    <nav class="menu">
                        <ul class="main_menu">
                            @php

                            if (!function_exists('classActivePath'))
                            {
                                function classActivePath($path)
                                {
                                    return Request::is($path) ? ' active' : '';
                                }
                            }

                            if (!function_exists('classActiveSegment'))
                            {
                                function classActiveSegment($segment, $value)
                                {
                                    if(!is_array($value)) {
                                        return Request::segment($segment) == $value ? ' active_link' : '';
                                    }
                                    else {
                                        foreach ($value as $v) {
                                            if(Request::segment($segment) == $v) return ' active_link';
                                        }
                                    }
                                    return '';
                                }
                            }

                            @endphp

                            <li class="{{ classActiveSegment(1, '') }}">
                                <a href="{{ route('index') }}">Início</a>
                            </li>

                            <li class="{{ classActiveSegment(1, 'cardapio') }}">
                                <a href="{{ route('menu') }}" class="">Cardápio</a>
                            </li>

                            <li class="{{ classActiveSegment(1, 'galeria') }}">
                                <a href="{{ route('gallery') }}" class="">Galeria</a>
                            </li>

                            <li class="{{ classActiveSegment(1, 'sobre') }}">
                                <a href="{{ route('about') }}" class="">Sobre</a>
                            </li>

                            <li class="{{ classActiveSegment(1, 'blog') }}">
                                <a href="{{ route('blog') }}" class="">Blog</a>
                            </li>

                            <li class="{{ classActiveSegment(1, 'contato') }}">
                                <a href="{{ route('contact') }}" class="">Contato</a>
                            </li>
                        </ul>
                    </nav>
                </div>

                <!-- Social -->
                <div class="social flex-w flex-l-m p-r-20">
                    <a target="_blank" href="https://www.tripadvisor.com.br/ShowUserReviews-g4136730-d5752688-r452110872-Restaurante_Tupi-Goianinha_State_of_Rio_Grande_do_Norte.html"><i class="fa fa-tripadvisor" aria-hidden="true"></i></a>
                    <a target="_blank" href="#"><i class="fa fa-facebook m-l-21" aria-hidden="true"></i></a>
                    <a target="_blank" href="https://www.instagram.com/restaurante_tupi"><i class="fa fa-instagram m-l-21" aria-hidden="true"></i></a>

                    <button class="btn-show-sidebar m-l-33 trans-0-4"></button>
                </div>
            </div>
        </div>
    </div>
</header>
