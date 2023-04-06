<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rules\Unique;

class CreateUangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uangs', function (Blueprint $table) {
            $table->id();
            $table->string('nip_nisn');
            $table->date('tanggal');
            $table->integer('pemasukan');
            $table->integer('pengeluaran');
            $table->string('admin');
            $table->timestamps();
        });
        DB::table('uangs')->insert([
            'nip_nisn' => '01234567',
            'tanggal' => '20221230',
            'pemasukan' => '10000',
            'pengeluaran' => '0',
            'admin' => 'Ari Aryanto',
        ]);
        DB::table('uangs')->insert([
            'nip_nisn' => '01234567',
            'tanggal' => '20221230',
            'pemasukan' => '0',
            'pengeluaran' => '4500',
            'admin' => 'Ari Aryanto',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('uangs');
    }
}