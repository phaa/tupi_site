<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('description');
            $table->timestamps();
        });

        $table = DB::table('product_categories');
        $types = [
            'Bebidas',
            'Drinks',
            'Petiscos',
            'Carnes',
            'Peixes',
            'Camarões',
            'Sobremesas'
        ];
        for ($i = 0; $i < count($types); $i++)
        {
            $desc = $types[$i];
            $table->insert([
                'description' => $desc,
                'created_at' =>  \Carbon\Carbon::now(), # \Datetime()
                'updated_at' => \Carbon\Carbon::now(),  # \Datetime()
            ]);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_categories');
    }
}
