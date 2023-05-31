<?php

namespace App\Http\Controllers\Admin;

use App\Models\Nocategory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class NocategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
     {
         return view('admin.nocategory.index', [
             'categories'=> Nocategory::paginate(10)
         ]);
     }

     /**
      * Show the form for creating a new resource.
      *
      * @return \Illuminate\Http\Response
      */
      public function create()
      {
        return view('admin.nocategory.create');
      }

      public function store(Request $request)
      {
       $nocategory = Nocategory::create($request->all());
         if ($request->file('img')) {
            $path = Storage::putFile('public', $request->file('img'));
            $url = Storage::url($path);
            $nocategory->img = $url;
          }
          $nocategory->save();
         return redirect('/inside/nocategory')->with('success', 'Record successfully added!');
      }

     /**
      * Show the form for editing the specified resource.
      *
      * @param  \App\Models\Nocategory $nocategory
      * @return \Illuminate\Http\Response
      */
     public function edit(noCategory $nocategory)
     {
         return view('admin.nocategory.edit',[
            'nocategory' => $nocategory
         ]);
     }

     /**
      * Update the specified resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @param  \App\Models\Nocategory  $nocategory
      * @return \Illuminate\Http\Response
      */
     public function update(Request $request, Nocategory $nocategory)
     {
         $nocategory->update($request->except('slug'));
         if ($request->file('img')) {
            $path = Storage::putFile('public', $request->file('img'));
            $url = Storage::url($path);
            $nocategory->img = $url;
          }
          $nocategory->save();

         return redirect('/inside/nocategory')->with('success', 'Record successfully updated!');
     }
     /**
      * Remove the specified resource from storage.
      *
      * @param  \App\Models\Nocategory  $nocategory
      * @return \Illuminate\Http\Response
      */
     public function destroy(Nocategory $nocategory)
     {
         $nocategory->delete();

         return redirect('/inside/nocategory')->with('success', 'Record successfully deleted!');
     }
}
