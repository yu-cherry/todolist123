<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TodoController extends Controller
{
    public function index()
    {
        $data=DB::table('todos')->get();
        /*dd($data,'123');*/
        return  view('parges/index',compact('data',$data));
    }
    public function get_create_page()
    {
        return  view('parges/create');
    }
    public function store_create_data(Request $request)
    {
        $title =$request->title;
        $content =$request->content;
        $remark =$request->remark;
        DB::table("todos")->insert([
           "title"=>$title,
            "content"=>$content,
             "remark"=>$remark
        ]);
        return view('parges/create');

    }
    public function delete(Request $request){
        $id = $request->delete_id;
        DB:table('todos')
            ->where('id',$id)
            ->delete();
        return redirect()->route('index');
    }
}
