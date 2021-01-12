<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('gender');
            $table->string('nik');
            $table->string('birth_place');
            $table->date('birth_date');
            $table->string('school_origin');
            $table->string('religion');
            $table->string('live_with');
            $table->string('phone');
            $table->integer('sibling');
            $table->integer('height');
            $table->integer('weight');
            $table->string('hobby');
            $table->string('ambition');
            $table->string('achievment1')->nullable();
            $table->string('achievment2')->nullable();
            $table->string('father_name');
            $table->string('father_birth_place');
            $table->date('father_birth_date');
            $table->string('father_last_education');
            $table->string('father_job');
            $table->string('father_salary');
            $table->string('father_address');
            $table->string('mother_name');
            $table->string('mother_birth_place');
            $table->date('mother_birth_date');
            $table->string('mother_last_education');
            $table->string('mother_job');
            $table->string('mother_salary');
            $table->string('rt');
            $table->string('rw');
            $table->string('dusun');
            $table->string('desa');
            $table->string('kecamatan');
            $table->string('wali_name')->nullable();
            $table->string('wali_birth_place')->nullable();
            $table->date('wali_birth_date')->nullable();
            $table->string('wali_last_education')->nullable();
            $table->string('wali_job')->nullable();
            $table->string('wali_address')->nullable();
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
        Schema::dropIfExists('students');
    }
}
