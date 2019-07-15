<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lists', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titulo', 255);
            $table->text('descricao');
            $table->double('preco', 8, 2);
            $table->dateTime('data');
            $table->integer('quantidade');
            $table->unsignedBigInteger('grouplist_id');

            //Adicionando a chave estrangeira
            $table->foreign('grouplist_id')
            ->references('id')->on('grouplist')
            ->onDelete('cascade');

            //vai criar os campos timestamp created_at e updated_at
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
        Schema::dropIfExists('lists');
    }
}
