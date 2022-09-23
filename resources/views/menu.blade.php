@extends('templates.layout') 

@section('extra_meta')
<meta name="description" content="Confira os pratos mais pedidos no Restaurante Tupi." />
@endsection 

@section('title') 
Cardápio 
@endsection

<!-- Menu -->
@section('page_content')
<!-- Title Page -->
<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url({{ asset('images/menu/cardapio.jpg') }});">
    <h2 class="tit6 t-center">
			Nossa Culinária
		</h2>
</section>

<!-- Main menu -->
<section class="section-mainmenu p-t-60 p-b-10 bg1-pattern">
    <div class="container">
        <div class="row justify-content-md-center contact-footer m-b-30">
            <div class="col-sm-12 text-center">
                <span class="tit2">Pratos</span>
                <h1 class="txt1">Mais Pedidos</h1>
            </div>
            <div style="margin: auto 0" class="col-sm-12 text-center">
                <span class="txt21b">
                    O Tupi oferece uma ampla variedade de pratos da culinária regional.<br>
                </span>
            </div>
        </div>
        <div class="row p-b-30">
            <div class="col-md-8 col-lg-6 m-l-r-auto">
                <!-- Block3 -->
                <div class="blo3 flex-w flex-col-l-sm m-b-30">
                    <div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
                        <a href="{{ asset('images/menu/oca.jpg') }}" data-lightbox="gallery">
                            <img src="{{ asset("images/menu/oca.jpg ") }}" alt="Camarão na Oca">
                        </a>
                    </div>

                    <div class="text-blo3 size21 flex-col-l-m">
                        <span class="txt21b m-b-3">
							Camarão na Oca
						</span>

                        <span class="txt23">
							Camarão empanado ao modo Tupi. Acompanha arroz cremoso de manteiga de camarão e coalho e batata frita.
						</span>
                    </div>
                </div>

                <!-- Block3 -->
                <div class="blo3 flex-w flex-col-l-sm m-b-30">
                    <div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
                        <a href="{{ asset('images/menu/seridoense.jpg') }}" data-lightbox="gallery">
                            <img src="{{ asset("images/menu/seridoense.jpg ") }}" alt="Camarão Seridoense">
                        </a>
                    </div>

                    <div class="text-blo3 size21 flex-col-l-m">
                        <span class="txt21b m-b-3">
							Camarão Seridoense
						</span>

                        <span class="txt23">
							Camarão salteado na manteiga da terra com creme de macaxeira.
                            Acompanha arroz branco, farofa e macaxeira frita.
						</span>
                    </div>
                </div>

                <!-- Block3 -->
                <div class="blo3 flex-w flex-col-l-sm m-b-30">
                    <div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
                        <a href="{{ asset('images/menu/pituba.jpg') }}" data-lightbox="gallery">
                            <img src="{{ asset("images/menu/pituba.jpg ") }}" alt="Carne de Sol Pituba">
                        </a>
                    </div>

                    <div class="text-blo3 size21 flex-col-l-m">
                        <span class="txt21b m-b-3">
							Carne de Sol Pituba
						</span>

                        <span class="txt23">
							Carne de sol grelhada. Acompanha baião de dois defumado e macaxeira frita.
						</span>
                    </div>
                </div>

                <div class="blo3 flex-w flex-col-l-sm m-b-30">
                    <div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
                        <a href="{{ asset('images/menu/pacoca.jpg') }}" data-lightbox="gallery">
                            <img src="{{ asset("images/menu/pacoca.jpg ") }}" alt="Paçoca">
                        </a>
                    </div>

                    <div class="text-blo3 size21 flex-col-l-m">
                        <span class="txt21b m-b-3">
							Paçoca Tupi
						</span>

                        <span class="txt23">
							Carne de sol triturada, salteada com temperos regionais. Acompanha arroz de leite, feijão verde e macaxeira frita.
						</span>
                    </div>
                </div>

                <div class="blo3 flex-w flex-col-l-sm m-b-30">
                    <div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
                        <a href="{{ asset('images/menu/camarao_alho_oleo.jpg') }}" data-lightbox="gallery">
                            <img src="{{ asset("images/menu/camarao_alho_oleo.jpg ") }}" alt="Camarão ao alho e óleo">
                        </a>
                    </div>

                    <div class="text-blo3 size21 flex-col-l-m">
                        <span class="txt21b m-b-3">
							Camarão no alho e óleo
						</span>

                        <span class="txt23">
							Camarão salteado no alho e óleo. Acompanha arroz branco, macaxeira frita, farofa e vinagrete.
						</span>
                    </div>
                </div>

            </div>

            <div class="col-md-8 col-lg-6 m-l-r-auto">
                <!-- Block3 -->
                <div class="blo3 flex-w flex-col-l-sm m-b-30">
                    <div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
                        <a href="{{ asset('images/menu/peixe_potiguar.jpg') }}" data-lightbox="gallery">
                            <img src="{{ asset("images/menu/peixe_potiguar.jpg ") }}" alt="Peixe Potiguar">
                        </a>
                    </div>

                    <div class="text-blo3 size21 flex-col-l-m">
                        <span class="txt21b m-b-3">
							Peixe Potiguar
						</span>

                        <span class="txt23">
							Peixe grelhado com molho de ervas. Acompanha arroz cremoso de camarão e macaxeira frita.
						</span>
                    </div>
                </div>

                <!-- Block3 -->
                <div class="blo3 flex-w flex-col-l-sm m-b-30">
                    <div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
                        <a href="{{ asset('images/menu/moqueca.jpg') }}" data-lightbox="gallery">
                            <img src="{{ asset("images/menu/moqueca.jpg ") }}" alt="Moqueca de Peixe e Camarão">
                        </a>
                    </div>

                    <div class="text-blo3 size21 flex-col-l-m">
                        <span class="txt21b m-b-3">
							Moqueca de Peixe e Camarão
						</span>

                        <span class="txt23">
							Acompanha arroz branco, farofa e pirão de peixe.
						</span>
                    </div>
                </div>

                <!-- Block3 -->
                <div class="blo3 flex-w flex-col-l-sm m-b-30">
                    <div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
                        <a href="{{ asset('images/menu/galinha.jpg') }}" data-lightbox="gallery">
                            <img src="{{ asset("images/menu/galinha.jpg ") }}" alt="Galinha Tupi">
                        </a>
                    </div>

                    <div class="text-blo3 size21 flex-col-l-m">
                        <span class="txt21b m-b-3">
							Galinha Tupi
						</span>

                        <span class="txt23">
                            Galinha caipira torrada. Acompanha arroz branco, feijão verde, pirão de galinha, vinagrete, macaxeira cozida e farofa.
						</span>
                    </div>
                </div>

                <div class="blo3 flex-w flex-col-l-sm m-b-30">
                    <div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
                        <a href="{{ asset('images/menu/carne_sol.jpg') }}" data-lightbox="gallery">
                            <img src="{{ asset("images/menu/carne_sol.jpg ") }}" alt="Carne de Sol">
                        </a>
                    </div>

                    <div class="text-blo3 size21 flex-col-l-m">
                        <span class="txt21b m-b-3">
							Carne de sol
						</span>

                        <span class="txt23">
							Carne de sol grelhada. Acompanha arroz branco, feijão verde, pirão de galinha, vinagrete, macaxeira cozida e farofa.
						</span>
                    </div>
                </div>

                <div class="blo3 flex-w flex-col-l-sm m-b-30">
                    <div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
                        <a href="{{ asset('images/menu/catu.jpg') }}" data-lightbox="gallery">
                            <img src="{{ asset("images/menu/catu.jpg ") }}" alt="Camarão Catu">
                        </a>
                    </div>

                    <div class="text-blo3 size21 flex-col-l-m">
                        <span class="txt21b m-b-3">
							Camarão Catu
						</span>

                        <span class="txt23">
							Camarão salteado na manteiga da terra com creme de macaxeira, azeite de dendê e leite de coco.
                            Acompanha arroz branco, farofa e macaxeira frita.
						</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="txt23 p-b-30">
            <p class="text-center">(Clique nas imagens para ampliar)</p>
            <!--p class="text-center">Caso necessite conferir preços do cardápio, favor entrar em contato pelo telefone ou Whatsapp.</p-->
        </div>
    </div>
