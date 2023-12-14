<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Soulier;

class SoulierController extends Controller
{
    //
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $souliers = Soulier::all();
        //dd($souliers);
        return view('soulier.index',compact('souliers'));
   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('soulier.create');

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
            'marque'=>'required',
            'taille'=> 'required',
            'photo'=> 'required |image|mimes:jpg,png,jpeg,gif,svg|max:2048'
        ]);


        if ($request->file('photo')->isValid()) {
            $image = $request->file('photo');
            $fileName = time() . '.' . $image->getClientOriginalExtension();
            $path = $image->storeAs('images/upload', $fileName,'public');
        }

        $soulier = new soulier([
            'marque' => $request->get('marque'),
            'taille' => $request->get('taille'),
            'photo' => $fileName
        ]);


        $soulier->save();
        return redirect('/')->with('success', 'soulier Ajouté avec succès');

      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $soulier = Soulier::findOrFail($id);
        return view('soulier.show', compact('soulier'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $soulier = Soulier::findOrFail($id);

        return view('soulier.edit', compact('soulier'));

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

            'marque'=>'required',
            'taille'=> 'required',
            'photo'=> 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        if ($request->file('photo')->isValid()) {
            $image = $request->file('photo');
            $fileName = time() . '.' . $image->getClientOriginalExtension();
            $path = $image->storeAs('images/upload', $fileName,'public');
        }

        $soulier = soulier::findOrFail($id);
        $soulier->marque = $request->get('marque');
        $soulier->taille = $request->get('taille');
        $soulier->photo = $fileName;
        $soulier->update();

        return redirect('/')->with('success', 'soulier Modifié avec succès');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $soulier = Soulier::findOrFail($id);
        $soulier->delete();

        return redirect('/')->with('success', 'soulier Supprimé avec succès');

    }
}
