<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('createReservation');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
//    public function store(Request $request)
//    {
//        $validatedData = $request->validate([
//            'dated' => 'required|date|before:datef',
//            'datef' => 'required|date|after:dated',
//            'idperiode' => 'required|between:1,3'
//        ]);
//
//        $reservation = new Reservation();
//        $dated = $request->input('dated');
//        $datef = $request->input('datef');
//        $idperiode = $request->input('idperiode');
//        $reservation->dateD = $dated;
//        $reservation->dateF = $datef;
//        $reservation->idPeriode = $idperiode;
//
//        // var_dump($dated,$datef,$idperiode);
//
//        $reservation->save();
//        return redirect()->back();
//    }

    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'dated' => 'required|date|before:datef',
            'datef' => 'required|date|after:dated',
            'idperiode' => 'required|between:1,3'
        ]);

        $dateD = $request->input('dated');
        $dateF = $request->input('datef');
        $periode = $request->input('idperiode');
        $categorie_id = $request->input('categorie_id');

        $disponibilite = DB::select('select id from otelo_chambre inner join otelo_categorie on otelo_chambre.categorie_id=otelo_categorie.categorie_id
        where otelo_chambre.categorie_id=? and otelo_chambre.id not in (select otelo_reservation.idChambre from otelo_reservation
        where (?>=dateD and ?>=dateD and ?<=dateF and ?<=dateF)
        or (?>=dateD and ?<=dateF) or (?>=dateD and ?<=dateF)
        or (?<=dateD and ?>=dateF)) order by id limit 1;',
            [$categorie_id, $dateD, $dateF, $dateD, $dateF, $dateD, $dateD, $dateF, $dateF, $dateD, $dateF]);

//        dd($disponibilite[0]->id);

        $a = Auth::user()->email;
//        dd($a);
        $client = DB::select("select id from otelo_users where email='" . $a . "'");


        DB::insert("INSERT INTO otelo_reservation (dateD, dateF, idPeriode, idChambre, idUser)
        VALUES (?,?,?,?,?)", [$dateD, $dateF, $periode, $disponibilite[0]->id, $client[0]->id]);

        return redirect()->route('accueil')->with('success', 'réservation enregistrée');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Response
     */

    public function show(int $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Response
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
    public function update(Request $request, int $id)
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
