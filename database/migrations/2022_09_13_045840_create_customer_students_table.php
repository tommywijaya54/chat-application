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
        Schema::create('customer_students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('school');
            $table->string('grade');
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->text('note')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->nullable();
            $table->foreign('parent_id')->references('id')->on('customer_parents');
            $table->timestamps();

            $table->string('subject'); // Membingung kan kenapa student ada subject yah??
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer_students');
    }
};
