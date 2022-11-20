<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExpressLoanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('client.loan.express.express-loan-index');
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
        $request->validate([
            'name_of_member'        => 'required|string',
            'date'                  => 'required',
            'account_no'            => 'required',
            'present_address'       => 'required',
            'permanent_address'     => 'required',
            'loan_type'             => 'required',
            'employer'              => 'required',
            'employer_address'      => 'required',
            'date_of_birth'         => 'required',
            'age'                   => 'required|numeric',
            'cellphone_no'          => 'required',
            'tin_no'                => 'required',
            'email_address'         => 'required',
            'facebook_account'      => 'required',
            'amount_applied'        => 'required|numeric',
            'term_applied'          => 'required|numeric',
            'mode_of_payment'       => 'required',
            'scanned_signature'     => 'required',
        ]);


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
