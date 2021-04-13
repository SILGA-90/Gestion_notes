<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClasseAffectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classeAffects', function (Blueprint $table) {
            $table->bigIncrements('classeAffect_id');
            $table->integer('course_id');
            $table->integer('level_id');
            $table->integer('classroom_id');
            $table->integer('jourSemaine_id');
            $table->integer('semester_id');
            $table->softDeletes();
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
        Schema::dropIfExists('classeAffects');
    }
}
