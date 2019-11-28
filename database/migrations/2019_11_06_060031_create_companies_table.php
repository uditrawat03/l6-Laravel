<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->bigIncrements('id');
            // $table->string('uuid')->unique();
            $table->string('name')->nullable();
            $table->string('code')->length(20)->nullable();
            $table->unsignedInteger('class_id')->nullable();
            $table->unsignedInteger('source_id')->nullable();
            $table->unsignedInteger('importance_id')->nullable();
            $table->unsignedInteger('status_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companies');
    }
}
