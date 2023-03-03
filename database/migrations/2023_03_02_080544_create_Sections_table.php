<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSectionsTable extends Migration {

	public function up()
	{
		Schema::create('Sections', function(Blueprint $table) {
			$table->id();
			$table->timestamps();
			$table->string('Name_Section');
			$table->integer('Status');
			$table->bigInteger('Class_Id')->unsigned();
			$table->bigInteger('Grade_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('Sections');
	}
}