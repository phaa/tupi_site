<header id="myHeader">
    <!-- Header desktop -->
    <div class="wrap-menu-header gradient1 trans-0-4">
        <div class="container h-full">
            <div class="wrap_header trans-0-3">
                <!-- Logo -->
                <div class="logo">
                    <a href="{{ route('index') }}">
                        <img src="{{ asset("images/icons/tupi_logo.png") }}" alt="Logomarca Tupi">
                    </a>
                </div>

                <!-- Menu -->
                <div class="wrap_menu p-l-45 p-l-0-xl">
                    <nav class="menu">
                        <ul class="main_menu">
                            <li class="{{ Route::current()->getName() == 'index' ? 'active_link' : '' }}">
                                <a href="{{ route('index') }}">Início</a>
                            </li>

                            <li class="{{ Route::current()->getName() == 'menu' ? 'active_link' : '' }}">
                                <a href="{{ route('menu') }}">Cardápio</a>
                            </li>

                            <li class="{{ Route::current()->getName() == 'gallery' ? 'active_link' : '' }}">
                                <a href="{{ route('gallery') }}">Galeria</a>
                            </li>

                            <li class="{{ Route::current()->getName() == 'about' ? 'active_link' : '' }}">
                                <a href="{{ route('about') }}">Sobre</a>
                            </li>

                            <!--li class="{{ Route::current()->getName() == 'blog' ? 'active_link' : '' }}">
                                <a href="{{ route('blog') }}">Blog</a>
                            </li-->

                            <li class="{{ Route::current()->getName() == 'contact' ? 'active_link' : '' }}">
                                <a href="{{ route('contact') }}">Contato</a>
                            </li>
                        </ul>
                    </nav>
                </div>

                <!-- Social -->
                <div id="socialSpot" class="social flex-w flex-l-m p-r-20">
                    <a target="_blank" href="https://www.facebook.com/tupirestaurantegoianinha/"><i class="fab fa-facebook-f m-l-15" aria-hidden="true"></i></a>
                    <a target="_blank" href="https://www.instagram.com/restaurante_tupi"><i class="fab fa-instagram m-l-15" aria-hidden="true"></i></a>
                    <a target="_blank" href="https://www.google.com/maps/place/Restaurante+Tupi+-+km+157+BR-101+sentido+Para%C3%ADba+-+Fazenda+Pituba,+Goianinha+-+RN,+59173-000,+Brasil/@-6.34919,-35.167183,17z/data=!3m1!1e3!4m2!3m1!1s0x7b281c9d2336989:0x912c932229897073?hl=pt-BR&gl=US"><i class="fas fa-map-marker-alt m-l-15"></i></a>
                    <a target="_blank" href="https://www.tripadvisor.com.br/ShowUserReviews-g4136730-d5752688-r452110872-Restaurante_Tupi-Goianinha_State_of_Rio_Grande_do_Norte.html"><i class="fab fa-tripadvisor m-l-15" aria-hidden="true"></i></a>
                    <button id="myHamburger" class="hamburger hamburger--collapse trans-0-4" type="button">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</header>
