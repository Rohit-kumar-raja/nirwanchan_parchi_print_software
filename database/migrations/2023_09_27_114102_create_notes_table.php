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
            $table->string('page')->index();
            $table->string('data')->nullable();
            $table->string('s_no');
            $table->string('loksabha_name')->default('no')->index();
            $table->string('assembly_name')->index();
            $table->string('both');
            $table->string('part');
            $table->string('section');
            $table->string('epic');
            $table->string('nirwachan_name')->index();
            $table->string('relative_name')->index();
            $table->string('age');
            $table->string('house');
            $table->string('gender');
            $table->string('nirvachan_name_eng')->index();
            $table->string('relative_name_eng')->index();

            $table->timestamps();  // by this method create two columns created_at and updated_at
            // $table->softDeletes();
            // // creating the relationship on three columns created_at , updated_at and deleted_at
            // $table->foreignId('created_by')->references('id')->on('users');
            // $table->foreignId('updated_by')->nullable()->references('id')->on('users');
            // $table->foreignId('deleted_by')->nullable()->references('id')->on('users');
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
