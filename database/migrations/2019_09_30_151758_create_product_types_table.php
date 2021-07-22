<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_types', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('description');
            $table->timestamps();
        });

        $typesTable = DB::table('product_types');
        $typesList = [
            'bebidas',
            'sucos',
            'alcolicos',
            'petiscos',
            'refeicoes',
            'peixes',
            'camaroes',
            'guarnicoes',
            'pratos_individuais',
            'cafes',
            'sobremesas'
        ];

        for($i = 0; $i < sizeof($typesList); $i++)
        {
            $productType = $typesList[$i];
            $typesTable->insert([
                'description' => $productType,
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
        Schema::dropIfExists('product_types');
    }
}
