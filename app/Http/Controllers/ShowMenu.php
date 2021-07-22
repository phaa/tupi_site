<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

class ShowMenu extends Controller
{
    public function __invoke()
    {
        /*$context = [
            'bebidas' => Product::where('type_id', 1)->orderBy('name')->get(),
            'sucos' => Product::where('type_id', 2)->orderBy('name')->get(),
            'alcolicos' => Product::where('type_id', 3)->orderBy('name')->get(),
            'petiscos' => Product::where('type_id', 4)->orderBy('name')->get(),
            'refeicoes' => Product::where('type_id', 5)->orderBy('name')->get(),
            'peixes' => Product::where('type_id', 6)->orderBy('name')->get(),
            'camaroes' => Product::where('type_id', 7)->orderBy('name')->get(),
            'guarnicoes' => Product::where('type_id', 8)->orderBy('name')->get(),
            'pratos_individuais' => Product::where('type_id', 9)->orderBy('name')->get(),
            'cafes' => Product::where('type_id', 10)->orderBy('name')->get(),
            'sobremesas' => Product::where('type_id', 11)->orderBy('name')->get(),
        ];*/
        return view('menu');
    }
}
