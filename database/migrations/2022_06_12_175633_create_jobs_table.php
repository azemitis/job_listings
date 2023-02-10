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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('organization');
            $table->string('degree');
            $table->string('jobType');
            $table->text('aboutJob');
            $table->string('locations');
            $table->integer('day');
            $table->integer('month');
            $table->integer('year');
            $table->string('remote');
            $table->longText('minimumQualifications');
            $table->longText('preferredQualifications');
            $table->longText('responsibilities');
            $table->string('email');
            $table->softDeletes();
            $table->foreignId('user_id')->nullable()->constrained();
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
        Schema::dropIfExists('jobs');
    }
};
