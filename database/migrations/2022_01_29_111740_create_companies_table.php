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
            $table->id();
            $table->string('name');
            $table->string('name_signature')->nullable();
            $table->string('nip')->nullable();
            $table->string('regon')->nullable();
            $table->string('krs')->nullable();
            $table->string('fb')->nullable();
            $table->string('fb_url')->nullable();
            $table->string('instagram')->nullable();
            $table->string('instagram_url')->nullable();
            $table->string('google_url')->nullable();
            $table->string('web')->nullable();
            $table->string('web_url')->nullable();
            $table->string('banner_url')->nullable();
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
