<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Blogs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->increments('blogId');
            $table->string('title')->unique();
            $table->enum('category', ['Announcement', 'Game updates', 'Development Process', 'Other']);
            $table->text('image'); // for storing image url
            $table->text('paragraph1');
            $table->text('paragraph2');
            $table->text('paragraph3');
            $table->string('author');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogs');
    }
}