<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index(){
        return "こんあくあ～";
    }

    public function view(){
        $data=[
            //ビュー変数を準備
            'msg'=>'みなさんどうもこんあくあ～！！ホロライブ２期生の湊あくあです！！'
        ];
        //テンプレートを呼び出す
        return view('hello.view',$data);
    }
}
