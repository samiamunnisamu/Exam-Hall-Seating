<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->tinyInteger('department');
            $table->tinyInteger('status')->default(0)->comment('0=false,1=true');
            $table->string('phone')->nullable();
            $table->string('image')->nullable();
            $table->tinyInteger('gender')->default(1)->comment('1=male,2=female,3=other');

            $table->tinyInteger('rules')->default(1)->comment('1=student,2=teacher,3=admin');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
