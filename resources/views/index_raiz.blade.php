@extends('templates.layout')

@section('extra_meta')
	<meta name="description" content="O melhor sabor nordestino na região sul do RN."/>
	<link rel="canonical" href="http://restaurantetupi.com.br/" />
@endsection

@section('title')
Restaurante Tupi
@endsection

<!-- Index blade -->
@section('page_content')

<!-- Carousel -->
<section class="section-slide">
    <div class="wrap-slick1">
        <div class="slick1">
            <div class="item-slick1 slide1 item1-slick1">
                <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
                    <span class="caption1-slide1 txt0 t-center animated visible-false m-b-15" data-appear="fadeInDown">
                        Bem Vindo ao
                    </span>

                    <h2 class="caption2-slide1 tit1 t-center animated visible-false" data-appear="fadeInUp">
                        Restaurante Tupi
                    </h2>
                </div>
            </div>

            <div class="item-slick1 slide2 item2-slick1">
                <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
                    <span class="caption1-slide1 txt0 t-center animated visible-false m-b-15" data-appear="rollIn">
                        Amplo espaço para famílias
                    </span>

                    <h2 class="caption2-slide1 tit1 t-center animated visible-false" data-appear="lightSpeedIn">
                        Conforto
                    </h2>
                </div>
            </div>

            <div class="item-slick1 slide3 item3-slick1">
                <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
                    <span class="caption1-slide1 txt0 t-center animated visible-false m-b-15" data-appear="rotateInDownLeft">
						Ambiente sossegado <br>
						Vista incrível
                    </span>

                    <h2 class="caption2-slide1 tit1 t-center animated visible-false" data-appear="rotateInUpRight">
                        Natureza
                    </h2>
                </div>
            </div>

        </div>

        <div class="wrap-slick1-dots"></div>
    </div>
</section>

<!-- Welcome -->
<section class="section-welcome bg1-pattern p-t-70 p-b-70">
	<div class="container">
		<!-- A little about -->
		<div class="row">
			<div class="col-md-6 p-t-35 p-b-30">
				<div class="wrap-text-welcome t-center">
					<span class="tit2 t-center">
						Restaurante Tupi
					</span>

					<h3 class="tit3 t-center m-t-5">
						Bem Vindo
					</h3>

					<p class="m-b-22 size3 p-t-25 m-l-r-auto presentation-footer">
						&emsp;&emsp;O Tupi foi pensado e criado com o intuito de oferecer aos clientes refeições de boa qualidade aliadas
						a um ambiente tranquilo e agradável sem abrir mão, porém, do preço acessível.
                        <br>
						&emsp;&emsp;
                        Oferecemos um cardápio regional que vai desde a carne de sol na brasa, galinha e paçoca até
						peixes e camarões. Todos servidos em pratos para duas ou quatro pessoas, além dos individuais.
						<br>
						&emsp;&emsp;
                        A proposta da casa é comer bem e relaxar. O espaço proporciona às
						famílias momentos de paz e bem-estar em meio à natureza enquanto desfrutam de nossos preparos.
					</p>
					<a href="{{ route('about') }}" class="txt5">
						Ler Mais
						<i class="fas fa-long-arrow-alt-right m-l-10" aria-hidden="true"></i>
					</a>
				</div>
			</div>

			<div class="col-md-6 p-b-30">
                <div style="height: 100%;" class="bo-rad-10 hov-img-zoom m-l-r-auto">
                    <a href="{{ asset('images/original/entrada.jpg') }}" data-lightbox="gallery">
                        <img style="object-fit: cover;" src="{{ asset('images/thumbs/entrada.jpg') }}" alt="Entrada Tupi">
                    </a>
                </div>
			</div>
		</div>

		<!-- A little about space -->
        <div class="row">
			<div class="wrap-text-welcome container t-center m-t-30">
				<span class="tit2 p-l-15 p-r-15">
					Conheça
				</span>
				<h3 class="tit3 m-t-5 contact-footer">
					Nossas instalações
				</h3>
			</div>
            <div class="col-md-4 p-t-30">
                <div class="blo1">
                    <div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom">
                        <a href="{{ asset('images/original/salao.jpg') }}" data-lightbox="gallery">
                            <img src="{{ asset('images/thumbs/salao.jpg') }}" alt="Salão Tupi">
                        </a>
                    </div>

                    <div class="wrap-text-blo1 p-t-35">
                        <h4 class="txt5 color0-hov trans-0-4 m-b-13 text-center">
                            Salão Principal
                        </h4>

                        <p class="m-b-20">
                            O Restaurante tupi dispõe de um vasto espaço interno no qual os clientes podem se acomodar...
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 p-t-30">
                <div class="blo1">
                    <div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom">
                        <a href="{{ asset('images/original/parque.jpg') }}" data-lightbox="gallery">
                            <img src="{{ asset('images/thumbs/parque.jpg') }}" alt="Parque Tupi">
                        </a>
                    </div>
                    <div class="wrap-text-blo1 p-t-35">
                        <h4 class="txt5 color0-hov trans-0-4 m-b-13 text-center">
                            Espaço Kids
                        </h4>

                        <p class="m-b-20">
                            O Restaurante Tupi possui um playground, no qual as crianças podem brincar etc....
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 p-t-30">
                <div class="blo1">
                    <div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom">
                        <a href="{{ asset('images/original/redario.jpg') }}" data-lightbox="gallery">
                            <img src="{{ asset('images/thumbs/redario.jpg') }}" alt="Redário Tupi">
                        </a>
                    </div>

                    <div class="wrap-text-blo1 p-t-35">
                        <h4 class="txt5 color0-hov trans-0-4 m-b-13 text-center">
                            Redário
                        </h4>

                        <p class="m-b-20">
                            Nosso Restaurante dispõe de um local mais afastado direcionado ao repouso e relaxamento dos clientes.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-right m-t-25">
                <a href="{{ route('about') }}" class="txt5" style="font-size: 28px;">
                    Ler Mais
                    <i class="fas fa-long-arrow-alt-right m-l-10" aria-hidden="true"></i>
                </a>
            </div>
        </div>
	</div>
