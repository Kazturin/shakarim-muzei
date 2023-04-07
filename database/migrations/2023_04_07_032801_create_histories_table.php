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
        Schema::create('histories', function (Blueprint $table) {
            $table->id();
            $table->string('title_kz',255)->nullable();
            $table->text('content_kz');
            $table->string('title_ru',255)->nullable();
            $table->text('content_ru');
            $table->string('title_en',255)->nullable();
            $table->text('content_en');
            $table->foreignIdFor(\App\Models\HistoryCategory::class, 'category_id');
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
        Schema::dropIfExists('histories');
    }
};
