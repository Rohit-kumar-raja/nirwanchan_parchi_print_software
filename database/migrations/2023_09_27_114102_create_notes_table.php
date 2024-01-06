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
        Schema::create('notes', function (Blueprint $table) {
            $table->id();
            $table->string('page');
            $table->string('data')->nullable();
            $table->string('s_no');
            $table->string('loksabha_name')->default('no');
            $table->string('assembly_name');
            $table->string('both');
            $table->string('part');
            $table->string('section');
            $table->string('epic');
            $table->string('nirwachan_name');
            $table->string('relative_name');
            $table->string('age');
            $table->string('house');
            $table->string('gender');
            $table->string('nirvachan_name_eng');
            $table->string('relative_name_eng');

            $table->timestamps();  // by this method create two columns created_at and updated_at
            $table->softDeletes();
            // creating the relationship on three columns created_at , updated_at and deleted_at
            $table->foreignId('created_by')->references('id')->on('users');
            $table->foreignId('updated_by')->nullable()->references('id')->on('users');
            $table->foreignId('deleted_by')->nullable()->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notes');
    }
};
