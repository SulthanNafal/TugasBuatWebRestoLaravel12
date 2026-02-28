<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('admin', function (Blueprint $table) {
            $table->id('ID_Admin');
            $table->string('Username', 150)->nullable();
            $table->string('Level', 20)->default('Publik'); // default publik
            $table->string('Nama', 100);
            $table->text('Alamat')->nullable();
            $table->string('Email')->unique();
            $table->string('No_Tlpn',15)->nullable();
            $table->string('google_id')->nullable(); // untuk login Google
            $table->string('password')->nullable(); // nullable untuk Google login
            $table->timestamps();
        });

        // Insert admin default
        DB::table('admin')->insert([
            'Username' => 'admin',
            'Level' => 'Admin',
            'Nama' => 'Yudi',
            'Alamat' => 'Sidoarjo',
            'Email' => 'yudi@gmail.com',
            'No_Tlpn' => '08123456789',
            'password' => Hash::make('admin'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    public function down(): void
    {
        Schema::dropIfExists('admin');
    }
};