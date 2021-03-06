<?php

namespace App\Http\Controllers;

use App\Models\Vaccination_Center;
use Illuminate\Http\Request;

class VaccinationCenterController extends Controller
{
    public function index()
    {
        $vaccinationCenters = Vaccination_Center::paginate();
        return view('vaccination-centers.index', ['vaccinationCenters' => $vaccinationCenters]);
    }

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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vaccination_Center  $vaccination_Center
     * @return \Illuminate\Http\Response
     */
    public function show(Vaccination_Center $vaccination_Center)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vaccination_Center  $vaccination_Center
     * @return \Illuminate\Http\Response
     */
    public function edit(Vaccination_Center $vaccination_Center)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vaccination_Center  $vaccination_Center
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vaccination_Center $vaccination_Center)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vaccination_Center  $vaccination_Center
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vaccination_Center $vaccination_Center)
    {
        //
    }
}
