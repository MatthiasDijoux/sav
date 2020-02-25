<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreationTableForeign extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('exchanges', function (Blueprint $table) {
            $table->unsignedBigInteger('id_exchangesTypes');
            $table->foreign('id_exchangesTypes')->references('id')->on('exchanges_types');

            $table->unsignedBigInteger('id_clients');
            $table->foreign('id_clients')->references('id')->on('clients');
            $table->unsignedBigInteger('id_operateurs');
            $table->foreign('id_operateurs')->references('id')->on('operateurs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       
  Schema::table('exchanges', function (Blueprint $table) {
            Schema::disableForeignKeyConstraints();
            $table->dropForeign(['id_exchangesTypes']);
            $table->dropIfExists('id_exchangesTypes');
            $table->dropForeign(['id_clients']);
            $table->dropIfExists('id_clients');
            $table->dropForeign(['id_operateurs']);
            $table->dropIfExists('id_operateurs');

        });

    }
}
