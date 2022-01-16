<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Chambre ;
use App\Models\Categorie ;

class ChambreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        $chambres = Chambre::all();
        $categories = Categorie::all();
        // $categorie = Categorie::where('categorie_id',3)->firstOrFail();
        // $chambres=$categorie ->chambres();
        return view('chambres',['chambres' => $chambres,'categories' => $categories]);

    }


    public function index2(){
        $categories = Categorie::all();
        $chambres2 = DB::select('SELECT * FROM chambre WHERE categorie_id=3 AND baignoire>0 AND prixBase<100');
        // $users = DB::select('select * from users where active = ?', [1]); // parametres pour ?
        return view('chambres2', ['chambres2' => $chambres2,'categories' => $categories]);
    }

    public function indexOneCategorie(Request $request)
    {
        $id=$request->input('categorie_id');
        $categories = Categorie::all();
        // dd($id);
        $chambres = DB::select('SELECT * FROM chambre WHERE categorie_id ='+ $id);
        
       
        return view('categorie', ['chambres' => $chambres,'categories' => $categories]);
    }

    // public function dispo()
    // {
    //     $chambres = DB::select('select chambre.id, nbCouchage, porte, etage,libelle ,baignoire from chambre inner join categories on chambre.categorie_id = categories.id
    //     where chambre.categorie_id=? and       
    //    chambre.id not in (select reservation.idChambre from reservation where
    //            dateD<? or dateF>?)', [3,'2021-03-03', '2021-03-01'] );
         
    //    // return view('chambres',['chambres' => $chambres]);
    //    return response()->json($chambres);
    // }

    


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $chambre= Chambre::create([
            'nbCouchage' =>2,
            'porte' => 'B',
            'etage' => 10,
            'idCategorie' => 1,
            'baignoire' => 0,
            'prixBase' => 50
        ]);
        //$chambre = new Chambre;
        $chambre->porte='C';
        //$chambre->etage=$request->etage;
        $chambre->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
