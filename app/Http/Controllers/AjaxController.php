<?php

namespace App\Http\Controllers;

use App\Models\Ajax;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function save(Request $request){
        $Ajax = new Ajax();
        $Ajax->fill($request->all());
        $Ajax->save();
        return $Ajax;
    }
    public function display(){
        $Ajax = Ajax::all();
        return$Ajax;
    }
}
