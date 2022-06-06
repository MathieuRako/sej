<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    public static function get_id($name){
        return Page::where('name','=',$name)->first()['id'];
    }
}
