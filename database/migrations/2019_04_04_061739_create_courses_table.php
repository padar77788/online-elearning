<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('catagory_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->string('title');
            $table->text('discription');
            $table->string('image');
            $table->string('view_count')->nullable();
            $table->foreign('catagory_id')
                    ->references('id')->on('catagories')
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
        Schema::dropIfExists('courses');
    }
}
