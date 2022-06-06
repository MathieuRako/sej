<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Text;
use App\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    
    /**
     * Function that returns all the content of a page, stocked in an associative-array composed by arrays of content of the same type
     * 
     * @param i the given page
     * @return an associative array
     */
    public static function all_content(int $i){
        $types = Text::distinct()->get(['type']);
   
        $allContent =[];
        foreach($types as $t){
            $type_content = Text::where('type', '=', $t['type'])
                            ->where('page_id', '=', $i)
                            ->get('content')->toArray();
            $type_simple_array  = [];
            foreach($type_content as $type){
                $type_simple_array[] = $type['content'];                
            }
            $allContent[$t['type']] = $type_simple_array;

        }
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

    public function index($name){
        $id = Page::get_id($name);

        return view('pages.'.$name, ['page' => PageController::page_info($id)
                            ,'allcontent' => PageController::all_content($id)]);
    }

    
}
