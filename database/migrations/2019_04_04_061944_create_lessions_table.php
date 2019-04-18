<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lessions', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('course_id')->unsigned();
            $table->integer('section_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->string('title');
            $table->text('discription');
            $table->string('video_url');
            $table->string('sourcecode_url');
            $table->string('view_count')->nullable();
            $table->string('like_count')->nullable();
            $table->foreign('course_id')
                   ->references('id')
                   ->on('courses')
                   ->onDelete('cascade');
            $table->foreign('section_id')
                   ->references('id')
                   ->on('sections')
                   ->onDelete('cascade');

            $table->foreign('user_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade');



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lessions');
    }
}
