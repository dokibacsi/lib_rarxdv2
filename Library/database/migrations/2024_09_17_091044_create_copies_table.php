<?php

use App\Models\Copy;
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
        Schema::create('copies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('book_id')->references('id')->on('books');
            //puha: 0, kemény: 1;
            $table->boolean('hardcovered')->default(1);
            $table->year('publication');
            $table->smallInteger('status')->default(0);
            $table->timestamps();
        });

       $copies = Copy::factory()->count(100)->create();

        /* Copy::create(['book_id' => 3, 'publication' => '2004']);
        Copy::create(['book_id' => 1, 'publication' => '2006']);
        Copy::create(['book_id' => 2, 'publication' => '2001']);
        Copy::create(['book_id' => 5, 'publication' => '2004']);
        Copy::create(['book_id' => 4, 'publication' => '2003']); */
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('copies');
    }
};
