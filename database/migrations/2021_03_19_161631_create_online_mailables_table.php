<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOnlineMailablesTable extends Migration
{
    public function up(): void
    {
        Schema::create('online_mailables', function (Blueprint $table) {
            $table->uuid('id');
            $table->binary('content')->nullable();
            $table->timestamp('expires_at')->nullable();
            $table->timestamps();
        });
    }
}
