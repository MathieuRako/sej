<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePicturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pictures', function (Blueprint $table) {
            $table->id();
            $table->foreignId('page_id')->nullable();
            $table->integer('pos')->nullable();
            $table->string('alt');
            $table->string('link');
            $table->timestamps();

            $table->foreign('page_id')->references('id')->on('pages')->onDelete('cascade')->onUpdate('cascade');
        });

        DB::table('pictures')->insert(
            [
                'alt' => 'logo',
                'link' => 'images/logo.png',
                
                'created_at' => now()
            ],
            [
                'alt' => 'banneer',
                'link' => 'images/banniereFullScreen.jpg',
                'created_at' => now()
            ]
        );

        DB::table('pictures')->insert(
            [
                [
                    'page_id' => 1,
                    'alt' => ' ',
                    'pos' => 1,
                    'link' => "images/lutte1.jpg"
                ],
                [
                    'page_id' => 1,
                    'alt' => ' ',
                    'pos' => 2,
                    'link' => "images/lutte2.jpg"
                ],
                [
                    'page_id' => 1,
                    'alt' => ' ',
                    'pos' => 3,
                    'link' => "images/banniereEnfant.jpg"
                ],
                [
                    'page_id' => 1,
                    'alt' => ' ',
                    'pos' => 4,
                    'link' => "images/contact.jpg"
                ],
                [
                    'page_id' => 1,
                    'alt' => ' ',
                    'pos' => 5,
                    'link' => "images/imageValeurSport.jpg"
                ],
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
        Schema::dropIfExists('pictures');
    }
}
