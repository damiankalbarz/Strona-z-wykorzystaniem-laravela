<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
/**
* Run the migrations.
*
* @return void
*/
public function up()
{
Schema::create('cars', function (Blueprint $table) {
$table->id();
$table->string('name');
$table->string('own_name');
$table->timestamps();

$table->unsignedBigInteger('user_id')->nullable();
$table->foreign('user_id')->references('id')->on('users');

});
}

/**
* Reverse the migrations.
*
* @return void
*/
public function down()
{
Schema::table('cars', function(Blueprint $table){
$table->dropForeign(['user_id']);
});
Schema::dropIfExists('cars');
}
};
