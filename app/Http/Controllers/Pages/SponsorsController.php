<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Sponsors;
use App\Page;
use Illuminate\Http\Request;

class SponsorsController extends Controller
{
    public function index(){
        $allsponsors = [];
        for($i = 1;$i<4;$i++){
            $sponsorSize = Sponsors::join('pictures','pictures.id','=','sponsors.picture_id')
                                    ->where('size','=',$i)
                                    ->orderBy('position')->get();
            $allsponsors[] = $sponsorSize;
        }
        $id = Page::get_id('sponsors');
        return view('pages.sponsors',[
            'page' => PageController::page_info($id),
            'allcontent' => PageController::all_content($id),
            'sponsors' => $allsponsors
        ]);
    }
}
