<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id');
            $table->foreignId('trainer_id')->nullable();
            $table->integer('line');
            $table->string('day');
            $table->string('hours');
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('trainer_id')->references('id')->on('trainers')->onDelete('cascade')->onUpdate('cascade');
        });

        for ($i = 0; $i < 7; $i++) {
            for($j = 0; $j<3;$j++){
                DB::table('trainings')->insert(
                    [
                        'category_id' => $i +1,
                        'line' => $j +1,
                        'day' => 'Monday',
                        'hours' => '18h30-19h30',
                        'created_at' => now()
                    ]
                );  
            }
        

        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trainings');
    }
}
