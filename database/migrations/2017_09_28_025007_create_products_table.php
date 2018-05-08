<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',255);
            $table->string('slug',255);
            $table->string('title',255);
            $table->text('description');
            $table->double('price');
            $table->text('image');
            $table->text('album');
            $table->string('status',255)->nullable();//hot,khuyến mãi,bán chạy,mới nhất
            $table->boolean('active');//khóa hay hoạt động
            $table->integer('detail_sub_categories_id')->references('id')->on('detail_sub_categories')->onDelete('cascade');
            $table->string('key',255);//từ khóa seo
            $table->integer('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('delete');
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
        Schema::dropIfExists('products');
    }
}
