<?php

namespace tupi_site\Http\Controllers;

use tupi_site\Http\Controllers\Controller;
use Illuminate\Http\Request;
use tupi_site\Product;
use tupi_site\ProductCategory;

class ProductController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    // Página inicial de produtos
    public function index()
    {
        $products = Product::join('product_categories', 'products.product_category_id', '=', 'product_categories.id')
            ->select('products.*', 'product_categories.description as category_description')
            ->get();
        return view('admin.products.product_show_all', compact('products'));
    }

    /**
     * Retorna a view contento o formulário de criação de produtos
     *
     * @return \Illuminate\Http\View
     */
    public function create()
    {
        $categories = ProductCategory::all();
        return view('admin.products.product_register', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = Product::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'product_category_id' => $request->input('product_type')
        ]);

        $response = "Produto cadastrado com sucesso!";
        Session::flash('message', $response);
        return redirect()->route('product_register_form');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
