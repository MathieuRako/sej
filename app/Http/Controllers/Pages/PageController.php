<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Text;
use App\Page;
use App\Picture;
use Illuminate\Http\Request;

class PageController extends Controller
{
    
    public function index($name){
        $id = Page::get_id($name);

        return view('pages.'.$name, ['page' => Controller::page_info($id)
                            ,'allcontent' => Controller::all_content($id)]);
    }

    
}
