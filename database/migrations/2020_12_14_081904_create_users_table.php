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
            $table->id();
            $table->foreignId('role_id')->constrained();
            $table->string('first_name',100);
            $table->string('middle_name',100)->nullable();
            $table->string('last_name',100);
            $table->date('birthdate');
            $table->char('sex', 1);
            $table->string('barangay');
            $table->string('city');
            $table->string('province');
            $table->string('email',100);
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
            $table->unique(['email','deleted_at']);
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
