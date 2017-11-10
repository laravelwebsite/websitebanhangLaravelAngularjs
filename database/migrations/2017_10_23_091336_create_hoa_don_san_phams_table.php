<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHoaDonSanPhamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hoa_don_san_phams', function (Blueprint $table) {
            $table->increments('id');
            $table->string('mahoadon')->references('Mahoadon')->on('hoa_dons')->onDelete('cascade');
            $table->integer('product_id')->references('id')->on('product')->onDelete('cascade');
            $table->integer('qty');
            $table->string('subtotal');
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
        Schema::dropIfExists('hoa_don_san_phams');
    }
}
