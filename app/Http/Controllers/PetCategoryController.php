<?php

namespace App\Http\Controllers;

use App\Models\PetCategory;
use App\Http\Controllers\Controller;
use App\Models\Pet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PetCategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'can:manage-data'])->except(['show', 'index']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = PetCategory::paginate(4);

        return view('pet-category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pet-category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:20',
            'image' => 'required|mimes:png,jpg'
        ]);

        $imageName = time() . '_' . Auth::user()->id . '.' . $request->image->getClientOriginalExtension();
        $request->file('image')->storeAs('public/category', $imageName);

        PetCategory::create([
            'name' => $validated['name'],
            'image' => $imageName
        ]);

        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PetCategory  $category
     * @return \Illuminate\Http\Response
     */
    public function show(PetCategory $category)
    {
        $pets = Pet::where('pet_category_id', $category->id)->paginate(6);
        if(request()->has('pet-search') && request()->get('pet-search') != ""){
            $search = request()->get('pet-search');
            $pets = Pet::where([
                        ['name', 'like', "%".$search."%"],
                        ['pet_category_id', '=', $category->id]
                    ])->paginate(8)->withQueryString();
        }

        return view('pet-category.show', compact('pets'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PetCategory  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(PetCategory $category)
    {
        return view('pet-category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PetCategory  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PetCategory $category)
    {
        $validated = $request->validate([
            'name' => 'required|max:20',
            'image' => 'required|mimes:png,jpg'
        ]);

        $imageName = time() . '_' . Auth::user()->id . '.' . $request->image->getClientOriginalExtension();
        $request->file('image')->storeAs('public/category', $imageName);

        if (Storage::exists('public/category/' . $category->image)){
            Storage::delete('public/category/' . $category->image);
        }

        $validated['image'] = $imageName;

        $category->update($validated);

        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PetCategory  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(PetCategory $category)
    {
        if (Storage::exists('public/category/' . $category->image)){
            Storage::delete('public/category/' . $category->image);
        }
        $category->delete();
        return redirect()->route('home');
    }
}
