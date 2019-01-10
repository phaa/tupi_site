@extends('templates.layout')

@section('title', 'Início')
<!-- Index blade -->
@section('page_content')

<!-- Carousel -->
<section class="section-slide">
    <div class="wrap-slick1">
        <div class="slick1">
            <div class="item-slick1 item1-slick1" style="background-image: url(images/index/deck.JPG);">
                <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
                    <span class="caption1-slide1 txt1 t-center animated visible-false m-b-15" data-appear="fadeInDown">
                        Bem Vindo ao
                    </span>

                    <h2 class="caption2-slide1 tit1 t-center animated visible-false m-t-37" data-appear="fadeInUp">
                        Restaurante Tupi
                    </h2>

                    <!--<div class="wrap-btn-slide1 animated visible-false" data-appear="zoomIn">
                         Button1
                        <a href="menu" class="btn1 flex-c-m size1 txt3 trans-0-4">
                            Cardápio
                        </a>
                    </div>-->
                </div>
            </div>

            <div class="item-slick1 item2-slick1" style="background-image: url(images/index/ambiente.jpg);">
                <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
                    <span class="caption1-slide1 txt1 t-center animated visible-false m-b-15" data-appear="rollIn">
                        Bem Vindo ao
                    </span>

                    <h2 class="caption2-slide1 tit1 t-center animated visible-false m-t-37" data-appear="lightSpeedIn">
                        Restaurante Tupi
                    </h2>
                    <!--
                    <div class="wrap-btn-slide1 animated visible-false" data-appear="slideInUp">
                        Button1
                        <a href="menu" class="btn1 flex-c-m size1 txt3 trans-0-4">
                            Cardápio
                        </a>
                    </div>
                    -->
                </div>
            </div>

            <div class="item-slick1 item3-slick1" style="background-image: url(images/index/planta.jpg);">
                <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
                    <span class="caption1-slide1 txt1 t-center animated visible-false m-b-15" data-appear="rotateInDownLeft">
						Ambiente sossegado. <br>
						Vista incrível.
                    </span>

                    <h2 class="caption2-slide1 tit1 t-center animated visible-false m-t-37" data-appear="rotateInUpRight">
                        Natureza
                    </h2>
					<!--
                    <div class="wrap-btn-slide1 animated visible-false" data-appear="rotateIn">
                         Button1
                        <a href="menu" class="btn1 flex-c-m size1 txt3 trans-0-4">
                            Look Menu
                        </a>
                    </div> -->
                </div>
            </div>

        </div>

        <div class="wrap-slick1-dots"></div>
    </div>
</section>

<!-- Welcome -->
<section class="section-welcome bg1-pattern p-t-120 p-b-105">
	<div class="container">
		<div class="row">
			<div class="col-md-6 p-t-35 p-b-30">
				<div class="wrap-text-welcome t-center">
					<span class="tit2 t-center">
						Restaurante Tupi
					</span>

					<h3 class="tit3 t-center m-b-25 m-t-5">
						Quem somos
					</h3>

					<p class="m-b-22 size3 m-l-r-auto">
						&emsp;&emsp;O Tupi foi pensado e criado com o intuito de oferecer aos clientes refeições de boa qualidade aliadas
						a um ambiente tranquilo e agradável, porém sem abrir mão do preço acessível.
                        <br>
						&emsp;&emsp;
                        Oferecemos um cardápio regional com pratos desde a carne de sol na brasa, galinha e paçoca até
						peixes e camarões, preparados em moquecas ou na brasa, todos servidos em pratos para duas ou quatro pessoas, além dos individuais.
						<br>
						&emsp;&emsp;
                        A proposta da casa é comer bem e relaxar. O espaço proporciona às
						famílias momentos de paz e bem-estar em meio à natureza enquanto desfrutam de nossos preparos.
					</p>

				</div>
			</div>

			<div class="col-md-6 p-b-30">
                <div class="wrap-pic-welcome bo-rad-10 hov-img-zoom m-l-r-auto">
                    <a href="{{ asset('images/index/zoom/entrada.jpg') }}" data-lightbox="gallery">
                        <img src="{{ asset('images/index/entrada.jpg') }}" alt="IMG-SALAO">
                    </a>
                </div>
			</div>
		</div>

        <div class="row">
            <div class="col-md-4 p-t-30">
                <!-- Block1 -->
                <div class="blo1">
                    <div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom">
                        <a href="{{ asset('images/index/zoom/salao.jpg') }}" data-lightbox="gallery">
                            <img src="{{ asset('images/index/salao.jpg') }}" alt="IMG-SALAO">
                        </a>
                    </div>

                    <div class="wrap-text-blo1 p-t-35">
                        <h4 class="txt5 color0-hov trans-0-4 m-b-13">
                            Salão Principal
                        </h4>

                        <p class="m-b-20">
                            O Restaurante tupi dispõe de um vasto espaço interno no qual os clientes podem se acomodar...
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 p-t-30">
                <!-- Block1 -->
                <div class="blo1">
                    <div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom">
                        <a href="{{ asset('images/index/zoom/parque.jpg') }}" data-lightbox="gallery">
                            <img src="{{ asset('images/index/parque.jpg') }}" alt="IMG-PARQUE">
                        </a>
                    </div>

                    <div class="wrap-text-blo1 p-t-35">
                        <h4 class="txt5 color0-hov trans-0-4 m-b-13">
                            Parquinho
                        </h4>

                        <p class="m-b-20">
                            O Restaurante Tupi possui um playground, no qual as crianças podem brincar etc....
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 p-t-30">
                <!-- Block1 -->
                <div class="blo1">
                    <div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom">
                        <a href="{{ asset('images/index/zoom/redario.jpg') }}" data-lightbox="gallery">
                            <img src="{{ asset('images/index/redario.jpg') }}" alt="IMG-REDARIO">
                        </a>
                    </div>

                    <div class="wrap-text-blo1 p-t-35">
                        <h4 class="txt5 color0-hov trans-0-4 m-b-13">
                            Redário
                        </h4>

                        <p class="m-b-20">
                            Nosso Restaurante dispõe de um local mais afastado direcionado ao repouso e relaxamento de nossos clientes.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-right m-t-25">
                <a href="{{ route('about') }}" class="fs-26 txt5">
                    Ler Mais
                    <i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
                </a>
            </div>
        </div>

	</div>
