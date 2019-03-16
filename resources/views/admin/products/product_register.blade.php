@extends('admin.templates.dashboard')

@section('title', 'Registro de Produtos')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <form action="{{ route('product_register_post') }}" id="prod" method="post">
                @csrf
                <div class="col-md-3"> </div>
                <div class="col-md-6">
                    <div class="card" style="box-shadow: none;">
                        <div class="card-header card-header-text" data-background-color="green">
                            <h4 class="card-title">Cadastro de Produto</h4>
                        </div>
                        <div class="card-content">
                            <div class="form-group label-floating is-empty">
                                <label class="control-label">Nome</label>
                                <input type="text" class="form-control" name="name" value>
                            </div>
                            <div class="form-group label-floating is-empty">
                                <label class="control-label">Descrição</label>
                                <input type="text" class="form-control" name="description" value>
                            </div>
                            <div class="form-group label-floating is-empty">
                                <label class="control-label">Preço</label>
                                <input type="text" class="form-control" name="price" value>
                            </div>
                            <div class="">
                                <select name="product_type" class="selectpicker" data-style="select-with-transition" title="Selecione o tipo de produto" data-size="7">
                                    <option disabled>Tipos de produto:</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category['id'] }}">{{ $category['description'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group label-floating is-empty">
                                <legend class="text-center">Imagem do prato</legend>
                                <div class="fileinput fileinput-new text-center image-select" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail item">
                                        <img src="{{ asset('images/image_placeholder.jpg') }}" alt="...">
                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                    <div class="item" >
                                        <span class="btn btn-success btn-round btn-file">
                                            <span class="fileinput-new">Selecione uma imagem</span>
                                            <span class="fileinput-exists">Mudar</span>
                                            <input type="file" name="..." />
                                        </span>
                                        <br>
                                        <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remover</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-success btn-round btn-wd btn-lg" form="prod" value="Enviar">Cadastrar</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-3"> </div>
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
