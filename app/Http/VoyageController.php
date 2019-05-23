<?php

namespace App\Http\Controllers;

use Request;
use Illuminate\Support\Facades\Input;
use App\Voyage;
use Validator;

class VoyageController extends Controller
{
    public function __construct()
    {
       $this->middleware('auth')->except('index', 'home');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $voyages = DB::table('voyages')->get();
        return view('voyages', ['voyages', $voyages]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request = (object)Request::all();
        dump($request);
        $voyage = new Voyage;
        $voyage->titre = $request->titre;
        $voyage->destination = $request->destination;
        $voyage->prix = $request->prix;
        $voyage->image = $request->image;
        $voyage->description = $request->description;
        $voyage->save();
        return view('voyages');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $voyage = DB::table('voyages')::where('id', '=', $id)->first();
        return view('voyages')->with('id', $id)->with('voyages', $voyages);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $voyage = Voyage::find($id);
        //return view('edit', ['voyage' => $voyage]);
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
        $validator = Validator::make($request->all(), [
            'libelle' => 'required|min:10',
            'pays' => 'required|min:10',
            'ville' => 'required|min:10',
            'date_debut' => 'required|min:10',
            'date_fin' => 'required|min:10',
            'cout' => 'required|min:3|numeric',
            'photo' => 'required|url',
            'description' => 'required|min:10',
            'disponibilite' => 'required|boolean'
        ]);
        if ($validator->fails()){
            return back()->withErrors($validator)->withInput();
        }
        $voyage = Voyage::find($id);
        $voyage->titre = $request->titre;
        $voyage->destination = $request->destination;
        $voyage->prix = $request->prix;
        $voyage->image = $request->image;
        $voyage->description = $request->description;
        $voyage->save();
        return redirect()->route('voyages.index')->withUpdateMessage("Le voyage : $voyage->titre a été mis à jour");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $voyage = Voyage::find($id);
        $voyage->delete();
        return redirect()->route('voyages.index')->withUpdateMessage("Le voyage : $voyage->titre a bien été supprimé");
    }
}
