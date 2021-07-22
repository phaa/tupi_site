@extends('templates.layout')

@section('extra_meta')
	<meta name="description" content="Veja a galeria de fotos de pratos, ambientes e eventos do Restaurante Tupi"/>
@endsection

@section('title')
Galeria
@endsection

<!-- Menu -->
@section('page_content')
	<section>
		<!-- Title Page -->
		<div class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url({{ asset('images/1800px/planta2.jpg') }});">
			<h1 class="tit6 t-center">
				Galeria Tupi
			</h1>
		</div>

		<!-- Gallery -->
		<div class="section-gallery p-t-70 p-b-50 bg1-pattern container">
			<div class="t-center">
				<!--span class="tit2 p-l-15 p-r-15">
					Filtros
				</span-->
			</div>

			<div class="grid are-images-unloaded">
				<div class="grid__col-sizer"></div>
  				<div class="grid__gutter-sizer"></div>
				@foreach ($images as $image)
					<div class="grid__item bo-rad-10 hov-img-zoom">
						<img src="{{ asset('images/uploads/'.$image->filename) }}" alt="{{ $image->alt_text }}">

						<div class="overlay-grid__item trans-0-4 flex-c-m">
							<a class="btn-show-gallery flex-c-m fa fa-search" href="{{ asset('images/uploads/'.$image->filename) }}" data-lightbox="gallery"></a>
						</div>
					</div>
				@endforeach
				{{ $images->links() }}
			</div>
			<div class="page-load-status" style="border-top: 1px solid #222;">
				<div class="loader-ellips infinite-scroll-request">
					<span class="loader-ellips__dot"></span>
					<span class="loader-ellips__dot"></span>
					<span class="loader-ellips__dot"></span>
					<span class="loader-ellips__dot"></span>
				</div>
				<p class="infinite-scroll-last t-center">Fim das fotos</p>
				<p class="infinite-scroll-error t-center">Nenhum dado para carregar</p>
			</div>
		</div>
	</section>

@endsection

@section('additional_scripts')
<script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
<script src="https://unpkg.com/infinite-scroll@3/dist/infinite-scroll.pkgd.min.js"></script>
<script type="text/javascript">
//Lazy load the images, just after load all the scripts
$(function() {
    $('ul.pagination').css('opacity', '0');
    // init Masonry

    var $grid = $('.grid').masonry({
        itemSelector: 'none', // select none at first
        columnWidth: '.grid__col-sizer',
        gutter: '.grid__gutter-sizer',
        percentPosition: true,
        stagger: 30,
        // nicer reveal transition
        visibleStyle: { transform: 'translateY(0)', opacity: 1 },
        hiddenStyle: { transform: 'translateY(100px)', opacity: 0 },
    });
    
    // get Masonry instance
    var msnry = $grid.data('masonry');
    
    // initial items reveal
    $grid.imagesLoaded( function() {
        $grid.removeClass('are-images-unloaded');
        $grid.masonry( 'option', { itemSelector: '.grid__item' });
        var $items = $grid.find('.grid__item');
        $grid.masonry( 'appended', $items );
		$('ul.pagination').css('opacity', '0');
    });
    
    //-------------------------------------//
    // init Infinte Scroll
    
    $grid.infiniteScroll({
        path: '.pagination li.active + li a',
        append: '.grid__item',
        outlayer: msnry,
        status: '.page-load-status',
    });

	$('ul.pagination').css('opacity', '0');

});

</script>

@endsection
