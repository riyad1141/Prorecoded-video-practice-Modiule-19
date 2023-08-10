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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('email',50)->unique();
            $table->string('otp',10);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};


/*
 *
 *

php artisan make:model User
php artisan make:model Profile
php artisan make:model Category
php artisan make:model Brand
php artisan make:model Product
php artisan make:model ProductDetail
php artisan make:model ProductSlider
php artisan make:model ProductReview
php artisan make:model ProductWish
php artisan make:model ProductCart


 *
 *
 */
