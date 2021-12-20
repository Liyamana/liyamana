<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMailTemplatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mail_templates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('title');
            $table->text('template_price')->comment('full price for bulk letters');
            $table->text('offer_price')->nullable()->comment('discounted_price');
            $table->text('price')->nullable();
            $table->text('feature_image')->nullable();
            $table->text('is_purchased_status')->nullable()->comment('is enabled for bulk letters');
            $table->text('content_template')->nullable();
            $table->text('description')->nullable();
            $table->text('user_id');
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
        Schema::dropIfExists('mail_templates');
    }
}
