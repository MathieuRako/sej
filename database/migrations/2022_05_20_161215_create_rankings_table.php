<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRankingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rankings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('judoka_id')->unique();
            $table->integer('points')->default(0);
            $table->timestamps();               

            $table->foreign('judoka_id')->references('id')->on('judokas')->onDelete('cascade')->onUpdate('cascade');
        });

        for ($i = 0; $i <= 40; $i++) {
            DB::table('rankings')->insert(
                [
                    'judoka_id' => $i+1,
                    'points' => $i*2,
                    'created_at' => now()
                ]
            );
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rankings');
    }
}
