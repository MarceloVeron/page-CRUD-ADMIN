<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class PagesController extends Controller
{
        public function welcome(){
            $texts = App\Txt::all();
            return view('welcome', compact('texts'));
        } 
        public function update(Request $request, $id){
            $notaUpdate = App\Txt::all($id);
            $notaUpdate->txt_header = $request->txt_header;
            $notaUpdate->save();
            return back();
        } 
}
