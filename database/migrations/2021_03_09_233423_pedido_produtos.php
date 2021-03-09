<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PedidoProdutos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $table->id();
        $table->foreign("user_id")->references('id')->on('users')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        $table->foreign("produto_id")->references('id')->on('produtos')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        $table->float("valor", 3, 2);
        $table->integer("quantidade");
        $table->timestamps();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
