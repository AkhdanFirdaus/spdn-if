<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignToNilaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('nilais', function (Blueprint $table) {
            $table->foreignId('mata_kuliah_id')->after('id');
            $table->foreignId('mahasiswa_id')->after('mata_kuliah_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('nilais', function (Blueprint $table) {
            $table->dropForeign(['mata_kuliah_id', 'mahasiswa_id']);
            $table->dropColumn(['mata_kuliah_id', 'mahasiswa_id']);
        });
    }
}
