<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('age_min')->nullable();
            $table->integer('age_max')->nullable();
            $table->timestamps();
        });

        for ($i = 0; $i < 7; $i++) {
            DB::table('categories')->insert(
                [
                    'name' => 'U13',
                    'age_min' => '11',
                    'age_max' => '13',
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
        Schema::dropIfExists('categories');
    }
}
