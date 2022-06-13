<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSponsorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sponsors', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->foreignId('picture_id');
            $table->integer('size');
            $table->integer('position');
            $table->timestamps();
            $table->foreign('picture_id')->references('id')->on('pictures')->onDelete('cascade')->onUpdate('cascade');
        });
        for ($i = 0; $i < 3; $i++) {
            DB::table('sponsors')->insert([
                [
                    'picture_id' => $i+1,
                    'size' => 3,
                    'position' => $i+1,
                    'name' => 'Sponsor',
                ]
            ]);
        }
        for ($i = 0; $i < 4; $i++) {
            DB::table('sponsors')->insert([
                [
                    'picture_id' => $i+4,
                    'size' => 2,
                    'position' => $i+1
                ]
            ]);
        }
        for ($i = 0; $i < 7; $i++) {
            DB::table('sponsors')->insert([
                [
                    'picture_id' => $i+7,
                    'size' => 1,
                    'position' => $i+1
                ]
            ]);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sponsors');
    }
}
