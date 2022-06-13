<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Category;
use App\Training;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    function category(Request $request)
    {
        $id = explode('-', $request->input('ids'))[0];
        return Category::find($id);
    }

    #region category
    public function addCategory(Request $request)
    {
        $page = $request->input('page');
        $name = $request->input('name');
        $age_min = $request->input('age_min');
        $age_max = $request->input('age_max');

        Category::insert([
            'name' => $name,
            'age_min' => $age_min,
            'age_max' => $age_max,
            'created_at' => now(),
        ]);


        return redirect()->back();
    }

    public function updateCategory(Request $request)
    {
  
        $category = $this->category($request);
        $category->name = $request->input('name');
        $category->save();
        return redirect()->back();
    }

    public function removeCategory(Request $request)
    {
        
        $category = Category::find($request->input('id'));
        $category->delete();
        return redirect()->back();
    }
    #endregion

    #region training
    public function addTraining(Request $request)
    {
        
        $hours = $request->input('hours');
        $day = $request->input('day');
        $category_id = $request->input('category');
        $maxLine = Training::select('line')->where('category_id', '=', $category_id)->orderByDesc('line')->first();
        if (!isset($maxLine['line'])) {
            $line = 1;
        } else {
            $line = $maxLine['line'] + 1;
        }

        Training::insert([
            'hours' => $hours,
            'day' => $day,
            'line' => $line,
            'category_id' => $category_id,
            'created_at' => now(),
        ]);

        return redirect()->back();
    }

    public function updateTraining(Request $request)
    {
        $hours = $request->input('hours');
        $days = $request->input('days');
        $ids = explode('-', $request->input('ids'));

        for ($i = 0; $i < count($ids); $i++) {
            $training = Training::find($ids[$i]);
            $training->hours = $hours[$i];
            $training->day = $days[$i];
            $training->save();
        }
        

        return redirect()->back();
    }

    public function removeTraining(Request $request)
    {
        $training = Training::find($request->input('id'));
        $training->delete();
        return redirect()->back();
    }
    #endregion

}
