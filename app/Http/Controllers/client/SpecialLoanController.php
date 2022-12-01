<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\User;
use Carbon\Carbon;
use App\Models\LoanApplication;
use Illuminate\Support\Facades\Auth;

class SpecialLoanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::check()) {
            $loan = Member::join('users', 'users.id', '=', 'members.users_id')
                        ->join('membership_applications', 'membership_applications.id', '=', 'members.membership_application_id')
                        ->select('users.*', 'membership_applications.*', 'members.*')
                        ->where('users_id', '=', auth()->user()->id)
                        ->first();

        $edad = $loan['dob'];
        $years = Carbon::parse($edad)->age;

        return view('client.loan_application.special_loan.special-loan-application', compact(['loan', 'years']));
        }
        return view('client.loan_application.special_loan.special-loan-application');
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
