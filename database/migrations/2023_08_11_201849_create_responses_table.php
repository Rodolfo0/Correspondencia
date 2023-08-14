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
        Schema::create('responses', function (Blueprint $table) {
            $table->id();
            $table->string('folio');
            $table->string('email');
            $table->date('date');
            $table->string('recieves');
            $table->string('position');
            $table->string('subject');
            $table->string('applicant');
            $table->foreignId('area_id')->constrained();
            $table->unsignedBigInteger('document_type_id');
            $table->string('other_document_type')->nullable();
            $table->foreign('document_type_id')->references('id')->on('document_types');
            $table->string('status');
            $table->string('cancelation')->nullable();
            $table->string('document')->nullable();
            $table->foreignId('request_id')->constrained();
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
        Schema::dropIfExists('responses');
    }
};