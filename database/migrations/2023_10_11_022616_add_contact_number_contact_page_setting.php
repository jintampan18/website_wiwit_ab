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
        Schema::table('contact_page_setting', function (Blueprint $table) {
            $table->string('contact_number')->nullable()->after('personal_email');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('contact_page_setting', function (Blueprint $table) {
            $table->dropColumn(['contact_number']);
        });
    }
};
