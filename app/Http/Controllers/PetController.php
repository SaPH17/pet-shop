<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PetController extends Controller
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pet.create');
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
            'pet_category_id' => 'required|exists:pet_categories,id',
            'price' => 'required|min:5',
            'description' => 'required|min:20',
            'image' => 'required|mimes:png,jpg'
        ]);

        $imageName = time() . '_' . Auth::user()->id . '.' . $request->image->getClientOriginalExtension();
        $request->file('image')->storeAs('pet', $imageName);
        $validated['image'] = $imageName;

        Pet::create($validated);

        return redirect('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pet  $pet
     * @return \Illuminate\Http\Response
     */
    public function show(Pet $pet)
    {
        return view('pet.show', compact('pet'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pet  $pet
     * @return \Illuminate\Http\Response
     */
    public function edit(Pet $pet)
    {
        return view('pet.edit', compact('pet'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pet  $pet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pet $pet)
    {
        $validated = $request->validate([
            'name' => 'required|max:20',
            'pet_category_id' => 'required|exists:pet_categories,id',
            'price' => 'required|min:5',
            'description' => 'required|min:20',
            'image' => 'required|mimes:png,jpg'
        ]);

        if (Storage::exists('pet/' . $pet->image)){
            Storage::delete('pet/' . $pet->image);
        }

        $imageName = time() . '_' . Auth::user()->id . '.' . $request->image->getClientOriginalExtension();
        $request->file('image')->storeAs('pet', $imageName);
        $validated['image'] = $imageName;

        $pet->update($validated);

        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pet  $pet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pet $pet)
    {
        $pet->delete();
        return redirect()->route('home');
    }
}
