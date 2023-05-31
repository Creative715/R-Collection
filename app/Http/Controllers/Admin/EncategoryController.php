<?php

namespace App\Http\Controllers\Admin;

use App\Models\Encategory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class EncategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
     {
         return view('admin.encategory.index', [
             'categories'=> Encategory::paginate(10)
         ]);
     }

     /**
      * Show the form for creating a new resource.
      *
      * @return \Illuminate\Http\Response
      */
      public function create()
      {
        return view('admin.encategory.create');
      }

      public function store(Request $request)
      {
       $encategory = Encategory::create($request->all());
         if ($request->file('img')) {
            $path = Storage::putFile('public', $request->file('img'));
            $url = Storage::url($path);
            $encategory->img = $url;
          }
          $encategory->save();
         return redirect('/inside/encategory')->with('success', 'Record successfully added!');
      }
     /**
      * Show the form for editing the specified resource.
      *
      * @param  \App\Models\enCategory $encategory
      * @return \Illuminate\Http\Response
      */
     public function edit(Encategory $encategory)
     {
         return view('admin.encategory.edit',[
            'encategory' => $encategory
         ]);
     }

     /**
      * Update the specified resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @param  \App\Models\Encategory  $encategory
      * @return \Illuminate\Http\Response
      */
     public function update(Request $request, Encategory $encategory)
     {
         $encategory->update($request->except('slug'));
         if ($request->file('img')) {
            $path = Storage::putFile('public', $request->file('img'));
            $url = Storage::url($path);
            $encategory->img = $url;
          }
          $encategory->save();

         return redirect('/inside/encategory')->with('success', 'Record successfully updated!');
     }
     /**
      * Remove the specified resource from storage.
      *
      * @param  \App\Models\Encategory  $encategory
      * @return \Illuminate\Http\Response
      */
     public function destroy(Encategory $encategory)
     {
         $encategory->delete();

         return redirect('/inside/encategory')->with('success', 'Record successfully deleted!');
     }
}
