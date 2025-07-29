<?php

use App\Constants\Status;
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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('author_id')->constrained('companies');
            $table->string('status')->default(Status::DRAFT);
            $table->string('title');
            $table->integer('salary');
            $table->string('position');
            $table->string('address');
            $table->longText('job_responsibilities')->nullable();
            $table->longText('required_skills')->nullable();
            $table->dateTime('deadline')->nullable();
            $table->integer('vacancy');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
       Schema::table('posts', function (Blueprint $table) {

        $table->dropForeign(['author_id']);
      
        $table->dropIfExists();
        
       });
    }
};
