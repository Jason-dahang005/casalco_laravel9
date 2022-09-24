<?php

namespace App\Http\Controllers;

use App\Models\ExpressLoanApp;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExpressLoanAppController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('client.express-loan-form');
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
     * @param  \App\Models\ExpressLoanApp  $expressLoanApp
     * @return \Illuminate\Http\Response
     */
    public function show(ExpressLoanApp $expressLoanApp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ExpressLoanApp  $expressLoanApp
     * @return \Illuminate\Http\Response
     */
    public function edit(ExpressLoanApp $expressLoanApp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ExpressLoanApp  $expressLoanApp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ExpressLoanApp $expressLoanApp)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ExpressLoanApp  $expressLoanApp
     * @return \Illuminate\Http\Response
     */
    public function destroy(ExpressLoanApp $expressLoanApp)
    {
        //
    }
}
