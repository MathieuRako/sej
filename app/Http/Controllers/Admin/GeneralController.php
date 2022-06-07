<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Text;

class GeneralController extends Controller
{
    public function index()
    {
        $footer_content = Text::select('id','content')->where('type', '=', 'footer')
            ->get()->toArray();
        $allTexts['footer'] = $footer_content;
        $website_name = Text::select('id','content')->where('type', '=', 'website-name')
            ->get();
        $allTexts['website-name'] = $website_name;
        return view('admin.texts.general', [
        'alltexts' => $allTexts]);
    }
}
