<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\LoanApplication;
use App\Models\ExpressLadLoanDetails;
use RealRashid\SweetAlert\Facades\Alert;

class ApplyLoanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
            'account_no'            => 'required',
            'present_address'       => 'required',
            'permanent_address'     => 'required',
            'product_loan'          => 'required',
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

        $applyloan = new LoanApplication();
        $applyloan->members_id = $request->member;
        $applyloan->loan_type = $request->application_type;
        $applyloan->save();

        $imageName = time().'.'.$request->scanned_signature->extension();

        $request->scanned_signature->move(public_path('sys_img'), $imageName);

        if ($request->application_type === 'express') {
            $express = new ExpressLadLoanDetails();
            $express->loan_applications_id      = $applyloan->id;
            $express->employer                  = $request->employer;
            $express->employer_address          = $request->employer_address;
            $express->amount_applied            = $request->amount_applied;
            $express->term_applied              = $request->term_applied;
            $express->mode_of_payment           = $request->mode_of_payment;
            $express->facebook_account          = $request->facebook_account;
            $express->scanned_signature         = $imageName;
            $express->product_loan              = $request->product_loan;
            $express->save();

            return redirect('loan-application');
            
        }elseif ( $request->application_type === 'lad') {
            $express = new ExpressLadLoanDetails();
            $express->loan_applications_id      = $applyloan->id;
            $express->employer                  = $request->employer;
            $express->employer_address          = $request->employer_address;
            $express->amount_applied            = $request->amount_applied;
            $express->term_applied              = $request->term_applied;
            $express->mode_of_payment           = $request->mode_of_payment;
            $express->facebook_account          = $request->facebook_account;
            $express->scanned_signature         = $imageName;
            $express->product_loan              = $request->product_loan;
            $express->save();

            return redirect('loan-application');
        }


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
