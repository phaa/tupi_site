<div class="sidebar" data-active-color="green" data-background-color="black" data-image="">
    <!--
    Tip 1: You can change the color of active element of the sidebar using: data-active-color="purple | blue | green | orange | red | rose"
    Tip 2: you can also add an image using data-image tag
    Tip 3: you can change the color of the sidebar with data-background-color="white | black"
    -->
    <div class="logo text-center">

        <a href="" class="logo-normal">
            <img class="container" style="max-width:95%; max-height:95%;
            margin-top: 10px; margin-bottom: 10px;" src="{{ asset('images/icons/TUPI.png') }}">
        </a>

    </div>

    @php
        // Utilitáros para decidir qual ul > li vai ser a "active"

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
                    return Request::segment($segment) == $value ? ' active' : '';
                }
                else {
                    foreach ($value as $v) {
                        if(Request::segment($segment) == $v) return ' active';
                    }
                }
                return '';
            }
        }
    @endphp

    <div class="sidebar-wrapper">
        <div class="user">
            <div class="photo">
                <img src="{{ asset('images/avatar-01.jpg') }}" />
            </div>
            <div class="info">
                <a id="profile-btn" data-toggle="collapse" href="#collapseExample" class="collapsed" aria-expanded="true">
                    <span>
                        {{ explode(' ', Auth::user()->name)[0] }}
                        <b class="caret"></b>
                    </span>
                </a>
                <div class="clearfix"></div>
                <div class="collapse" id="collapseExample">
                    <ul class="nav">
                        <li class="{{ classActiveSegment(2, 'perfil') }}">
                            <a href="">
                                <span class="sidebar-mini"> MP </span>
                                <span class="sidebar-normal"> Meu Perfil </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <ul class="nav">
            <li class="{{ classActiveSegment(2, 'inicio') }}">
                <a href="">
                    <i class="material-icons">home</i>
                    <p> Início </p>
                </a>
            </li>

            <li class="{{ classActiveSegment(2, 'admin') }}">
                <a data-toggle="collapse" href="#admin" >
                    <i class="material-icons">dashboard</i>
                    <p> Administração
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="admin">
                    <ul class="nav">
                        <li class="{{ classActiveSegment(3, 'listar_produtos') }}">
                            <a href="{{ route('products_index') }}">
                                <i class="material-icons">list</i>
                                <span class="sidebar-normal"> Gerenciar Produtos </span>
                            </a>
                        </li>
                        <li class="{{ classActiveSegment(3, 'cadastrar_produto') }}">
                            <a href="{{ route('product_register_form') }}">
                                <i class="material-icons">add</i>
                                <span class="sidebar-normal"> Cadastrar Produtos </span>
                            </a>
                        </li>
                        <li class="{{ classActiveSegment(3, 'funcionarios') }}">
                            <a href="">
                                <i class="material-icons">people</i>
                                <span class="sidebar-normal"> Gerenciar Funcionários </span>
                            </a>
                        </li>
                        <li class="{{ classActiveSegment(3, 'registrar_funcionario') }}">
                            <a href="">
                                <i class="material-icons">person_add</i>
                                <span class="sidebar-normal"> Cadastar Funcionários </span>
                            </a>
                        </li>
                    <li class="{{ classActiveSegment(3, 'mesas') }}">
                        <a href="">
                            <i class="material-icons">assignment_turned_in</i>
                            <span class="sidebar-normal"> Reservar Mesas </span>
                        </a>
                    </li>
                </ul>
                </div>
            </li>

            @if (Auth::user()->worker_type_id == 1 || Auth::user()->worker_type_id == 2)
                <li class="{{ classActiveSegment(2, 'caixa') }}">
                    <a data-toggle="collapse" href="#cashier">
                        <i class="material-icons">attach_money</i>
                        <p> Caixa
                            <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse" id="cashier">
                        <ul class="nav">
                            <li class="{{ classActiveSegment(3, 'caixa') }}">
                                <a href="">
                                    <i class="material-icons">payment</i>
                                    <span class="sidebar-normal"> Gerenciar Caixa </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            @endif

            @if (Auth::user()->worker_type_id == 1 || Auth::user()->worker_type_id == 3)
                <li class="{{ classActiveSegment(2, 'garcom') }}">
                    <a data-toggle="collapse" href="#waiter">
                        <i class="material-icons">local_bar</i>
                        <p> Garçom
                            <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse" id="waiter">
                        <ul class="nav">
                            <li class="{{ classActiveSegment(3, 'fazer_pedidos_') }}">
                                <a href="">
                                    <i class="material-icons">add</i>
                                    <span class="sidebar-normal"> Fazer Pedidos </span>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav">
                            <li class="{{ classActiveSegment(3, 'listar_pedidos_') }}">
                                <a href="">
                                    <i class="material-icons">list</i>
                                    <span class="sidebar-normal"> Painel de Mesas </span>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav">
                            <li class="{{ classActiveSegment(3, 'listar_produtos_') }}">
                                <a href="">
                                    <i class="material-icons">list</i>
                                    <span class="sidebar-normal"> Listar Produtos </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            @endif

            @if (Auth::user()->worker_type_id == 1 || Auth::user()->worker_type_id == 4)
                <li class="{{ classActiveSegment(2, 'cozinheiro') }}">
                    <a data-toggle="collapse" href="#cooker">
                        <i class="material-icons">room_service</i>
                        <p> Cozinheiro
                            <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse" id="cooker">
                        <ul class="nav">
                            <li class="{{ classActiveSegment(3, 'listar_pedidos') }}">
                                <a href="">
                                    <i class="material-icons">room_service</i>
                                    <span class="sidebar-normal"> Visualizar Pedidos </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            @endif

            <li>
                <a href="" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i style="color: #f44336;" class="material-icons">exit_to_app</i>
                    <p style="color: #f44336; font-weight: 600;"> Sair do sistema </p>
                </a>
            </li>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </ul>
    </div>
</div>