</section>

<!-- Intro -->
<section class="section-intro">

    <div class="header-intro parallax100 t-center p-t-135 p-b-158" style="background-image: url({{ asset('images/index/DSCF1799.jpg') }});">
		<span class="tit2 p-l-15 p-r-15" style="color: #fff;">
			Natureza
		</span>

		<h3 class="tit4 t-center p-l-15 p-r-15 p-t-3">
			Vale da Gruta do Bode
		</h3>
	</div>
</section>

<!-- Maps -->
<section class="section-intro p-t-105 p-b-105 bg1-pattern">
    <div class="wrap-text-welcome container">
        <h3 class="tit2 t-center">
            Restaurante Tupi
        </h3>

        <h3 class="tit3 t-center m-b-25 m-t-5">
            Encontre a gente!
        </h3>
        <!--
        <div class="bo8 bo-rad-10 of-hidden p-t-7" style="background-color: #222;">
            <iframe width="100%" height="600" src="https://maps.google.com/maps?q=restaurante%20tupi%20goianinha&t=k&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
        </div> -->
    </div>
</section>

<!-- Intro -->
<section class="section-intro">

    <div class="header-intro parallax100 t-center p-t-135 p-b-158" style="background-image: url({{ asset('images/index/DSCF1805.jpg') }});">

		<h3 class="tit4 t-center p-l-15 p-r-15 p-t-3">
			Ambiente rústico
		</h3>
	</div>
</section>

<!-- Lunch -->
<section class="section-lunch bg1-pattern">
    <div class="container p-t-108 p-b-70">
        <div class="t-center">
            <span class="tit2 t-center ">
                Nossos pratos
            </span>
            <h3 class="tit3 m-b-25">
                Mais pedidos
            </h3>
        </div>
        <div class="row ">
            <div class="col-md-6 m-l-r-auto">

                <!-- Block3 -->
                <div class="blo3 flex-w flex-col-l-sm m-b-30">
                    <div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
                        <a href="#"><img src="images/lunch-01.jpg" alt="IMG-MENU"></a>
                    </div>

                    <div class="text-blo3 size21 flex-col-l-m">
                        <span href="#" class="txt21 m-b-3">
                            Camarão Seridoense
                        </span>

                        <span class="txt23">
                            Descrição do seridoense
                        </span>

                        <span class="txt22 m-t-20">
                            $00.00
                        </span>
                    </div>
                </div>

            </div>

            <div class="col-md-6 m-l-r-auto">
                <!-- Block3 -->
                <div class="blo3 flex-w flex-col-l-sm m-b-30">
                    <div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
                        <a href="#"><img src="images/lunch-05.jpg" alt="IMG-MENU"></a>
                    </div>

                    <div class="text-blo3 size21 flex-col-l-m">
                        <span href="#" class="txt21 m-b-3">
                            Peixe Manivá
                        </span>

                        <span class="txt23">
                            Descrição do Manivá
                        </span>

                        <span class="txt22 m-t-20">
                            $00.00
                        </span>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="section-intro">

    <div class="header-intro parallax100 t-center p-t-135 p-b-158" style="background-image: url({{ asset('images/index/DSCF1784.jpg') }});">

		<h3 class="tit4 t-center p-l-15 p-r-15 p-t-3">
			Ambiente rústico
		</h3>
	</div>
</section>


