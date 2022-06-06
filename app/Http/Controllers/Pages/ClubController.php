<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Page;
use App\Trainer;
use Illuminate\Http\Request;

class ClubController extends Controller
{
    public function indexClub(){
        $id = Page::get_id('club');
        $trainers = Trainer::select('*')
                            ->join('judokas','trainers.id','=','judokas.id')
                            ->get();
        return view('pages.club',['page' => PageController::page_info($id),
                                  'allcontent' => PageController::all_content($id),
                                  'trainers' => $trainers]);
    }
}
