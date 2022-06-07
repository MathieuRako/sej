<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Page;
use App\Category;
use App\Judoka;
use Illuminate\Http\Request;

class InformationController extends Controller
{

    public function indexInformation()
    {
        $id = Page::get_id('informations');
        $rank = Judoka::select('judokas.*', 'rankings.points')
            ->join('rankings', 'judokas.id', '=', 'rankings.judoka_id')
            ->orderByDesc('points')
            ->limit(10)
            ->get();
        $categories = Category::distinct()->get();
        $schedule = [];
        foreach ($categories as $c) {
            $schedule[] = [ 'trainings' => Category::select('trainings.*')
                                ->join('trainings','categories.id','=','trainings.category_id')
                                ->where('categories.id','=',$c['id'])
                                ->orderBy('line')
                                ->get(),
                             'name' => $c['name']];
                 
        }
        return view('pages.informations', [
            'rank' => $rank,
            'page' => PageController::page_info($id),
            'schedule' => $schedule,
            'allcontent' => PageController::all_content($id),
        ]);
    }
}
