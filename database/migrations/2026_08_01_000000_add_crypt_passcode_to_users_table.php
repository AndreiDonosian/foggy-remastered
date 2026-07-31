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
        if (! Schema::hasColumn('users', 'crypt_passcode')) {
            Schema::table('users', function (Blueprint $table) {
                $table->string('crypt_passcode')->default('0000')->after('password');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (Schema::hasColumn('users', 'crypt_passcode')) {
            Schema::table('users', function (Blueprint $table) {
                $table->dropColumn('crypt_passcode');
            });
        }
    }
};
