<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations. up
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table ->string('name');
            $table ->string('slug') ->unique();
            $table->string('category');
            $table->decimal('price', 10, 2);
            $table->integer('quantity');
            $table->string('status'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations. down
     * php artisan migrate:status - to check if the migration is already done
     * php artisan migrate:rollback - to undo the migration
     * php artisan migrate:reset - to undo all the migration
     * php artisan migrate:status - to check if the migration is already done
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
