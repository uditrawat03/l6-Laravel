<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_classes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code')->length(10);
            $table->string('name');
            $table->boolean('direct_client')->default(false);
            $table->boolean('agency')->default(false);
            $table->boolean('super_agency')->default(false);
            $table->boolean('specialist')->default(false);
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
        Schema::dropIfExists('company_classes');
    }
}
