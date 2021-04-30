<?php

namespace App\Http\Controllers;
use App\Models\BookModel;

use Illuminate\Http\Request;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

         $bookss=BookModel::all();
         $books=$bookss->reverse();

         return view("Book.index",compact("books"));
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         try {
            $mod=BookModel::create($request->all());
            $mod->save();
             return redirect('book');
        } catch (Throwable $error) {
            return "Error";
        }
    }


}
