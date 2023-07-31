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
        Schema::table('archives', function (Blueprint $table) {
            $table->text('description_kz')->after('title_kz');
            $table->text('description_ru')->after('title_ru');
            $table->text('description_en')->after('title_en');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('archives', function (Blueprint $table) {
            $table->dropColumn('description_kz')->nullable();
            $table->dropColumn('description_ru')->nullable();
            $table->dropColumn('description_en')->nullable();
        });
    }
};
