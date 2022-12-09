<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Memo;

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
    public function index()
    {
        return view('home');
    }

    public function bboard()
    {
        return view('bboard');
    }

    public function room()
    {
        $user = \Auth::user();
        return view('room',compact('user'));
    }

    public function private()
    {
        return view('private');
    }

    public function text()
    {
        $user = \Auth::user();
        $memos = Memo::where('status',1)->get();
        //dd($memos);
        return view('text',compact('user','memos'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        //dd($data);
        $memo_id = Memo::insertGetId([
            'content' => $data['content'],
             'user_id' => $data['user_id'], 
             //'tag_id' => $tag_id,
             'status' => 1
        ]);
        return redirect()->route('room');
    }
}
