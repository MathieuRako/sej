<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('title');
            $table->string('subtitle');
            $table->timestamps();
        });

        DB::table('pages')->insert(
            [
                [
                    'name' => 'home',
                    'title' => 'Judoclub Samurai Eindhout, voor jong en oud',
                    'subtitle' => ' ',
                    'created_at' => now()
                ],
                [
                    'name' => 'belts',
                    'title' => "Belts/Graden",
                    'subtitle' => ' ',
                    'created_at' => now()
                ],
                [
                    'name' => 'club',
                    'title' => "Club",
                    'subtitle' => "Values - History - Structure - Rules - Trainers",
                    'created_at' => now()
                ],
                [
                    'name' => 'contact',
                    'title' => 'Contact',
                    'subtitle' => ' ',
                    'created_at' => now()
                ],
                [
                    'name' => 'informations',
                    'title' => 'Informations',
                    'subtitle' => "Training hours - Prices - Location - Insurance papers",
                    'created_at' => now()
                ],
                [
                    'name' => 'judo',
                    'title' => 'Judo',
                    'subtitle' => ' ',
                    'created_at' => now()
                ],
                [
                    'name' => 'sponsors',
                    'title' => 'Sponsors',
                    'subtitle' => ' ',
                    'created_at' => now()
                ]
            ]
                );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pages');
    }
}
