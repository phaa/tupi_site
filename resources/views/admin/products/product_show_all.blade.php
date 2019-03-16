@extends('admin.templates.dashboard')

@section('title', 'Produtos Cadastrados')

@section('content')
    <div class="container-fluid">
        <h3 class="title text-center">Produtos cadastrados</h3>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-icon" data-background-color="green">
                        <i class="material-icons">assignment</i>
                    </div>
                    <div class="card-content">
                        <h4 class="card-title">Lista de produtos cadastrados</h4>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th class="text-center">Código</th>
                                        <th>Descrição</th>
                                        <th>Preço R$</th>
                                        <th>Tipo de Produto</th>
                                        <th>Ultima atualização</th>
                                        <th>Gerenciar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $product)
                                        <tr>
                                            <td class="text-center">{{ $product->id }}</td>
                                            <td>{{ $product->description }}</td>
                                            <td>{{ $product->price }}</td>
                                            <td>{{ $product->category_description }}</td>
                                            <td>{{ $product->updated_at }}</td>
                                            <td>
                                                <!--a href="{{ route('admin.selected_product', ['id'=>$product->id] ) }}">
                                                    <button type="submit" rel="tooltip" class="btn btn-success" value="Enviar">
                                                        <i class="material-icons">edit</i>
                                                    </button>
                                                </a>

                                                <a href="{{ route('admin.delete_products', ['id'=>$product->id] )}}">
                                                    <button type="submit" rel="tooltip" class="btn btn-danger"  value="Enviar">
                                                        <i class="material-icons">close</i>
                                                    </button>
                                                </a-->
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
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

    <script>
    $(document).ready(function() {
        fetch_customer_data();
        function fetch_customer_data(query = '') {
            $.ajax({
                url: "route('admin.search_products')",
                method: 'GET',
                data: {
                    query: query
                },
                dataType: 'json',
                success: function(data) {
                    $('tbody').html(data.table_data);
                }
            })
        }

        $("#search").keyup(function() {
            var query = $(this).val();
            fetch_customer_data(query);
        });
    });
    </script>
    <script type="text/javascript">

$.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });

</script>
@endsection
