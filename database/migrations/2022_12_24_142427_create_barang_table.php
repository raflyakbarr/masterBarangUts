<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('barang', function (Blueprint $table) {
			$table->id();
			$table->string('kode_barang')->nullable();
			$table->string('nama_barang')->nullable();
			$table->string('kategori_barang')->nullable();
			$table->string('harga')->nullable();
			$table->integer('jumlah')->nullable();
            $table->string('deskripsi')->nullable();
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
		Schema::dropIfExists('barang');
	}
};
