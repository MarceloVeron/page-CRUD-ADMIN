<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function admin()
    {
        $texts = App\Txt::all();
        return view('admin', compact('texts'));
    }
    public function update(Request $request, $id){
        $notaUpdate = App\Txt::findOrFail($id);
        $notaUpdate->txt_header = $request->txt_header;
        $notaUpdate->save();
        return back();
    } 
}
