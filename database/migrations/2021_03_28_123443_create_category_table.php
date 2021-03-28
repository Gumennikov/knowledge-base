<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 100);
            $table->text('description')->nullable();
            $table->string('slug');
            $table->smallInteger('status');
            $table->timestamps();
            $table->smallInteger('created_by')->default(1);
            $table->smallInteger('updated_by')->nullable();
            $table->mediumText('note')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category');
    }
}
