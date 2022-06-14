<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Page;
use App\Sponsors;
use App\Picture;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class PicturesController extends Controller
{

    function pages()
    {
        return Page::select('id', 'name')->get();
    }
    public function index()
    {
        return view('admin.pictures.pages', ['pages' => $this->pages()]);
    }
    public function indexSponsor(Request $request)
    {

        $size =  $request->input('size');
        if (isset($size)) {
            if ($size == "nosize") {
                return redirect()->back();
            } else {
                $sponsors = Sponsors::select('sponsors.id','sponsors.link','sponsors.size','sponsors.name as sname','sponsors.updated_at','pictures.name', 'pictures.directory')->join('pictures', 'pictures.id', '=', 'sponsors.picture_id')->where('size', '=', $size)->orderBy('position')->get();
                return view('admin.pictures.sponsors', [
                    'sizes' => 3,
                    'sponsors' => $sponsors
                ]);
            }
        } else {
            return view('admin.pictures.sponsors', [
                'sizes' => 3,
            ]);
        }
    }


    public function indexPage($name)
    {
        $id =  Page::get_id($name);

        if (isset($id)) {

            if ($id == "") {
                return redirect()->back();
            } else if ($id == "general") {
                $pictures = Picture::where('general', '=', true)->get();
            } else {

                $pictures = Picture::where('page_id', '=', $id)->get();
            }
            return view('admin.pictures.pages', [
                'pages' => $this->pages(),
                'pictures' => $pictures,
            ]);
        } else {
            return redirect()->back();
        }
    }

    #region picture

    private function removePictureWithoutRequest($id)
    {
        $picture = Picture::find($id);
        $directory = $picture->directory;
        if (isset($directory)) {
            $directory = "images/" . $directory . '/';
        } else {
            $directory = "images/";
        }
        @unlink($directory . $picture['name']);
        $picture->delete();
    }

    public function removePicture(Request $request)
    {
        $this->removePictureWithoutRequest($request->input('id'));
        return redirect()->back();
    }

    private function addPictureWithoutRequest($file, $alt, $directory = null)
    {
        $picture = new Picture;
        if (isset($file)) {
            if (isset($directory)) {
                $picture->directory = $directory;
                $directory = "images/" . $directory;
            } else {
                $directory = "images";
            }
            $name = preg_replace('/\s+|:|-/', '', now()) . $file->getClientOriginalName();
            $file->move($directory, $name);
            if (isset($alt)) {
                $picture->alt = $alt;
            }
            $picture->name = $name;
            $picture->save();
            return $picture->id;
        }
        return -1;
    }

    public function addPicture(Request $request)
    {
        $file = $request->file('image');
        $alt = $request->input('alt');
        $this->addPictureWithoutRequest($file, $alt);
        return redirect()->back();
    }
    private function updatePictureWithoutRequest($id, $file, $alt)
    {
        $picture = Picture::find($id);

        if (isset($file)) {
            if (isset($picture->directory)) {
                $directory = "images/" . $picture->directory;
            } else {
                $directory = "images";
            }
            
            $name = preg_replace('/\s+|:|-/', '', now()) . $file->getClientOriginalName();
       
            
            $file->move($directory, $name);
            $oldname = $picture['name'];

            @unlink($directory .'/'. $oldname);
            $picture->name = $name;
        }
        
        if (isset($alt)) {
            $picture->alt = $alt;
        }
        $picture->save();
    }
    public function updatePicture(Request $request)
    {

        $id = $request->input('id');
        $file = $request->file('image');
     
        $alt = $request->input('alt');

        $this->updatePictureWithoutRequest($id, $file, $alt);

        return redirect()->back();
    }
    #endregion

    #region sponsor
    public function updateSponsor(Request $request)
    {

        $sponsor = Sponsors::find($request->input('id'));
        $file = $request->file('image');
        $link = $request->input('link');

        @$name = $request->input('name');
        $this->updatePictureWithoutRequest($sponsor->picture_id, $file, $name);
        $size = $request->input('size_');

        if (isset($size)) {
            @$posmax = Sponsors::select('position')->where('size', '=', $size)->orderByDesc('position')->first()['position'];
            if (isset($posmax)) {
                $sponsor->position = $posmax + 1;
            }
            else{
                $sponsor->position = 1;
            }

            $sponsor->size = $size;
        }
        $sponsor->link = $link;
        @$sponsor->name = $name;

        $sponsor->save();
        return redirect()->back();
    }

    public function addSponsor(Request $request)
    {
        $sponsor = new Sponsors;
        $size = $request->input('size_');

        $name =  $request->input('name');
        $link = $request->input('link');
        @$sponsor->name = $name;
        if (isset($size)) {
            @$posmax = Sponsors::select('position')->where('size', '=', $size)->orderByDesc('position')->first()['position'];
            if (isset($posmax)) {
                $sponsor->position = $posmax + 1;
            }
            else{
                $sponsor->position = 1;
            }
            $sponsor->link = $link;
            $sponsor->size = $size;
        }
        $file = $request->file('image');
        $sponsor->picture_id = $this->addPictureWithoutRequest($file, $name, 'sponsors');
        $sponsor->save();
        return redirect()->back();
    }

    public function removeSponsor(Request $request)
    {
        $sponsor = Sponsors::find($request->input('id'));
        $this->removePictureWithoutRequest($sponsor['picture_id']);
        $sponsor->delete();
        return redirect()->back();
    }
    #endregion
}
