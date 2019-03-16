@extends('admin.templates.dashboard')

@section('title', 'Edição de Produtos')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <form class="form-horizontal" action="{{ route('admin.edit_product_post') }}" id="atualizarprod" method="post">
                @csrf
                <div class="col-md-3"> </div>
            <div class="col-md-5">
                <div class="card" style="box-shadow: none;">
                        <div class="card-header card-header-text" data-background-color="green">
                            <h4 class="card-title">Dados do Produto</h4>
                        </div>

                <input type="hidden" class="form-control" name="id" value="{{ $product->id }}">


                   <label class="col-md-3 label-on-left">Descrição</label>
                   <div class="col-md-9">
                       <div class="form-group label-floating is-empty">
                           <label class="control-label"></label>
                        <input type="text" class="form-control" name="description" value="{{ $product->description }}">
                       </div>
                   </div>

                   <label class="col-md-3 label-on-left">Preço R$</label>
                   <div class="col-md-9">
                       <div class="form-group label-floating is-empty">
                           <label class="control-label"></label>
                    <input type="text" class="form-control" name="price" value= "{{ $product->price }}">
                       </div>
                   </div>

                   <label class="col-md-3 label-on-left">Selecione o tipo do produto</label>
                   <div class="col-md-9">
                       <select name="product_type" class="selectpicker" data-style="select-with-transition" title="" data-size="7">
                           <option disabled>Tipos de produto:</option>
                           @foreach ($types as $type)
                               @if($type->id == $product->product_type_id)
                                   <option value="{{ $type['id'] }}" selected>{{ $type['description'] }}</option>
                               @else
                                   <option value="{{ $type['id'] }}">{{ $type['description'] }}</option>
                               @endif
                           @endforeach
                       </select>
                   </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-success btn-round btn-wd btn-lg" form="atualizarprod" value="Enviar">Editar Produto</button>
                </div>
                <br>


            </div>
        </div>


            </form>
        </div>
    </div>
@endsection

@section('extra_scripts')
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <script>
                demo.showNotification('top','center', '{{ $error }}', 4 )
            </script>
        @endforeach
    @elseif (Session::has('message'))
        <script>
            demo.showNotification('top','center', '{{ Session::get('message') }}', 2 )
        </script>
    @endif
@endsection
