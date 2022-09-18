<?php

namespace App\Http\Controllers;

use App\Models\MembershipApplication;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MembershipApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('client.membership-application');
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
            'Fname'           => 'required',
            'Mname'           => 'required',
            'Lname'           => 'required',
            'gender'          => 'required',
            'dob'             => 'required',
            'Bplace'          => 'required',
            'address'         => 'required',
            'unit'            => 'required',
            'occupation'      => 'required',
            'educ'            => 'required',
            'MI'              => 'required',
            'civilStatus'     => 'required',
            'religion'        => 'required',
            'contactNum'      => 'required',
            'TIN'             => 'required',
            'SSSnum'          => 'required',
            'email'           => 'required',
            'NumDependents'   => 'required',
            'spouseFname'     => 'required',
            'spouseAge'       => 'required',
            'spouseOcc'       => 'required',
            'spouseMI'        => 'required',
            'spouseEmplrName' => 'required',
            'spouseConNum'    => 'required',
            'benName'         => 'required',
            'benRelation'     => 'required',
            'benAge'          => 'required',
            'benAddress'      => 'required',
            'benMothersLname' => 'required',
            'benMothersFname' => 'required',
            'benMothersMname' => 'required',
            //'selfiepic'       => 'required',
            // 'empIDpic'        => 'required',
        ]);

        MembershipApplication::create($request->all());

        return redirect('/')->with('success','Membership Application Successfully Sent, Please Just Wait For A Call/Email');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MembershipApplication  $membershipApplication
     * @return \Illuminate\Http\Response
     */
    public function show(MembershipApplication $membershipApplication)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MembershipApplication  $membershipApplication
     * @return \Illuminate\Http\Response
     */
    public function edit(MembershipApplication $membershipApplication)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MembershipApplication  $membershipApplication
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MembershipApplication $membershipApplication)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MembershipApplication  $membershipApplication
     * @return \Illuminate\Http\Response
     */
    public function destroy(MembershipApplication $membershipApplication)
    {
        //
    }
}
