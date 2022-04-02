<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */

//    public function addCategorie(Request $request)
//    {
//        $id = $request->input('categorie_id');
//        $categorie = $request->input('libelle');
//
//        $categorieADD = DB::insert('INSERT INTO `otelo_categorie` (`categorie_id`, `libelle`) VALUES (?, ?);', [$id, $categorie]);
//        return view('addCategorie');
//    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view('addCategorie');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $categorie = new Categorie();
        $categorie_id = $request->input('categorie_id');
        $libelle = $request->input('libelle');

        $categorie->categorie_id = $categorie_id;
        $categorie->libelle = $libelle;

        var_dump($categorie_id,$libelle);

        $categorie->save();
        return redirect()->back();
    }


    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public
    function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public
    function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public
    function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public
    function destroy($id)
    {
        //
    }
}
