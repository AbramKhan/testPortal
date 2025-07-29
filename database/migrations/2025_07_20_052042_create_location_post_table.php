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
        Schema::create('location_post', function (Blueprint $table) {
          $table->foreignId('location_id')->constrained('locations');
          $table->foreignId('post_id')->constrained('posts');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('location_post', function (Blueprint $table) {

        $table->dropForeign(['location_id']);
        $table->dropForeign(['post_id']);
        $table->dropIfExists();
        
       });
    }
};
