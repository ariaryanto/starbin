<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rules\Unique;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nip_nisn')->unique();
            $table->string('email');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('alamat');
            $table->date('tanggal_lahir');
            $table->string('no_telepon');
            $table->string('role');
            $table->string('role_id')->nullable();
            $table->string('jurusan')->nullable();
            $table->string('kelas')->nullable();
            $table->string('image')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
        DB::table('users')->insert([
            'name' => 'Ari Aryanto',
            'email' => 'superadmin@gmail.com',
            'password' => bcrypt('superadmin'),
            'alamat' => 'Indonesia',
            'nip_nisn' => '012345',
            'tanggal_lahir' => '20061111',
            'no_telepon' => '083195792112',
            'role' => 'Super Admin',
            'role_id' => 'superadmin',
            'jurusan' => 'RPL',
            'kelas' => 'XI',
            'image' => 'no_image.png',
        ]);

        DB::table('users')->insert([
            'name' => 'Fadhli MQ',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin'),
            'alamat' => 'Indonesia',
            'nip_nisn' => '0123456',
            'tanggal_lahir' => '20061204',
            'no_telepon' => '083195790909',
            'role' => 'Admin',
            'role_id' => 'admin',
            'jurusan' => 'RPL',
            'kelas' => 'XI',
            'image' => 'no_image.png',
        ]);

        DB::table('users')->insert([
            'name' => 'Sahrul Palah',
            'email' => 'nasabah@gmail.com',
            'password' => bcrypt('nasabah'),
            'alamat' => 'Indonesia',
            'nip_nisn' => '01234567',
            'tanggal_lahir' => '20060201',
            'no_telepon' => '083195798765',
            'role' => 'Nasabah',
            'role_id' => 'nasabah',
            'jurusan' => 'RPL',
            'kelas' => 'XI',
            'image' => 'no_image.png',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}