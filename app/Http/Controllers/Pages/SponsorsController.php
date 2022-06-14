<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Sponsors;
use App\Page;
use Illuminate\Http\Request;

class SponsorsController extends Controller
{
    public function index()
    {
        $id = Page::get_id('sponsors');
        $allcontent = Controller::all_content($id);
        $allsponsors = [];
        for ($i = 1; $i < 4; $i++) {
            $sponsorSize = Sponsors::select('sponsors.id','pictures.alt','sponsors.link', 'sponsors.size', 'sponsors.name as sname', 'sponsors.updated_at', 'pictures.name', 'pictures.directory')
                ->join('pictures', 'pictures.id', '=', 'sponsors.picture_id')
                ->where('size', '=', $i)
                ->orderBy('position')->get();
            $allsponsors[] = $sponsorSize;
        }
        $allcontent['sponsors'] = $allsponsors;

        return view('pages.sponsors', [
            'page' => Controller::page_info($id), 'allcontent' => $allcontent
        ],);
    }
}
