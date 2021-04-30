<?php

namespace App\Http\Controllers;
use App\Models\BookModel;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Request->session()->exists('isAdm')) {

             $bookss=BookModel::all();
             $books=$bookss->reverse();

         return view("Admin.index",compact("books"));
        }
        else{
           return redirect ("book");
        }

    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         try {
            $request->offsetUnset('_token');
            $request->offsetUnset('_method');
            BookModel::where("id",$this->request->only('id'))->update($request->all());
            return redirect ("admin");

        } catch (Throwable $error) {
            return 'Not Found';
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         try {
           BookModel::where("id",$id)->delete();
            $models = $this->model->get()->all();
            return redirect ("admin");
        } catch (Throwable $error) {
            return 'Not Found';
        }

        return  'Deleted';

    }
    }
}
