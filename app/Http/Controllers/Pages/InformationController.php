<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Page;

use App\Judoka;
use Illuminate\Http\Request;

class InformationController extends Controller
{

    public function indexInformation(){
        $id = Page::get_id('informations');
        $rank = Judoka::select('judokas.*', 'rankings.points')
            ->join('rankings','judokas.id','=','rankings.id')
            ->orderByDesc('points')
            ->limit(10)
            ->get();
        return view('pages.informations', ['rank' => $rank,
                                            'page' => PageController::page_info($id),
                                            'allcontent' => PageController::all_content($id),]);
    } 

    
}


