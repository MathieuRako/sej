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

            'schedule' => $schedule,
            'alltexts' => TextsController::all_texts_id($id),
        ]);
    }



}
