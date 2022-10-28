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
    public function up(): void
    {
        //Actors : id, lastname, firstname, birth_date, sex ;
        Schema::create('actors', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('lastname');
            $table->string('firstname');
            $table->date('birth_date');
            $table->enum('gender', array('man', 'woman', 'not specify'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('actors');
    }
};
