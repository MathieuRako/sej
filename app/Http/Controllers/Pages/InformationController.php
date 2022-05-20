<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;

use App\Judoka;
use App\Ranking;
use Illuminate\Http\Request;

class InformationController extends Controller
{

    public function index(){
        $rank = Judoka::select('judokas.*', 'rankings.points')
            ->join('rankings','judokas.id','=','rankings.id')
            ->orderByDesc('points')
            ->limit(10)
            ->get();
        return view('pages.informations', ['rank' => $rank]);
    } 

    
}
