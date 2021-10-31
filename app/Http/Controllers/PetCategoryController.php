<?php

namespace App\Http\Controllers;

use App\Pet;
use App\PetCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PetCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pet_categories = DB::table('pet_categories')->paginate(4);

        return view('pet_category', compact('pet_categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addpetcategory');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:20',
            'image' => 'required'
        ]);

        $image = $request->image;
        if($image){
            $imageName = $image->getClientOriginalName();
            $image->move('asset', $imageName);
        }

        $category = new PetCategory();
        $category->name = $request->name;
        $category->image = $imageName;

        $category->save();

        return redirect('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $pets = Pet::where('category_id', '=', $id)->paginate(4);

        if(request()->has('pet-search') && request()->get('pet-search') != ""){
            $search = request()->get('pet-search');
            $pets = DB::table('pets')->where([['name', 'like', "%".$search."%"],['category_id', '=', $id]])->paginate(4);
        }

        return view('pet', compact('pets'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pet_category = PetCategory::find($id);
        return view('categoryedit', compact('pet_category'));
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
        $request->validate([
            'name' => 'required|max:20',
            'image' => 'required'
        ]);

        $image = $request->image;
        if($image){
            $imageName = $image->getClientOriginalName();
            $image->move('asset', $imageName);
        }

        $category = PetCategory::find($id);
        $category->name = $request->name;
        $category->image = $imageName;

        $category->save();

        return redirect('/home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        PetCategory::destroy($id);
        return redirect('/home');
    }
}
