<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Page;
use App\Category;
use App\Judoka;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    public function index(){
        $id = Page::get_id('informations');
        $rank = Judoka::select('judokas.*', 'rankings.points')
            ->join('rankings', 'judokas.id', '=', 'rankings.judoka_id')
            ->orderByDesc('points')
            ->limit(10)
            ->get();
        $categories = Category::distinct()->get();
        $schedule = [];
        foreach ($categories as $c) {
            $schedule[] = [ 'trainings' => Category::select('trainings.id','trainings.hours', 'trainings.day')
                                ->join('trainings','categories.id','=','trainings.category_id')
                                ->where('categories.id','=',$c['id'])
                                ->orderBy('line')
                                ->get(),
                             'content' => $c['name'],
                             'id' => $c['id']];
                 
        }
        return view('admin.texts.informations', [
            'rank' => $rank,
            'page' => Controller::page_info($id),
            'schedule' => $schedule,
            'alltexts' => TextsController::all_texts_id($id),
        ]);
    }



}
