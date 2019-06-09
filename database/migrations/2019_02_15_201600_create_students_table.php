<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStudentsTable extends Migration {

	public function up()
	{
		Schema::create('students', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name');
			$table->string('networking_id');
			$table->string('acountent_d');
			$table->string('acountents_id');
			$table->string('database_id');
			$table->string('os_id');
		});
	}

	public function down()
	{
		Schema::drop('students');
	}
}