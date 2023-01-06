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
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('phone')->nullable();
            $table->date('dob')->nullable();
            $table->string('image_url')->nullable();
            $table->string('password');
            $table->string('role')->default('member');
            $table->foreignId('watchlist_id')->nullable()->references('id')->on('watchlists');
            $table->timestamp('date_joined');
            $table->rememberToken();
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
