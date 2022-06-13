<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('judoka_id')->unique();
            $table->longText('informations')->nullable();  
            $table->string('picture')->nullable(); 
            $table->boolean('main_page');
            $table->timestamps();

            $table->foreign('judoka_id')->references('id')->on('judokas')->onDelete('cascade')->onUpdate('cascade');
        });

        for ($i = 0; $i <= 12; $i++) {
            DB::table('trainers')->insert(
                [
                    'judoka_id' => $i+1,
                    'informations' => 'Good trainer',
                    'main_page' => ($i < 4 ? '1' : '0'),
                    'picture' => "images/entraineur3.jpg",
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
        Schema::dropIfExists('trainers');
    }
}
