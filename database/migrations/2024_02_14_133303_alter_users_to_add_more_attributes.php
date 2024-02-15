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
        Schema::table('users', function (Blueprint $table) {
            $table->string('last_name');
            $table->string('patronymic');
            $table->string('phone_number');
            $table->string('login')->unique();
            $table->string('photo_path');
            $table->timestamp('born_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('last_name');
            $table->dropColumn('patronymic');
            $table->dropColumn('phone_number');
            $table->dropColumn('login');
            $table->dropColumn('photo_path');
            $table->dropColumn('born_at');
        });
    }
};
