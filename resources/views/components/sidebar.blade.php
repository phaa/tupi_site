<aside class="sidebar trans-0-3">
    <!-- Button Hide sidebar -->
    <button id="sidebarHamburger" style="" class="hamburger hamburger--collapse trans-0-4" type="button">
        <span class="hamburger-box">
            <span class="hamburger-inner"></span>
        </span>
    </button>

    <ul class="menu-sidebar" style="margin-top:1%;">
        <div class="p-l-50 p-r-50">
            <img style="width: 100%;" src="{{ asset("images/icons/tupi_logo_completa.png") }}" alt="IMG-LOGO">
        </div>
        <li class="t-center {{ Route::current()->getName() == 'index' ? 'active_link' : '' }}">
            <a href="{{ route('index') }}" class="txt12">Início</a>
        </li>

        <li class="t-center {{ Route::current()->getName() == 'menu' ? 'active_link' : '' }}">
            <a href="{{ route('menu') }}" class="txt12">Cardápio</a>
        </li>

        <li class="t-center {{ Route::current()->getName() == 'gallery' ? 'active_link' : '' }}">
            <a href="{{ route('gallery') }}" class="txt12">Galeria</a>
        </li>

        <li class="t-center {{ Route::current()->getName() == 'about' ? 'active_link' : '' }}">
            <a href="{{ route('about') }}" class="txt12">Sobre</a>
        </li>

        <!--li class="t-center {{ Route::current()->getName() == 'blog' ? 'active_link' : '' }}">
            <a href="{{ route('blog') }}" class="txt12">Blog</a>
        </li-->

        <li class="t-center {{ Route::current()->getName() == 'contact' ? 'active_link' : '' }}">
            <a href="{{ route('contact') }}" class="txt12">Contato</a>
        </li>
    </ul>

    <div class="social flex-w flex-l-m">
        <div class="social-wrapper"> 
            <a target="_blank" href="https://www.facebook.com/tupirestaurantegoianinha/"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
            <a target="_blank" href="https://www.instagram.com/restaurante_tupi"><i class="fab fa-instagram m-l-15" aria-hidden="true"></i></a>
            <a target="_blank" href="https://www.google.com/maps/place/Restaurante+Tupi+-+km+157+BR-101+sentido+Para%C3%ADba+-+Fazenda+Pituba,+Goianinha+-+RN,+59173-000,+Brasil/@-6.34919,-35.167183,17z/data=!3m1!1e3!4m2!3m1!1s0x7b281c9d2336989:0x912c932229897073?hl=pt-BR&gl=US"><i class="fas fa-map-marker-alt m-l-15"></i></a>
            <a target="_blank" href="https://www.tripadvisor.com.br/ShowUserReviews-g4136730-d5752688-r452110872-Restaurante_Tupi-Goianinha_State_of_Rio_Grande_do_Norte.html"><i class="fab fa-tripadvisor m-l-15" aria-hidden="true"></i></a>
        </div>
    </div>

    <li class="t-center">
        <a href="https://wa.me/5584994494411" style="color: #fff;">(84) 99449-4411</a>
    </li>
    <li class="t-center">
        <a href="https://wa.me/5584994482254" style="color: #fff;">(84) 99448-2254</a>
    </li>
</aside>
