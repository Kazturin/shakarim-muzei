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
        Schema::create('exhibits', function (Blueprint $table) {
            $table->id();
            $table->string('name_kz',255);
            $table->text('description_kz')->nullable();
            $table->string('name_ru',255);
            $table->text('description_ru')->nullable();
            $table->string('name_en',255)->nullable();
            $table->text('description_en')->nullable();
            $table->string('image',255)->nullable();
            $table->foreignIdFor(\App\Models\ExhibitCategory::class, 'category_id');
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
        Schema::dropIfExists('exhibits');
    }
};
