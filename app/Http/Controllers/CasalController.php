<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCasalRequest;
use App\Http\Requests\UpdateCasalRequest;
use Illuminate\Http\Request;
use App\Models\Casal;

class CasalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $casals = Casal::all();
        return view('casals', ['casals' => $casals]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('newcasal');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validated = $request->validate([
            'nom' => 'required',
            'data_inici' => 'required',
            'data_final' => 'required',
            'n_places' => 'required',
            
        ]);

        $casal = new Casal();
        $casal->nom = $request->nom;
        $casal->data_inici = $request->data_inici;
        $casal->data_final = $request->data_final;
        $casal->n_places = $request->n_places;
         
        $casal->save();
 
         
        return redirect()->route('home')->with('success', 'casal creado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Casal $casal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $casal = Casal::find($id);

        return view('editcasal', ['casal' => $casal]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $casal = Casal::find($request->id);

        if ($casal) {
            $validated = $request->validate([
                'nom' => 'required',
                'data_inici' => 'required',
                'data_final' => 'required',
                'n_places' => 'required',
            ]);
    
            $casal->nom = $request->nom;
            $casal->data_inici = $request->data_inici;
            $casal->data_final = $request->data_final;
            $casal->n_places = $request->n_places;
             
            $casal->update();
    
            return redirect()->route('home')->with('success', 'casal creado correctamente.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $casal = Casal::findOrFail($id);
        $casal->delete();
        return redirect()->route('home')->with('success', 'casal eliminado correctamente.');
    }
}
