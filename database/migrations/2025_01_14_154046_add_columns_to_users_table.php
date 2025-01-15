<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('users', function (Blueprint $table) {
        // Add your columns here
        $table->string('phone_number')->nullable();
        $table->string('role')->default('customer');
    });
}

public function down()
{
    Schema::table('users', function (Blueprint $table) {
        // Drop your columns here
        $table->dropColumn(['first_name', 'last_name', 'username', 'phone_number', 'role']);
    });
}
};
