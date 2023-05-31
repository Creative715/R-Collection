<?php

namespace App\Http\Controllers\Admin;

use App\Models\Noproduct;
use App\Models\Nocategory;
use App\Http\Controllers\Controller;
use App\Models\Image;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class NoproductController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $noproducts = Noproduct::latest()->paginate(20);
    return view('admin.noproduct.index', [
      'noproducts' => $noproducts
    ]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    $nocategories = Nocategory::all();
    return view('admin.noproduct.create', [
      'nocategories' => $nocategories
    ]);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param \Illuminate\Http\Request $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $noproduct = Noproduct::create($request->all());

    // Images
    if ($request->file('img')) {
      $path = Storage::putFile('public', $request->file('img'));
      $url = Storage::url($path);
      $noproduct->img = $url;
    }
    $noproduct->save();
    if ($request->hasFile("images")) {
      $files = $request->file("images");
      foreach ($files as $file) {
        $imageName = time() . '_' . $file->getClientOriginalName();
        $request['noproduct_id'] = $noproduct->id;
        $request['image'] = $imageName;
        $file->move(\public_path("/img/gallery"), $imageName);
        Image::create($request->all());
      }
    }

    return redirect('inside/noproduct')->withSuccess('Record successfully added!');
  }


  /**
   * Show the form for editing the specified resource.
   *
   * @param \App\Models\Noproduct $noProduct
   */

  public function edit(Noproduct $noproduct)
  {
    $nocategories = Nocategory::all();

    return view('admin.noproduct.edit', [
      'nocategories' => $nocategories,
      'noproduct' => $noproduct
    ]);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param \Illuminate\Http\Request $request
   * @param \App\Models\Noproduct $noProduct
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Noproduct $noproduct)
  {

    $noproduct->update($request->all());

    // Images
    if ($request->file('img')) {
      $path = Storage::putFile('public', $request->file('img'));
      $url = Storage::url($path);
      $noproduct->img = $url;
    }
    $noproduct->save();
    if ($request->hasFile("images")) {
      $files = $request->file("images");
      foreach ($files as $file) {
        $imageName = time() . '_' . $file->getClientOriginalName();
        $request['noproduct_id'] = $noproduct->id;
        $request['image'] = $imageName;
        $file->move(\public_path("/img/gallery"), $imageName);
        Image::create($request->all());
      }
    }
    return redirect('inside/noproduct')->withSuccess('Record successfully updated!');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param \App\Models\Noproduct $noProduct
   * @return \Illuminate\Http\Response
   */
  public function destroy(Noproduct $noproduct)
  {
    $noproduct->delete();

    return redirect('inside/noproduct')->withSuccess('Record successfully deleted!');
  }
  public function deleteimage($id)
  {
      $images = Image::findOrFail($id);
      if (File::exists("img/gallery/" . $images->image)) {
          File::delete("img/gallery/" . $images->image);
      }

      Image::find($id)->delete();
      return back();
  }
}
