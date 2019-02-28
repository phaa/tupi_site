<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        $usersTable = DB::table('users');
        $usersTable->insert([
                'name' => 'Administrador',
                'email' => 'adm@email.com',
                'password' => Hash::make('adm123'),
                'created_at' =>  \Carbon\Carbon::now(), # \Datetime()
                'updated_at' => \Carbon\Carbon::now(),  # \Datetime()
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
