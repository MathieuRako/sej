<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Judoka;
use Illuminate\Http\Request;

class JudokasController extends Controller
{
    public function index(Request $request){
        if(!isset($request->search)){
            return view('admin.judokas',['judokas' => $this->search('')]);
        }
        else{
            return view('admin.judokas',['judokas' => $this->search($request->search)]);
        }
    }

    function search(string $q){
        $judokas = Judoka::where( 'name', 'LIKE', '%' . $q . '%' )->orWhere ( 'firstname', 'LIKE', '%' . $q . '%' )->orWhere( 'firstname','+',' ','+','name', 'LIKE', '%' . $q . '%' )->orderBy('name')->paginate (7)->setPath ('');
        return $judokas;
    }

    public function remove(Request $request){
        $id = $request->input('id');
        $judoka = Judoka::find($id);
        $judoka->delete();
        return redirect()->back();
    }

    public function add(Request $request){
        Judoka::Insert([
            'name' => $request->input('name'),
            'firstname' => $request->input('firstname'),
            'belt' => $request->input('belt'),
            'age' => $request->input('age'),
            'mail' => $request->input('mail'),
            'phone_number' => $request->input('phone'),
            'points' => $request->input('points'),
        ]);

        return redirect()->back();

    }
    public function update(Request $request){
        $id = $request->input('id');
        
        $judoka = Judoka::find($id);
        $judoka->name = $request->input('name');
        $judoka->firstname = $request->input('firstname');
        $judoka->belt = $request->input('belt');
        $judoka->age = $request->input('age');
        $judoka->mail = $request->input('mail');
        $judoka->phone_number = $request->input('phone  ');
        $judoka->points = $request->input('points');
        $judoka->save();
        
        return redirect()->back();
    }

}
