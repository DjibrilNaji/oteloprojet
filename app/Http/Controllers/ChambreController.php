<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Chambre;
use App\Models\Categorie;

class ChambreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */

    public function index()
    {
        $chambres = Chambre::all();
        $categories = Categorie::all();
        return view('chambres', ['chambres' => $chambres, 'categories' => $categories]);

    }


    public function indexPart2()
    {
        $categories = Categorie::all();
        $chambres2 = DB::select('SELECT * FROM otelo_chambre WHERE categorie_id=3 AND baignoire>0 AND prixBase<100');
        // $users = DB::select('select * from users where active = ?', [1]); // parametres pour ?
        return view('chambres2', ['chambres2' => $chambres2, 'categories' => $categories]);
    }

    public function prixDecroissant()
    {
        $categories = Categorie::all();
        $chambres2 = DB::select('SELECT * FROM otelo_chambre order by prixBase');
        // $users = DB::select('select * from users where active = ?', [1]); // parametres pour ?
        return view('prixDecroissant', ['chambres2' => $chambres2, 'categories' => $categories]);
    }

    public function vueSurMer()
    {
        $categories = Categorie::all();
        $chambres2 = DB::select('select * from otelo_chambre where description="Mer"');
        return view('vueSurMer', ['chambres2' => $chambres2, 'categories' => $categories]);
    }

    public function indexOneCategorie(Request $request)
    {
        $categorie_id = $request->input('categorie_id');
        $categories = Categorie::all();
        $chambres2 = DB::select('select * from otelo_chambre where categorie_id = ?', [$categorie_id]); // parametres pour ?
        return view('categorie', ['chambres2' => $chambres2, 'categories' => $categories]);
    }

    public function dispo(Request $request)
    {
        $categorie_id = $request->input('categorie_id');
        $dateD = $request->input('dated');
        $dateF = $request->input('datef');

        $categories = Categorie::all();
        $disponibilite = DB::select('select id, nbCouchage, porte, etage, libelle, baignoire, prixBase, description from otelo_chambre
        inner join otelo_categorie on otelo_chambre.categorie_id=otelo_categorie.categorie_id where otelo_chambre.categorie_id=? and otelo_chambre.id not in
        (select otelo_reservation.idChambre from otelo_reservation where (?<=dateF and ?>=dateD) or (?>=dateD and ?<=dateF)) order by id ;',
            [$categorie_id, $dateD, $dateD, $dateF, $dateF]);

        return view('dispo', ['disponibilite' => $disponibilite, 'categories' => $categories]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response|null
     */
    public function store(Request $request)
    {
        $chambre = Chambre::create([
            'nbCouchage' => 2,
            'porte' => 'B',
            'etage' => 10,
            'categorie_id' => 1,
            'baignoire' => 0,
            'prixBase' => 50
        ]);
        //$chambre = new Chambre;
        $chambre->porte = 'C';
        //$chambre->etage=$request->etage;
        $chambre->save();
        return null;
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return void
     */
    public function show(int $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return void
     */
    public function edit(int $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
