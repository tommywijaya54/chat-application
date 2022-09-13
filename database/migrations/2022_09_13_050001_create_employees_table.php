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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone');
            $table->string('address');
            $table->string('email')->nullable();
            $table->text('note')->nullable();
            $table->date('join_date')->nullable();
            $table->string('exit_date')->nullable();
            $table->string('relatives_name')->nullable();
            $table->string('relatives_phone')->nullable();
            $table->text('relatives_note')->nullable();
            $table->string('role')->nullable();
            $table->integer('user_id');
            $table->timestamps();

            // $table->foreign('user_id')->references('id')->on('users')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
};
