<?php

namespace App\Http\Controllers;

use App\Models\MembershipApplication;
use App\Models\Beneficiary;
use App\Models\Spouse;
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
    public function store(Request $r)
    {
      
        $requestData = $r->all();
        $fileName =  time().$r->file('selfie_pic')->getClientOriginalName();
        $path = $r->file('selfie_pic')->storeAs('image', $fileName, 'public');
        $requestData["selfie_pic"] = '/storage/'.$path;
        $ms = MembershipApplication::create($requestData);

        if (!empty($r->spouseFname)) {
            $ms->spouse()->create([
                'spouseFname'       => $r->spouseFname,
                'spouseAge'         => $r->spouseAge,
                'spouseOcc'         => $r->spouseOcc,
                'spouseMI'          => $r->spouseMI,
                'spouseEmplrName'   => $r->spouseEmplrName,
                'spouseConNum'      => $r->spouseConNum,
                'spouse_mother'     => $r->spouse_mother,
            ]);
        }

        if(!empty($r->benName)){
            $ms->ben()->create([
                'benName' => $r->benName,
                'benRelation' => $r->benRelation,
                'benAge' => $r->benAge,
                'benAddress' => $r->benAddress,
            ]);
        }


        return redirect('pre_seminar')->with('success', 'oraytz');
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
