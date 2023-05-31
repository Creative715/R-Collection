<?php

namespace App\Http\Controllers\Admin;

use App\Models\Enproduct;
use App\Http\Controllers\Controller;
use App\Models\Encategory;
use App\Models\Image;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class EnenproductController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $enproducts = Enproduct::latest()->paginate(20);
    return view('admin.enproduct.index', [
      'enproducts' => $enproducts
    ]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    $encategories = Encategory::all();
    return view('admin.enproduct.create', [
      'categories' => $encategories
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
    $enproduct = Enproduct::create($request->all());

    // Images
    if ($request->file('img')) {
      $path = Storage::putFile('public', $request->file('img'));
      $url = Storage::url($path);
      $enproduct->img = $url;
    }
    $enproduct->save();
    if ($request->hasFile("images")) {
      $files = $request->file("images");
      foreach ($files as $file) {
        $imageName = time() . '_' . $file->getClientOriginalName();
        $request['enproduct_id'] = $enproduct->id;
        $request['image'] = $imageName;
        $file->move(\public_path("/img/gallery"), $imageName);
        Image::create($request->all());
      }
    }

    return redirect('inside/enproduct')->withSuccess('Record successfully added!');
  }


  /**
   * Show the form for editing the specified resource.
   *
   * @param \App\Models\Enproduct $enProduct
   */

  public function edit(Enproduct $enproduct)
  {
    $encategories = Encategory::all();

    return view('admin.enproduct.edit', [
      'categories' => $encategories,
      'enproduct' => $enproduct
    ]);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param \Illuminate\Http\Request $request
   * @param \App\Models\enProduct $enProduct
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, enProduct $enproduct)
  {

    $enproduct->update($request->all());

    // Images
    if ($request->file('img')) {
      $path = Storage::putFile('public', $request->file('img'));
      $url = Storage::url($path);
      $enproduct->img = $url;
    }
    $enproduct->save();
    if ($request->hasFile("images")) {
      $files = $request->file("images");
      foreach ($files as $file) {
        $imageName = time() . '_' . $file->getClientOriginalName();
        $request['enproduct_id'] = $enproduct->id;
        $request['image'] = $imageName;
        $file->move(\public_path("/img/gallery"), $imageName);
        Image::create($request->all());
      }
    }
    return redirect('inside/enproduct')->withSuccess('Record successfully updated!');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param \App\Models\enProduct $enProduct
   * @return \Illuminate\Http\Response
   */
  public function destroy(enProduct $enproduct)
  {
    $enproduct->delete();

    return redirect('inside/enproduct')->withSuccess('Record successfully deleted!');
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
