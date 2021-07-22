@extends('templates.layout')

@section('extra_meta')
	<meta name="description" content="Veja as informações de e-mail, telefones e endereço do Restaurante Tupi"/>
@endsection

@section('title')
Contato
@endsection

<!-- Page Content -->
@section('page_content')
	<!-- Title Page -->
	<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url({{ asset('images/1800px/mata.jpg') }});">
		<h2 class="tit6 t-center">
			Contato
		</h2>
	</section>


	<!-- Contact form -->
	<section class="section-contact bg1-pattern p-t-90">
		<!-- Map -->
		<div class="container t-center">
			<span class="tit2 p-l-15 p-r-15">
				Estamos aqui
			</span>
			<h3 class="tit3 m-b-25 m-t-5 contact-footer">
				Veja o mapa
			</h3>
			<div class="map bo8 bo-rad-10 of-hidden" style="background-color: #222;">
				<iframe width="100%" height="600" src="https://maps.google.com/maps?q=restaurante%20tupi%20goianinha&t=k&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
			</div>
		</div>
	</section>

	@include('components/contact-footer')

@endsection

<!-- Additional Scripts -->
@section('additional_scripts')
@endsection
