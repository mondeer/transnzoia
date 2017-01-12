<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
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
