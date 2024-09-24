<?php

use App\Models\Book;
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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string("author");
            $table->string("title");
            $table->integer("pieces");
            $table->timestamps();
        });
        $book = Book::factory()->count(1000)->create();

        /* Book::create(["author" => "Daniel Stevenson", 'title' => 'WAU WAU WAU WAU', 'pieces' => 6000]);
        Book::create(["author" => "Hayden DeMark", 'title' => 'WTF moment', 'pieces' => 4500]);
        Book::create(["author" => "William Sharp", 'title' => 'nerdHUB', 'pieces' => 4500]);
        Book::create(["author" => "William Sharp", 'title' => 'TimeStamp', 'pieces' => 5500]);
        Book::create(["author" => "George Black", 'title' => 'LaravelIsTheShit', 'pieces' => 5500]); */
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
