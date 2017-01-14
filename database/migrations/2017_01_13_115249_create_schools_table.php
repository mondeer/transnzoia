<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchoolsTable extends Migration
{
    public function up()
    {
        Schema::create('schools', function (Blueprint $table) {
            $table->increments('id');
              $table->string('registration')->unique();
              $table->string('name');
              $table->string('email');
              $table->string('location');
              $table->date('reg_date');
            $table->timestamps();
        });

        Schema::create('students', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
              $table->integer('schools_id')->unsigned()->nullable();
              $table->string('first_name');
              $table->string('middle_name');
              $table->string('last_name');
              $table->string('email');
              $table->string('mobile');
              $table->date('adm_date');
              $table->string('course');
              $table->string('gender', 10);
              $table->string('student_reg', 40)->unique();
              $table->date('dob');
              $table->string('profile_pix')->default('default.jpg');
            $table->timestamps();
        });

        Schema::create('students', function(Blueprint $table){
            $table->engine = 'InnoDB';
                $table->foreign('schools_id')
                ->references('id')->on('schools')
                ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('schools');
    }
}
