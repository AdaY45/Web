<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->string('alias');
            $table->text('content');
            $table->timestamps();
        });

        DB::table('pages')->insert(['content' => 'Hello!', 'alias' => 'index']);
        DB::table('pages')->insert(['content' => 'Hello! Blog!', 'alias' => 'blog']);
        DB::table('pages')->insert(['content' => 'Hello! Contacts!', 'alias' => 'contacts']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pages');
    }
}
