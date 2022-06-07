<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Pages\PageController;
use App\Page;
use App\Text;
use Illuminate\Http\Request;

class TextsController extends Controller
{
    public static function all_texts_id($i){
        $types = Text::distinct()->where('page_id', '=', $i)->get(['type']);
   
        $allTexts =[];
        foreach($types as $t){
            $type_content = Text::where('type', '=', $t['type'])
                            ->where('page_id', '=', $i)
                            ->get();
            $type_simple_array  = [];
            foreach($type_content as $texts ){
                $type_simple_array[] = $texts;                
            }
            $allTexts[$t['type']] = $type_simple_array;

        }
        return $allTexts;
    }
    public function index($name){
        $id = Page::get_id($name);
        return view('admin.texts.'.$name, ['page' => Controller::page_info($id)
        ,'alltexts' => TextsController::all_texts_id($id)]);

    }


    public function removeText(Request $request){
        $id = $request->input('id');
        $page = $request->input('page');
        $text = Text::find($id);
        $text->delete();
        if(isset($page)){
            return redirect()->route('texts',['name' => $page]);
        }
        else{
            return redirect()->route('admin');
        }
    }

    public function addText(Request $request){
        $page = $request->input('link');
        $page_id = Page::get_id($page);
        $content = $request->input('content');
        $type = $request->input('type');
        Text::insert([
            'page_id' => $page_id,
            'content' => $content,
            'type' => $type,
            'created_at' => now()
        ]);

        return redirect()->route('texts',['name' => $page]);


    }
    //
    public function updateText(Request $request){
        $contents = $request->input('content');
        $ids = explode('-',$request->input('ids'));

        for($i = 0; $i < count($ids); $i++){
            $text = Text::find($ids[$i]);
            $text->content = $contents[$i];
            $text->save();
        }
        $name =$request->input('link');

        return redirect()->route('texts',['name' => $name]);
    }
}