</section>

<!-- Intro -->
<section>
    <div class="header-intro rustic t-center p-t-135 p-b-158">
		<h3 class="tit4 t-center p-l-15 p-r-15 p-t-3">
			Ambiente rústico
		</h3>
	</div>
</section>

<!-- Maps -->
<section class="p-t-60 p-b-105">
    <div class="wrap-text-welcome container t-center">
        <span class="tit2 p-l-15 p-r-15">
			Encontre a gente!
		</span>
        <h3 class="tit3 m-b-25 m-t-5 contact-footer">
            Veja o mapa
        </h3>
        <div class="bo8 bo-rad-10 of-hidden p-t-7" style="background-color: #222;">
            <iframe width="100%" height="600" src="https://maps.google.com/maps?q=restaurante%20tupi%20goianinha&t=k&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
        </div>
    </div>
</section>

<!-- Intro -->
<section>
    <div class="header-intro meet-us parallax100 t-center p-t-135 p-b-158">
		<span class="tit2 p-l-15 p-r-15" style="color: #fff;">
			Conheça o
		</span>
		<h3 class="tit4 t-center p-l-15 p-r-15 p-t-3">
			Vale da Gruta do Bode
		</h3>
	</div>
</section>

<!-- Review -->
<section class="section-review p-t-70">
    <div class="container title-review t-center m-b-2">
		<span class="tit2 p-l-15 p-r-15">
			Veja o que o pessoal diz
		</span>

		<h3 class="tit8 t-center p-l-20 p-r-15 p-t-3 contact-footer">
			Avalie também!
		</h3>
	</div>

	<!-- Google Reviews -->
	<script src="https://apps.elfsight.com/p/platform.js" defer></script>
	<div class="elfsight-app-b836c5c8-bac0-4c36-9c38-7f572ecaa01b"></div>
</section>

<section>
    <div class="header-intro the-best parallax100 t-center p-t-135 p-b-158">
		<span class="tit2 p-l-15 p-r-15" style="color: #fff;">
			O melhor
		</span>
		<h3 class="tit4 t-center p-l-15 p-r-15 p-t-3">
			Região sul do RN
		</h3>
	</div>
</section>

<!-- Social -->
<section class="p-t-70">
    <div class="wrap-text-welcome container t-center">
        <span class="tit2 p-l-15 p-r-15">
			Siga-nos 
		</span>
        <h3 class="tit3 m-b-25 m-t-5 contact-footer">
            Acompanhe nosso trabalho
        </h3>
    </div>
    <div>
        <script src="https://apps.elfsight.com/p/platform.js" defer></script>
        <div class="elfsight-app-a1a5d7ce-bd3d-49f6-8f13-6d796c99b226"></div>
    </div>
</section>

@include('components/contact-footer')

@endsection

@section('additional_scripts')
<script src="{{ asset("vendor/slick/slick.min.js") }}"></script>
<script src="{{ asset("js/slick-custom.js") }}"></script>
<script type="text/javascript">
    window.onload = function() {
        $(".eapps-remove-link").parent().hide();
    };
</script>
@endsection
