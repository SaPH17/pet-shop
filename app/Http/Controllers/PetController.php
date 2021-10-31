<?php

namespace App\Http\Controllers;

use App\Pet;
use Illuminate\Http\Request;

class PetController extends Controller
{
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
        return view('addpet');
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
            'category' => 'required',
            'price' => 'required|min:5',
            'description' => 'required|min:20',
            'image' => 'required'
        ]);

        $image = $request->image;
        if($image){
            $imageName = $image->getClientOriginalName();
            $image->move('asset', $imageName);
        }

        $pet = new Pet();
        $pet->name = $request->name;
        $pet->category_id = $request->category;
        $pet->price = $request->price;
        $pet->description = $request->description;
        $pet->image = $imageName;

        $pet->save();

        return redirect('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Pet $pet)
    {
        return view('petdetail', compact('pet'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Pet $pet)
    {
        return view('petedit', compact('pet'));
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
            'category' => 'required',
            'price' => 'required|min:5',
            'description' => 'required|min:20',
            'image' => 'required'
        ]);

        $image = $request->image;
        if($image){
            $imageName = $image->getClientOriginalName();
            $image->move('asset', $imageName);
        }

        $pet = Pet::find($id);
        $pet->name = $request->name;
        $pet->category_id = $request->category;
        $pet->price = $request->price;
        $pet->description = $request->description;
        $pet->image = $imageName;

        $pet->save();
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
        Pet::destroy($id);
        return redirect('/home');
    }
}
