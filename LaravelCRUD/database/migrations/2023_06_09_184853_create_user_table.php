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
        if(Schema::hasColumns('users', ['email_verified_at', 'remember_token'])){
            Schema::dropColumns('users', [
                'email_verified_at',
                'remember_token',
            ]);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if(!Schema::hasColumns('users', ['email_verified_at', 'remember_token'])) {
            Schema::create('users', function (Blueprint $table) {
                $table->timestamp('email_verified_at')->nullable();
                $table->rememberToken();
            });
        }
    }
};
