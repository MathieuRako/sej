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
            $table->string('alt')->nullable();
            $table->boolean('general')->default(false);
            $table->string('directory')->nullable();
            $table->string('name');
            $table->timestamps();

            $table->foreign('page_id')->references('id')->on('pages')->onDelete('cascade')->onUpdate('cascade');
        });

        DB::table('pictures')->insert(
            [
                [
                    'alt' => 'logo',
                    'name' => 'logo.png',
                    'general' => true,
                    'directory' => null,
                    'created_at' => now()
                ],
                [
                    'alt' => 'banneer',
                    'name' => 'banniereFullscreen.jpg',
                    'general' => true,
                    'directory' => null,
                    'created_at' => now()
                ]
            ]
        );

        DB::table('pictures')->insert(
            [
                [
                    'page_id' => 1,
                    'alt' => ' ',
                    'pos' => 1,
                    'directory' => 'pages',
                    'name' => "banniereSmallSize.jpg"
                ],
                [
                    'page_id' => 1,
                    'alt' => ' ',
                    'pos' => 2,
                    'directory' => 'pages',
                    'name' => "contact.jpg"
                ],
                [
                    'page_id' => 1,
                    'alt' => ' ',
                    'pos' => 3,
                    'directory' => 'pages',
                    'name' => "enfant2.jpg"
                ],
                [
                    'page_id' => 1,
                    'alt' => ' ',
                    'pos' => 4,
                    'directory' => 'pages',
                    'name' => "explicationCeinture.jpg",
                ],
                [
                    'page_id' => 1,
                    'alt' => ' ',
                    'pos' => 5,
                    'directory' => 'pages',
                    'name' => "friendship.jpg"
                ],
            ]
        );

        DB::table('pictures')->insert(
            [
                [
                    'page_id' => 2,
                    'alt' => ' ',
                    'pos' => 1,
                    'directory' => 'pages',
                    'name' => "gymnase.jpg"
                ],
            ]
        );

        DB::table('pictures')->insert(
            [
                [
                    'page_id' => 3,
                    'alt' => ' ',
                    'pos' => 1,
                    'directory' => 'pages',
                    'name' => "handshake.jpg"
                ],
                [
                    'page_id' => 3,
                    'alt' => ' ',
                    'pos' => 2,
                    'directory' => 'pages',
                    'name' => "imageValeurSport.jpg"
                ],
                [
                    'page_id' => 3,
                    'alt' => ' ',
                    'pos' => 3,
                    'directory' => 'pages',
                    'name' => "indexachtergrond.png"
                ],
                [
                    'page_id' => 3,
                    'alt' => ' ',
                    'pos' => 4,
                    'directory' => 'pages',
                    'name' => "indexachtergrond2.png"
                ],
                [
                    'page_id' => 3,
                    'alt' => ' ',
                    'pos' => 5,
                    'directory' => 'pages',
                    'name' => "jigorokano.jpg"
                ],
            ]
        );
        DB::table('pictures')->insert(
            [
                [
                    'page_id' => 4,
                    'alt' => ' ',
                    'pos' => 1,
                    'directory' => 'pages',
                    'name' => "limitbreak.jpg"
                ],

            ]
        );
        DB::table('pictures')->insert(
            [
                [
                    'page_id' => 6,
                    'alt' => ' ',
                    'pos' => 1,
                    'directory' => 'pages',
                    'name' => "oldmaster.jpeg"
                ],
                [
                    'page_id' => 6,
                    'alt' => ' ',
                    'pos' => 2,
                    'directory' => 'pages',
                    'name' => "provenciaal.png"
                ],
                [
                    'page_id' => 6,
                    'alt' => ' ',
                    'pos' => 3,
                    'directory' => 'pages',
                    'name' => "picture.jpg"
                ],
            ]
        );

        DB::table('pictures')->insert(
            [
                [
                    'page_id' => 7,
                    'alt' => ' ',
                    'pos' => 1,
                    'directory' => 'pages',
                    'name' => "picture2.jpg"
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
