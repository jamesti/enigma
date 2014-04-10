<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('users', function(Blueprint $table) {
            $table->increments('id');
            $table->string('username', '12');
            $table->string('password', '16');
            $table->string('email', '40')->unique();
            $table->string('phone', '12')->nullable();
            $table->string('name', '40');
            $table->boolean('blocked')->default(0);
            $table->timestamps();
        });

        Schema::create('subscribe', function(Blueprint $table) {
            $table->increments('id');
            $table->string('email');
            $table->timestamps();
        });

        Schema::create('foldagram', function(Blueprint $table) {
            $table->increments('id');
            $table->text('message');
            $table->string('image');
            $table->boolean('status');
            $table->integer('user_id');
            $table->integer('exported');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('users');
    }

}