</section>


<!-- Complete Tupi Menu -->
<section class="section-lunch bg1-pattern p-t-60">
    <div class="container">
        <div class="row justify-content-md-center m-b-50">
            <div class="col text-center">
                <span class="tit2 p-l-15 p-r-15">Veja agora</span>
                <h1 class="txt1 contact-footer">Todos os pratos</h1>
            </div>
        </div>

        <div class="row">

			<!-- Primeira Coluna -->
            <div class="col-md-10 col-lg-6 p-r-35 p-r-15-lg m-l-r-auto">
                <div class="wrap-item-mainmenu p-b-22">

                    <div class="wrapper-mainmenu">
                        <h3 class="tit-mainmenu tit10 p-b-25">Bebidas</h3> 
                        @foreach ($bebidas as $bebida)
                        <div class="item-mainmenu m-b-36">
                            <div class="flex-w flex-b m-b-3">
                                <a class="name-item-mainmenu txt21">{{ $bebida['name'] }}</a>
                                <div class="line-item-mainmenu bg3-pattern"></div>
                                <div class="price-item-mainmenu txt22">R${{ str_replace('.', ',', $bebida['price']) }}</div>
                            </div>
                            <span class="info-item-mainmenu txt23">{{ $bebida['description'] }}</span>
                        </div>
                        @endforeach
                    </div>

                    

                    <div class="wrapper-mainmenu">
                        <h3 class="tit-mainmenu tit10 p-b-25">Sucos</h3> 
                        @foreach ($sucos as $suco)
                        <div class="item-mainmenu m-b-36">
                            <div class="flex-w flex-b m-b-3">
                                <a class="name-item-mainmenu txt21">{{ $suco['name'] }}</a>
                                <div class="line-item-mainmenu bg3-pattern"></div>
                                <div class="price-item-mainmenu txt22">R${{ str_replace('.', ',', $suco['price']) }}</div>
                            </div>
                            <span class="info-item-mainmenu txt23">{{ $suco['description'] }}</span>
                        </div>
                        @endforeach
                    </div>

					

                    <div class="wrapper-mainmenu">
                        <h3 class="tit-mainmenu tit10 p-b-25">Sucos</h3> 
                        @foreach ($sucos as $suco)
                        <div class="item-mainmenu m-b-36">
                            <div class="flex-w flex-b m-b-3">
                                <a class="name-item-mainmenu txt21">{{ $suco['name'] }}</a>
                                <div class="line-item-mainmenu bg3-pattern"></div>
                                <div class="price-item-mainmenu txt22">R${{ str_replace('.', ',', $suco['price']) }}</div>
                            </div>
                            <span class="info-item-mainmenu txt23">{{ $suco['description'] }}</span>
                        </div>
                        @endforeach
                    </div>

					
                    <div class="wrapper-mainmenu">
                        <h3 class="tit-mainmenu tit10 p-b-25">Alcólicos</h3> 
                        @foreach ($alcolicos as $alcolico)
                        <div class="item-mainmenu m-b-36">
                            <div class="flex-w flex-b m-b-3">
                                <a class="name-item-mainmenu txt21">{{ $alcolico['name'] }}</a>
                                <div class="line-item-mainmenu bg3-pattern"></div>
                                <div class="price-item-mainmenu txt22">R${{ str_replace('.', ',', $alcolico['price']) }}</div>
                            </div>
                            <span class="info-item-mainmenu txt23">{{ $alcolico['description'] }}</span>
                        </div>
                        @endforeach
                    </div>

                    

                    <div class="wrapper-mainmenu">
                        <h3 class="tit-mainmenu tit10 p-b-25">Petiscos</h3> 
                        @foreach ($petiscos as $petisco)
                        <div class="item-mainmenu m-b-36">
                            <div class="flex-w flex-b m-b-3">
                                <a class="name-item-mainmenu txt21">{{ $petisco['name'] }}</a>
                                <div class="line-item-mainmenu bg3-pattern"></div>
                                <div class="price-item-mainmenu txt22">R${{ str_replace('.', ',', $petisco['price']) }}</div>
                            </div>
                            <span class="info-item-mainmenu txt23">{{ $petisco['description'] }}</span>
                        </div>
                        @endforeach
                    </div>

                    

                    <div class="wrapper-mainmenu">
                        <h3 class="tit-mainmenu tit10 p-b-25">Cafés</h3> 
                        @foreach ($cafes as $cafe)
                        <div class="item-mainmenu m-b-36">
                            <div class="flex-w flex-b m-b-3">
                                <a class="name-item-mainmenu txt21">{{ $cafe['name'] }}</a>
                                <div class="line-item-mainmenu bg3-pattern"></div>
                                <div class="price-item-mainmenu txt22">R${{ str_replace('.', ',', $cafe['price']) }}</div>
                            </div>
                            <span class="info-item-mainmenu txt23">{{ $cafe['description'] }}</span>
                        </div>
                        @endforeach
                    </div>

                    <h3 class="tit-mainmenu tit10 p-b-25">Sobremesas</h3> 
					@foreach ($sobremesas as $sobremesa)
                    <div class="item-mainmenu m-b-36">
                        <div class="flex-w flex-b m-b-3">
                            <a class="name-item-mainmenu txt21">{{ $sobremesa['name'] }}</a>
                            <div class="line-item-mainmenu bg3-pattern"></div>
                            <div class="price-item-mainmenu txt22">R${{ str_replace('.', ',', $sobremesa['price']) }}</div>
                        </div>
                        <span class="info-item-mainmenu txt23">{{ $sobremesa['description'] }}</span>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- Segunda Coluna -->
            <div class="col-md-10 col-lg-6 p-r-35 p-r-15-lg m-l-r-auto">
                <div class="wrap-item-mainmenu p-b-22">
                    

                    <div class="wrapper-mainmenu">
                        <h3 class="tit-mainmenu tit10 p-b-25">Carnes</h3> 
                        @foreach ($carnes as $carne)
                        <div class="item-mainmenu m-b-36">
                            <div class="flex-w flex-b m-b-3">
                                <a class="name-item-mainmenu txt21">{{ $carne['name'] }}</a>
                                <div class="line-item-mainmenu bg3-pattern"></div>
                                <div class="price-item-mainmenu txt22">R${{ str_replace('.', ',', $carne['price']) }}</div>
                            </div>
                            <span class="info-item-mainmenu txt23">{{ $carne['description'] }}</span>
                        </div>
                        @endforeach
                    </div>

                    

                    <div class="wrapper-mainmenu">
                        <h3 class="tit-mainmenu tit10 p-b-25">Peixes</h3> 
                        @foreach ($peixes as $peixe)
                        <div class="item-mainmenu m-b-36">
                            <div class="flex-w flex-b m-b-3">
                                <a class="name-item-mainmenu txt21">{{ $peixe['name'] }}</a>
                                <div class="line-item-mainmenu bg3-pattern"></div>
                                <div class="price-item-mainmenu txt22">R${{ str_replace('.', ',', $peixe['price']) }}</div>
                            </div>
                            <span class="info-item-mainmenu txt23">{{ $peixe['description'] }}</span>
                        </div>
                        @endforeach
                    </div>

                    

                    <div class="wrapper-mainmenu">
                        <h3 class="tit-mainmenu tit10 p-b-25">Camarões</h3> 
                        @foreach ($camaroes as $camarao)
                        <div class="item-mainmenu m-b-36">
                            <div class="flex-w flex-b m-b-3">
                                <a class="name-item-mainmenu txt21">{{ $camarao['name'] }}</a>
                                <div class="line-item-mainmenu bg3-pattern"></div>
                                <div class="price-item-mainmenu txt22">R${{ str_replace('.', ',', $camarao['price']) }}</div>
                            </div>
                            <span class="info-item-mainmenu txt23">{{ $camarao['description'] }}</span>
                        </div>
                        @endforeach
                    </div>

                    

                    <div class="wrapper-mainmenu">
                        <h3 class="tit-mainmenu tit10 p-b-25">Galinha</h3> 
                        @foreach ($galinhas as $galinha)
                        <div class="item-mainmenu m-b-36">
                            <div class="flex-w flex-b m-b-3">
                                <a class="name-item-mainmenu txt21">{{ $galinha['name'] }}</a>
                                <div class="line-item-mainmenu bg3-pattern"></div>
                                <div class="price-item-mainmenu txt22">R${{ str_replace('.', ',', $galinha['price']) }}</div>
                            </div>
                            <span class="info-item-mainmenu txt23">{{ $galinha['description'] }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>


@endsection