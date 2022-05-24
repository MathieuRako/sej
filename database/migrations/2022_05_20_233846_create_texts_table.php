<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTextsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('texts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('page_id')->nullable();
            $table->longText('content');
            $table->string('type');
            $table->timestamps();

            $table->foreign('page_id')->references('id')->on('pages')->onDelete('cascade')->onUpdate('cascade');

          
        });

        /* Home */
        DB::table('texts')->insert(
            [
                [
                    'page_id' => '1',
                    'content' => "Sportclub 't Klavertje",
                    'type' => "title"
                ],
                [
                    'page_id' => '1',
                    'content' => "Een tussentitel over de sportclub",
                    'type' => "title"
                ],
                [
                    'page_id' => '1',
                    'content' => "Ontmoet onze trainers",
                    'type' => "title"
                ],
                [
                    'page_id' => '1',
                    'content' => "Onze dojo",
                    'type' => "title"
                ],
                [
                    'page_id' => '1',
                    'content' => "Lorem ipsum",
                    'type' => "title"
                ],
                [
                    'page_id' => '1',
                    'content' => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sed reiciendis quisquam dolorem, est inventore at pariatur, perferendis nisi autem harum ipsum. 
                    Perferendis, voluptate ea temporibus dolorum voluptatum eos iusto laudantium.",
                    'type' => "paragraph"
                ],
                [
                    'page_id' => '1',
                    'content' => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                    Architecto ad vel molestiae nisi? Vitae necessitatibus temporibus rem fugit sint accusamus 
                    neque aut nesciunt eius, expedita sequi iste nostrum, cumque cul",
                    'type' => "paragraph"
                ],
                [
                    'page_id' => '1',
                    'content' => "Kromstraat 3,
                    </br>2430 Laakdal",
                    'type' => "paragraph"
                ],
                [
                    'page_id' => '1',
                    'content' => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eaque exercitationem dolorum harum, fugiat eius similique, quaerat debitis omnis beatae dignissimos saepe dolore tempora tempore repudiandae ex nemo odit deleniti voluptatibus!
                    
                    ",
                    'type' => "paragraph"
                ],
                [
                    'page_id' => '1',
                    'content' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia voluptatem, nulla laboriosam iste cum consequatur quis atque voluptatibus aliquid. Praesentium, veritatis saepe distinctio quam accusantium provident quis corrupti nesciunt unde.",
                    'type' => "paragraph"
                ],
                [
                    'page_id' => '1',
                    'content' => "Lorem ipsum",
                    'type' => "button-text"
                ],
                [
                    'page_id' => '1',
                    'content' => "Lorem ipsum",
                    'type' => "button-text"
                ],
                [
                    'page_id' => '1',
                    'content' => "Lorem ipsum",
                    'type' => "button-text"
                ],[
                    'page_id' => '1',
                    'content' => "club",
                    'type' => "button-link"
                ],
                [
                    'page_id' => '1',
                    'content' => "belts",
                    'type' => "button-link"
                ],
                [
                    'page_id' => '1',
                    'content' => "informations#location",
                    'type' => "button-link"
                ],
                [
                    'page_id' => '1',
                    'content' => "Johan Vos, Hoofdtrainer",
                    'type' => "trainer-name"
                ],
                [
                    'page_id' => '1',
                    'content' => "Johan Vos, Hoofdtrainer",
                    'type' => "trainer-name"
                ],
                [
                    'page_id' => '1',
                    'content' => "Johan Vos, Hoofdtrainer",
                    'type' => "trainer-name"
                ],
                [
                    'page_id' => '1',
                    'content' => "Johan Vos, Hoofdtrainer",
                    'type' => "trainer-name"
                ],
                [
                    'page_id' => '1',
                    'content' => "+32 412 34 56 78
                    </br>johan@hetklavertje.be",
                    'type' => "trainer-info"
                ],
                [
                    'page_id' => '1',
                    'content' => "+32 412 34 56 78
                    </br>johan@hetklavertje.be",
                    'type' => "trainer-info"
                ],
                [
                    'page_id' => '1',
                    'content' => "+32 412 34 56 78
                    </br>johan@hetklavertje.be",
                    'type' => "trainer-info"
                ],
                [
                    'page_id' => '1',
                    'content' => "+32 412 34 56 78
                    </br>johan@hetklavertje.be",
                    'type' => "trainer-info"
                ],
                [
                    'page_id' => '1',
                    'content' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat.",
                    'type' => 'parent-testimony'
                ],
                [
                    'page_id' => '1',
                    'content' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat.",
                    'type' => 'parent-testimony'
                ],
                [                    
                    'page_id' => '1',
                    'content' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat.",
                    'type' => 'parent-testimony'
                ],
                [                    
                    'page_id' => '1',
                    'content' => " Karen, mother of Kevin",
                    'type' => 'parent'
                ],
                [                    
                    'page_id'=> '1',
                    'content' => " Karen, mother of Kevin",
                    'type' => 'parent'
                ]
                ,
                [                    
                    'page_id' => '1',
                    'content' => " Karen, mother of Kevin",
                    'type' => 'parent'
                ]


            ]
        );

         /* Belts - Club */
        DB::table('texts')->insert(
            [
                [
                    'page_id' => 2,
                    'content' =>"Our history",
                    'type' => 'title'
                ],
                [
                    'page_id' => 2,
                    'content' =>"More details",
                    'type' => 'title'
                ],
                [
                    'page_id' => 2,
                    'content' =>"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Architecto ad vel molestiae nisi? Vitae necessitatibus temporibus rem fugit sint accusamus neque aut nesciunt eius, expedita sequi iste nostrum, cumque culpa.",
                    'type' => 'paragraph'
                ],
                [
                    'page_id' => 2,
                    'content' => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Architecto ad vel molestiae nisi? Vitae necessitatibus temporibus rem fugit sint accusamus neque aut nesciunt eius, expedita sequi iste nostrum, cumque culpa.",
                    'type' => 'paragraph'
                ],
                [
                    'page_od' =>2,
                    'content' => "https://www.youtube.com/embed/1UDmiCaJe9Y",
                    'value' => 'youtube-video'
                ],[
                    'page_id' => 3,
                    'content' => "Our club values",
                    'type' => "title-values"
                ],
                [
                    'page_id' => 3,
                    'content' => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse delectus magnam nesciunt velit suscipit culpa recusandae, temporibus amet ut corporis eaque praesentium quod accusantium aliquid voluptatibus dolores ad quo sint.",
                    'type' => 'paragraph-values'
                ],
                [
                    'page_id' => 3,
                    'content' => "Beyond your limit",
                    'type' => 'title-value'
                ],
                [
                    'page_id' => 3,
                    'content' => "Friendship",
                    'type' => 'title-value'
                ],
                [
                    'page_id' => 3,
                    'content' => "Fairplay",
                    'type' => 'title-value'
                ],
                [
                    'page_id' => 3,
                    'content' => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe, culpa vel impedit dolore, quia, amet magni voluptatem quis dolores vitae animi velit nulla neque consequatur corporis laudantium eveniet sint autem?",
                    'type' => 'paragraph-value'
                ],
                [
                    'page_id' => 3,
                    'content' => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto eum dolorum voluptates veritatis saepe aspernatur animi aliquid consectetur adipisci expedita voluptate voluptatibus perferendis odit, est quia. Eos beatae aliquid labore?",
                    'type' => 'paragraph-value'
                ],
                [
                    'page_id' => 3,
                    'content' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe, culpa vel impedit dolore, quia, amet magni voluptatem quis dolores vitae animi velit nulla neque consequatur corporis laudantium eveniet sint autem?',
                    'type' => 'paragraph-value'
                ],
                [
                    'page_id' => 3,
                    'content' => "History",
                    'type' => 'title-history'
                ],
                [
                    'page_id' => 3,
                    'content' => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe, culpa vel impedit dolore, quia, amet magni voluptatem quis dolores vitae animi velit nulla neque consequatur corporis laudantium eveniet sint autem?",
                    'type' => 'paragraph-history'
                ],
                [
                    'page_id' => 3,
                    'content' => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe, culpa vel impedit dolore, quia, amet magni voluptatem quis dolores vitae animi velit nulla neque consequatur corporis laudantium eveniet sint autem?",
                    'type' => 'paragraph-history'
                ],
                [
                    'page_id' => 3,
                    'content' => "Our Structure",
                    'type' => 'title-structure'
                ],
                [
                    'page_id' => 3,
                    'content' => "Rule of Safety",
                    'type' => 'title-rules'
                ],
                [
                    'page_id' => 3,
                    'content' => "Our Trainers",
                    'type' => 'title-trainers'
                ],
                [
                    'page_id' => 3,
                    'content' => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe, culpa vel impedit dolore, quia, amet magni voluptatem quis dolores vitae animi velit nulla neque consequatur corporis laudantium eveniet sint autem?",
                    'type' => 'paragraph-structure'
                ],
                [
                    'page_id' => 3,
                    'content' => "Somewhere",
                    'type' => 'location-structure'
                ],
                [
                    'page_id' => 3,
                    'content' => "Intentionally harming an opponent is abandoned."
                    ,'type' => 'rule'
                ],
                [
                    'page_id' => 3,
                    'content' => "One cannot punch or kick his opponent."
                    ,'type' => 'rule'
                ],
                [
                    'page_id' => 3,
                    'content' => "You cannot touch the opponent’s face."
                    ,'type' => 'rule'
                ],
                
                [
                    'page_id' => 3,
                    'content' => "Intentionally harming an opponent is abandoned."
                    ,'type' => 'rule'
                ]

            ]
        );

        /* Contact */
        DB::table('texts')->insert(

            [
                [
                    'page_id' => '4',
                    'content' => "Sportclub 't Klavertje",
                    'type' => "title"
                ],
                [
                    'page_id' => '4',
                    'content' => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sed reiciendis quisquam dolorem, est inventore at pariatur, perferendis nisi autem harum ipsum. Perferendis, voluptate ea temporibus dolorum voluptatum eos iusto laudantium.",
                    'type' => "paragraph"
                ],
                [
                    'page_id' => '4',
                    'content' => "Lorem ipsum",
                    'type' => "button-text"
                ],
                [
                    'page_id' => '4',
                    'content' => 'belts',
                    'type' => "button-link"
                ],
                [
                    'page_id' => '4',
                    'content' => "Contact us",
                    'type' => "title-form"
                ],                [
                    'page_id' => '4',
                    'content' => "Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within a matter of hours to help you.",
                    'type' => "paragraph-form"
                ],
                [
                    'page_id' => '4',
                    'content' => "Your name",
                    'type' => "form"
                ],
                [
                    'page_id' => '4',
                    'content' => "Your email",
                    'type' => "form"
                ],
                [
                    'page_id' => '4',
                    'content' => "Your subject",
                    'type' => "form"
                ],
                [
                    'page_id' => '4',
                    'content' => "Your message",
                    'type' => "form"
                ],
                [
                    'page_id' => '4',
                    'content' => "Send",
                    'type' => "button-form"
                ],
                [
                    'page_id' => '4',
                    'content' => "Kromstraat 3, 2430 Laakdal
                    ",
                    'type' => "location"
                ]
                
            ]
        );

        /* Judo */
        DB::table('texts')->insert(
            [
                [
                    'page_id' => '6',
                    'content' => "What is Judo ?",
                    'type' => "title"
                ],
                [
                    'page_id' => '6',
                    'content' => "Jigoro Kano",
                    'type' => "title"
                ],
                [
                    'page_id' => '6',
                    'content' => "Links",
                    'type' => "title"
                ],
                [
                    'page_id' => '6',
                    'content' => "1860 - 1938",
                    'type' => "subtitle"
                ],
                [
                    'page_id' => '6',
                    'content' => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sed reiciendis quisquam dolorem, est inventore at pariatur, perferendis nisi autem harum ipsum. Perferendis, voluptate ea temporibus dolorum voluptatum eos iusto laudantium.",
                    'type' => "paragraph"
                ],
                [
                    'page_id' => '6',
                    'content' => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sed reiciendis quisquam dolorem, est inventore at pariatur, perferendis nisi autem harum ipsum. Perferendis, voluptate ea temporibus dolorum voluptatum eos iusto laudantium.",
                    'type' => "paragraph"
                ],
                [
                    'page_id' => '6',
                    'content' => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sed reiciendis quisquam dolorem, est inventore at pariatur, perferendis nisi autem harum ipsum. Perferendis, voluptate ea temporibus dolorum voluptatum eos iusto laudantium.",
                    'type' => "paragraph"
                ],
                [
                    'page_id' => '6',
                    'content' => "See more",
                    'type' => "button-text"
                ],
                [
                    'page_id' => '6',
                    'content' => "Lorem ipsum",
                    'type' => "button-text"
                ],
                [
                    'page_id' => '6',
                    'content' => "Lorem ipsum",
                    'type' => "button-text"
                ],
                [
                    'page_id' => '6',
                    'content' => "Lorem ipsum",
                    'type' => "button-text"
                ],
                [
                    'page_id' => '6',
                    'content' => "https://en.wikipedia.org/wiki/Kan%C5%8D_Jigor%C5%8D",
                    'type' => "button-link"
                ],
                [
                    'page_id' => '6',
                    'content' => "belts",
                    'type' => "button-link"
                ],
                [
                    'page_id' => '6',
                    'content' => "belts",
                    'type' => "button-link"
                ],
                [
                    'page_id' => '6',
                    'content' => "belts",
                    'type' => "button-link"
                ]
            ]
        );

        /* Sponsors - Informations */
        DB::table('texts')->insert(
            [
                [
                    'page_id' => '7',
                    'content' => "Sponsors",
                    'type' => "title"
                ],
                [
                    'page_id' => '7',
                    'content' => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sed reiciendis quisquam dolorem, est inventore at pariatur, perferendis nisi autem harum ipsum. Perferendis, voluptate ea temporibus dolorum voluptatum eos iusto laudantium.",
                    'type' => "paragraph"
                ],
                [
                    'page_id' => '5',
                    'content' => "Training hours
                    ",
                    'type' => "title"
                ],
                [
                    'page_id' => '5',
                    'content' => "Dojo",
                    'type' => "title"
                ],
                [
                    'page_id' => '5',
                    'content' => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sed reiciendis quisquam dolorem, est inventore at pariatur, perferendis nisi autem harum ipsum. Perferendis, voluptate ea temporibus dolorum voluptatum eos iusto laudantium.",
                    'type' => "paragraph"
                ],
                [
                    'page_id' => '5',
                    'content' => "Contact us !",
                    'type' => "button-text"
                ],
                [
                    'page_id' => '5',
                    'content' => "contact",
                    'type' => "button-link"
                ],
                
            ]
        );

        /* footer */
        DB::table('texts')->insert(
            [
                [
                    'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt distinctio earum repellat quaerat voluptatibus placeat nam, commodi optio pariatur est quia magnam eum harum corrupti dicta, aliquam sequi voluptate quas.',
                    'type' => 'footer'
                ],
                [
                    'content' => 'COMPANY NAME
                    ',
                    'type' => 'footer'
                ],
                [
                    'content' => 'Judo Club Samurai Endhout',
                    'type' => 'footer'
                ],                [
                    'content' => 'New York, NY 10012, US',
                    'type' => 'footer'
                ],
                [
                    'content' => 'info@example.com',
                    'type' => 'footer'
                ],
                [
                    'content' => '+ 01 234 567 88',
                    'type' => 'footer'
                ],                [
                    'content' => 'https://www.facebook.com/groups/123083158750/',
                    'type' => 'footer'
                ],                [
                    'content' => 'Facebook',
                    'type' => 'footer'
                ],

                [
                    'content' => 'Auteursrecht © 2022 Template 7 – Privacybeleid – Cookie instellingen - Made by Aissa Kahloul and Mathieu Rakotoarisoa',
                    'type' => 'footer'
                ],
            ]
        );

        /* website-name */
        DB::table('texts')->insert(
            [
                [
                    'content' => 'JUDO CLUB SAMURAI ENDHOUT',
                    'type' => 'website-name'
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
        Schema::dropIfExists('texts');
    }
}
