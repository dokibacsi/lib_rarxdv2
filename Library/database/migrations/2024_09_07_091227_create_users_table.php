<?php

use App\Models\User;
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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
        
        $users = User::factory()->count(1000)->create();
        /* User::create(['name' => 'Dani', 'email' => 'danialegjobb@zoomail.eu']);
        User::create(['name' => 'Valentin', 'email' => 'valent@zoomail.eu']);
        User::create(['name' => 'Gery', 'email' => 'magasgeri@zoomail.eu']);
        User::create(['name' => 'I', 'email' => 'imintflower@zoomail.eu']);
        User::create(['name' => 'Ádám', 'email' => 'bledyakiraly@zoomail.eu']); */
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
