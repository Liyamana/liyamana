<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLettersTemplateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('letters_template_categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('category_name');
            $table->text('description')->nullable();
            $table->text('status');
            $table->text('feature_image')->nullable();
            $table->text('icon')->nullable();
            $table->text('slug')->comment('auto_generated Slugs Data');
            $table->text('features')->nullable();
            $table->integer('order');
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
        Schema::dropIfExists('letters_template_categories');
    }
}
