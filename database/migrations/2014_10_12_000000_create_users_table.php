<?php

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
            $table->string('nombre');
            $table->string('apellidoPaterno');
            $table->string('apellidoMaterno');
            $table->string('telefono');
            $table->string('email')->unique();
            $table->string('password', 64);
            $table->string('vendedor')->nullable();
            $table->string('tipo');
            $table->rememberToken();
            $table->timestamps();
            
            
        });
		DB::table('users')->insert( 
				array(
            		'nombre' => 'administrador' ,
		            'apellidoPaterno' => 'Super' ,
		            'apellidoMaterno' => 'Usuario' ,
		            'telefono' => '123465' ,
		            'email' => 'admin@admin.com' ,
		            'password' => bcrypt('12345678'),
		            'vendedor' => null,
		            'tipo' => '1',
				));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
