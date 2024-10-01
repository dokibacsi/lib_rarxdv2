<?php

use App\Models\Lending;
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
        Schema::create('lendings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('copy_id')->references('id')->on('copies');
            $table->foreignId('user_id')->references('id')->on('users');
            $table->date('start')->default('2024-01-01');
            $table->timestamps();
        });

        $lendings = Lending::factory()->count(100)->create();

        /* Lending::create(['copy_id' => 3, 'user_id' => 2]);
        Lending::create(['copy_id' => 1, 'user_id' => 5]);
        Lending::create(['copy_id' => 2, 'user_id' => 1]);
        Lending::create(['copy_id' => 5, 'user_id' => 2]);
        Lending::create(['copy_id' => 4, 'user_id' => 4]); */
    }

    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lendings');
    }
};
