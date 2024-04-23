<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('files', function (Blueprint $table) {
            $table->id();
            $table->string('file_orig_name', 255);
            $table->string('size', 255); //in KB
            $table->boolean('is_encrypted');
            $table->integer('user_id')->index();
            $table->timestamps();
        });

        Schema::create('public_files', function (Blueprint $table) {
            $table->id();
            $table->string('user_hash', 255);
            $table->string('path', 1000);
            $table->dateTime('public_till');
            $table->timestamps();
        });

        Schema::create('plans', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255);
            $table->string('description', 2500); //in KB
            $table->text('features');
            $table->float('price');
            $table->bigInteger('mb_limit')->default(0);
            $table->boolean('status');
            $table->timestamps();
        });

        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger('plan_id')->default(0);
            $table->unsignedBigInteger('mb_limit')->default(10);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('plan_id');
        });

        Schema::dropIfExists('files');
        Schema::dropIfExists('public_files');
        Schema::dropIfExists('plans');
    }
};
