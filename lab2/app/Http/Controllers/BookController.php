<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    function index()
    {
        //get danh sach book
        $bookList = DB::table('tbBook')->get();
        //dd($bookList);
        return view("index", compact("bookList"));
    }
    function create()
    {
        return view("create");
    }
    function postAdd(Request $request)
    {
        //get du lieu tu form
        $title = $request->title;
        $price = $request->price;

        DB::table('tbBook')->insert([
            'tittle' => $title,
            'price' => $price,
        ]);
        //chuyen ve duong dan index
        return redirect('/index');
    }

    function update($id)
    {   //
        $book = DB::table('tbBook')->where('id', $id)->first();
        return view('update', compact('book'));
    }
    function postUpdate(Request $request)
    {
        //get du lieu tu form
        $id = $request->id;
        $title = $request->title;
        $price = $request->price;

        DB::table('tbBook')->where('id', $id)->update([
            'tittle' => $title,
            'price' => $price,
        ]);
        //chuyen ve duong dan index
        return redirect('/index');
    }

    function delete($id)
    {
        DB::table('tbBook')->where('id', '=' , $id)->delete();
        //chuyen ve duong dan index
        return redirect('/index');
    }

    function search(Request $request)
    {
        $keysearch = $request->searchText;

        $bookList = DB::table('tbBook')->where('tittle', 'like', '%' . $keysearch . '%')->get();
        
        return view('index', compact('bookList'));
    }
}
