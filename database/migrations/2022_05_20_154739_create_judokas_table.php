<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJudokasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('judokas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('firstname');
            $table->string('belt');
            $table->integer('age');
            $table->string('mail')->nullable();
            $table->string('phone_number')->nullable();
            
            $table->integer('points')->nullable();
            $table->timestamps();
        });

        for ($i = 0; $i <= 40; $i++) {
            DB::table('judokas')->insert(
                [
                    'name' => "Mbappé",
                    'firstname' => "Kylian",
                    'belt' => "Red",
                    'age' => "23",
                    'mail' => "kykydebondy@gmail.com",
                    'phone_number' => "0606060606",
                    
                    'points' => $i *2,
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
        Schema::dropIfExists('judokas');
    }
}
