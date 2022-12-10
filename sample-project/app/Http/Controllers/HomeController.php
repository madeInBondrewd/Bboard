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
        $memos = Memo::get();
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

    
    //画像のアップロード
    
    public function upload(Request $request)
    {
        $data = $request->all();
        //dd($data);
        // ディレクトリ名
        $dir = 'sample';

        // アップロードされたファイル名を取得
        $file_name = $request->file('image')->getClientOriginalName();

        // 取得したファイル名で保存
        $request->file('image')->storeAs('public/' . $dir, $file_name);

        // ファイル情報をDBに保存
        $memo_id = Memo::insertGetId([
            'content' => 'storage/' . $dir . '/' . $file_name,
             'user_id' => $data['user_id'], 
             //'tag_id' => $tag_id,
             'status' => 3
        ]);

        return redirect('/room');
    }
}
