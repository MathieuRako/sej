<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Page;
use App\Trainer;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function indexHome(){
        $id = Page::get_id('home');
        $trainers = Trainer::select('*')
                            ->join('judokas','trainers.judoka_id','=','judokas.id')
                            ->where('main_page','=','1')
                            ->limit('4')
                            ->get();
        
 
        return view('pages.home',['page' => PageController::page_info($id),
                                  'allcontent' => PageController::all_content($id),
                                  'trainers' => $trainers]);
    }

}
