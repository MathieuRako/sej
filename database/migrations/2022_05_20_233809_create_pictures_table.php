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
            $table->boolean('general')->default(false);
            $table->string('link');
            $table->timestamps();

            $table->foreign('page_id')->references('id')->on('pages')->onDelete('cascade')->onUpdate('cascade');
        });

        DB::table('pictures')->insert(
            [
                [
                    'alt' => 'logo',
                    'link' => 'logo.png',
                    'general' => true,
                    'created_at' => now()
                ],
                [
                    'alt' => 'banneer',
                    'link' => 'banniereFullscreen.jpg',
                    'general' => true,
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
                    'link' => "banniereSmallSize.jpg"
                ],
                [
                    'page_id' => 1,
                    'alt' => ' ',
                    'pos' => 2,
                    'link' => "contact.jpg"
                ],
                [
                    'page_id' => 1,
                    'alt' => ' ',
                    'pos' => 3,
                    'link' => "enfant2.jpg"
                ],
                [
                    'page_id' => 1,
                    'alt' => ' ',
                    'pos' => 4,
                    'link' => "explicationCeinture.jpg",
                ],
                [
                    'page_id' => 1,
                    'alt' => ' ',
                    'pos' => 5,
                    'link' => "friendship.jpg"
                ],
            ]
        );

        DB::table('pictures')->insert(
            [
                [
                    'page_id' => 2,
                    'alt' => ' ',
                    'pos' => 1,
                    'link' => "gymnase.jpg"
                ],
            ]
        );

        DB::table('pictures')->insert(
            [
                [
                    'page_id' => 3,
                    'alt' => ' ',
                    'pos' => 1,
                    'link' => "handshake.jpg"
                ],
                [
                    'page_id' => 3,
                    'alt' => ' ',
                    'pos' => 2,
                    'link' => "imageValeurSport.jpg"
                ],
                [
                    'page_id' => 3,
                    'alt' => ' ',
                    'pos' => 3,
                    'link' => "indexachtergrond.png"
                ],
                [
                    'page_id' => 3,
                    'alt' => ' ',
                    'pos' => 4,
                    'link' => "indexachtergrond2.png"
                ],
                [
                    'page_id' => 3,
                    'alt' => ' ',
                    'pos' => 5,
                    'link' => "jigorokano.jpg"
                ],
            ]
        );
        DB::table('pictures')->insert(
            [
                [
                    'page_id' => 4,
                    'alt' => ' ',
                    'pos' => 1,
                    'link' => "limitbreak.jpg"
                ],

            ]
        );
        DB::table('pictures')->insert(
            [
                [
                    'page_id' => 6,
                    'alt' => ' ',
                    'pos' => 1,
                    'link' => "oldmaster.jpeg"
                ],
                [
                    'page_id' => 6,
                    'alt' => ' ',
                    'pos' => 2,
                    'link' => "provenciaal.png"
                ],
                [
                    'page_id' => 6,
                    'alt' => ' ',
                    'pos' => 3,
                    'link' => "picture.jpg"
                ],
            ]
        );

        DB::table('pictures')->insert(
            [
                [
                    'page_id' => 7,
                    'alt' => ' ',
                    'pos' => 1,
                    'link' => "picture2.jpg"
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
