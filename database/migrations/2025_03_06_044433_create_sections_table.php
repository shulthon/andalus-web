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
        Schema::create('sections', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('thumbnail');
            $table->longText('content');
            $table->enum('post_as',['HOME Left','HOME Right','HOME Normal','SERVICE Left','SERVICE Right','SERVICE Left Background','Service','PRODUCT App','PRODUCT Normal','MEDIA PARTNER','MEDIA PARTNER Footer','CONTACT'])->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sections');
    }
};
