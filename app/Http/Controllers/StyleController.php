<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Style;

class StyleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $styles = Style::all();
        //dd($styles);
        return view('style.index',compact('styles'));
   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('style.create');

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
            'nomStyle'=>'required',
            'description'=> 'required'
        ]);


        $style = new style([
            'nomStyle' => $request->get('nomStyle'),
            'description' => $request->get('description')
        ]);


        $style->save();
        return redirect('/')->with('success', 'style Ajouté avec succès');

      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $style = Style::findOrFail($id);
        return view('style.show', compact('style'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $style = Style::findOrFail($id);

        return view('style.edit', compact('style'));

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

            'nomStyle'=>'required',
            'description'=> 'required'
        ]);

        $style = style::findOrFail($id);
        $style->nomStyle = $request->get('nomStyle');
        $style->description = $request->get('description');
        $style->update();

        return redirect('/')->with('success', 'style Modifié avec succès');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $style = Style::findOrFail($id);
        $style->delete();

        return redirect('/')->with('success', 'style Supprimé avec succès');

    }
}
