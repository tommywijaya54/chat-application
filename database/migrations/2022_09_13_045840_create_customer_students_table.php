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
            $table->integer('user_id');
            $table->integer('customer_parent_id');
            $table->timestamps();

            // $table->foreign('user_id')->references('id')->on('users')->nullable();
            // $table->foreign('parent_id')->references('id')->on('customer_parents');
            // Got an Error : SQLSTATE[42000]: Syntax error or access violation: 1072 Key column 'user_id' doesn't exist in table (SQL: alter table `customer_students` add constraint `customer_students_user_id_foreign` foreign key (`user_id`) references `users` (`id`))

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
