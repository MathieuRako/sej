<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;

use Illuminate\Routing\Controller as BaseController;
use App\Text;
use App\Page;
use App\Picture;
use PhpParser\Builder\Class_;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public static function all_pictures($i){  
        $pictures = Picture::where('page_id','=',$i)->get()->toArray();
        return $pictures;
    }

    public static function all_texts($i){
        $types = Text::distinct()->get(['type']);
   
        $allTexts =[];
        foreach($types as $t){
            $type_content = Text::where('type', '=', $t['type'])
                            ->where('page_id', '=', $i)
                            ->get('content')->toArray();
            $type_simple_array  = [];
            foreach($type_content as $type){
                $type_simple_array[] = $type['content'];                
            }
            $allTexts[$t['type']] = $type_simple_array;

        }
        return $allTexts;
    }
        /**
     * Function that returns all the content of a page, stocked in an associative-array composed by arrays of content of the same type
     * 
     * @param i the given page
     * @return an associative array
     */
    public static function all_content(int $i){
  
   
        $allContent = Controller::all_texts($i);
        $allContent['pictures'] = Controller::all_pictures($i);

        $footer_content = Text::where('type','=','footer')
                            ->get('content')->toArray();
        $allContent['footer'] = $footer_content;
        $website_name = Text::where('type','=','website-name')
                             ->get('content')->toArray();
        $allContent['website-name'] = $website_name;
        return $allContent;
    }



    
    public static function page_info($id){
        return Page::where("id","=",$id)->get('title','subtitle')[0];
    }

}