<!-- Review -->
<section class="section-review p-t-115 bg1-pattern">
	<!-- - -->
    <div class="title-review t-center m-b-2">
		<span class="tit2 p-l-15 p-r-15">
			Customers Say
		</span>

		<h3 class="tit8 t-center p-l-20 p-r-15 p-t-3">
			Review
		</h3>
	</div>

	<!-- - -->
	<div class="wrap-slick3">
		<div class="slick3">
			<div class="item-slick3 item1-slick3">
				<div class="wrap-content-slide3 p-b-50 p-t-50">
					<div class="container">
						<div class="pic-review size14 bo4 wrap-cir-pic m-l-r-auto animated visible-false" data-appear="zoomIn">
							<img src="images/avatar-01.jpg" alt="IGM-AVATAR">
						</div>

						<div class="content-review m-t-33 animated visible-false" data-appear="fadeInUp">
							<p class="t-center txt12 size15 m-l-r-auto">
								“ We are lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean tellus sem, mattis in pre-tium nec, fermentum viverra dui ”
							</p>

							<div class="star-review fs-18 color-yellow flex-c-m m-t-12">
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star p-l-1" aria-hidden="true"></i>
								<i class="fa fa-star p-l-1" aria-hidden="true"></i>
								<i class="fa fa-star p-l-1" aria-hidden="true"></i>
								<i class="fa fa-star p-l-1" aria-hidden="true"></i>
							</div>

							<div class="more-review txt4 t-center animated visible-false m-t-32" data-appear="fadeInUp">
								Marie Simmons ˗ New York
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="item-slick3 item2-slick3">
				<div class="wrap-content-slide3 p-b-50 p-t-50">
					<div class="container">
						<div class="pic-review size14 bo4 wrap-cir-pic m-l-r-auto animated visible-false" data-appear="zoomIn">
							<img src="images/avatar-04.jpg" alt="IGM-AVATAR">
						</div>

						<div class="content-review m-t-33 animated visible-false" data-appear="fadeInUp">
							<p class="t-center txt12 size15 m-l-r-auto">
								“ We are lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean tellus sem, mattis in pre-tium nec, fermentum viverra dui ”
							</p>

							<div class="star-review fs-18 color-yellow flex-c-m m-t-12">
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star p-l-1" aria-hidden="true"></i>
								<i class="fa fa-star p-l-1" aria-hidden="true"></i>
								<i class="fa fa-star p-l-1" aria-hidden="true"></i>
								<i class="fa fa-star p-l-1" aria-hidden="true"></i>
							</div>

							<div class="more-review txt4 t-center animated visible-false m-t-32" data-appear="fadeInUp">
								Marie Simmons ˗ New York
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="item-slick3 item3-slick3">
				<div class="wrap-content-slide3 p-b-50 p-t-50">
					<div class="container">
						<div class="pic-review size14 bo4 wrap-cir-pic m-l-r-auto animated visible-false" data-appear="zoomIn">
							<img src="images/avatar-05.jpg" alt="IGM-AVATAR">
						</div>

						<div class="content-review m-t-33 animated visible-false" data-appear="fadeInUp">
							<p class="t-center txt12 size15 m-l-r-auto">
								“ We are lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean tellus sem, mattis in pre-tium nec, fermentum viverra dui ”
							</p>

							<div class="star-review fs-18 color-yellow flex-c-m m-t-12">
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star p-l-1" aria-hidden="true"></i>
								<i class="fa fa-star p-l-1" aria-hidden="true"></i>
								<i class="fa fa-star p-l-1" aria-hidden="true"></i>
								<i class="fa fa-star p-l-1" aria-hidden="true"></i>
							</div>

							<div class="more-review txt4 t-center animated visible-false m-t-32" data-appear="fadeInUp">
								Marie Simmons ˗ New York
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>

		<div class="wrap-slick3-dots m-t-30"></div>
	</div>
</section>

<section>
    <div class="bg1">

        <script src="https://apps.elfsight.com/p/platform.js" defer></script>
        <div class="elfsight-app-a1a5d7ce-bd3d-49f6-8f13-6d796c99b226"></div>
    </div>
</section>

<!-- Container Selection1 -->
@include('components/select')

<!-- Modal Video 01-->
<div class="modal fade" id="modal-video-01" tabindex="-1" role="dialog" aria-hidden="true">

	<div class="modal-dialog" role="document" data-dismiss="modal">
		<div class="close-mo-video-01 trans-0-4" data-dismiss="modal" aria-label="Close">&times;</div>

		<div class="wrap-video-mo-01">
			<div class="w-full wrap-pic-w op-0-0"><img src="images/icons/video-16-9.jpg" alt="IMG"></div>
			<div class="video-mo-01">
				<!--iframe src="https://www.youtube.com/embed/5k1hSu2gdKE?rel=0&amp;showinfo=0" allowfullscreen></iframe-->
			</div>
		</div>
	</div>
</div>

@endsection

@section('additional_scripts')
    <script type="text/javascript">
    window.onload = function() {
        $(".eapps-remove-link").parent().hide();
    };
    </script>
@endsection
