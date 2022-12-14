<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('continent_id');
            $table->integer('country_state_id');
            $table->integer('city_id');
            $table->integer('category_id');
            $table->integer('sub_category_id');
            $table->integer('user_id');
            $table->string('title')->nullable()->default(null);
            $table->text('description')->nullable()->default(null);
            $table->integer('age')->nullable()->default(null);
            $table->string('location')->nullable()->default(null);
            $table->string('contact_email')->nullable()->default(null);
			$table->string('mobile_number')->nullable()->default(null);
            $table->enum('is_premium_ad', ['0', '1'])->default('0');
            $table->enum('is_sponsor_ad', ['0', '1'])->default('0');
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
        Schema::dropIfExists('posts');
    }
}
